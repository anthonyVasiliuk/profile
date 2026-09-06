## Anton Vasiliuk Profile

Personal developer profile and online resume built with Laravel 13, Livewire Volt, Tailwind CSS 4, and Vite.

This project presents my commercial background as a backend-focused PHP developer with fullstack experience. It includes bilingual content, selected project experience, recommendations, and direct contact links, all wrapped in a production-ready Laravel setup with Docker and Render deployment support.

Short project summary:

> Production-ready personal portfolio for a backend-focused PHP developer, built with Laravel and Livewire to present experience, stack, selected commercial work, and recommendations in a clean bilingual format.

## Docker

The project includes a production-oriented app container (`nginx + php-fpm`) plus a separate Caddy reverse proxy for VPS/prod with automatic HTTPS.

### Local run

The repo already contains a ready local Docker env file: `.env.docker`.

```bash
docker compose up -d
```

The app will be available at `http://localhost:8080`.

Local Docker now uses a bind mount for the whole project, so PHP/Laravel changes are visible inside the container immediately without rebuilding the image on every restart.

The local stack also starts a Vite dev server on `http://localhost:5173`, so changes in Blade, CSS, and JS are picked up without rebuilding `public/build`.

Rebuild only when the container image itself must change, for example after updating:

- the `Dockerfile` or files under `docker/`

If PHP dependencies change, update local `vendor/` as usual and the app container will see them through the bind mount.

Then run:

```bash
docker compose up -d --build
```

The site runs on its own domain, `anthonyv.online`.

`.env.docker.prod` is not tracked in git, so the server keeps its own copy. Changing the domain means editing that file on the server too, not only here.

The active production mode is **behind the existing Instagrid Caddy container** — see that section below. The two sections before it describe standalone alternatives.

### VPS / production run

Prepared target:

- `APP_URL=https://anthonyv.online`
- `CADDY_DOMAIN=anthonyv.online`
- `CADDY_EMAIL=admin@instiles.online`
- `HOST_HTTP_PORT=8081`
- `HOST_HTTPS_PORT=443`

Edit `.env.docker.prod` first:

- confirm `APP_URL=https://anthonyv.online`
- confirm `CADDY_DOMAIN=anthonyv.online`
- change `CADDY_EMAIL=admin@instiles.online` if you want Let's Encrypt notices to go to another mailbox
- keep `HOST_HTTP_PORT=8081` if port `80` is already occupied on the server
- keep `HOST_HTTPS_PORT=443` if port `443` is free

DNS before first start:

- create an `A` record for `anthonyv.online`
- point it to your VPS public IPv4
- add an `A` record for `www.anthonyv.online` too, otherwise Caddy keeps failing to issue a certificate for it
- if you use IPv6, add `AAAA` records as well

Then run on the server:

```bash
git pull
docker compose -f compose.prod.yaml up -d --build
```

In production, only Caddy publishes host ports; the Laravel app stays internal.

Port notes:

- this setup is prepared for `8081 -> 80` and `443 -> 443`
- that solves the current conflict when port `80` is already taken by another service
- if `443` is also occupied, standard HTTPS issuance for `anthonyv.online` will not work directly on this stack until you either free `443` or put an existing reverse proxy in front of it

### VPS / production behind existing nginx or caddy

Use this mode when ports `80` and `443` are already occupied by another web server on the VPS.

Prepared target:

- `HOST_APP_PORT=8088`

This stack publishes the Laravel app only on loopback:

- `127.0.0.1:8088 -> container 8080`

Start it with:

```bash
docker compose -f compose.prod.proxy.yaml up -d --build
```

Then point your existing reverse proxy for `anthonyv.online` to `http://127.0.0.1:8088`.

Minimal nginx example:

```nginx
server {
    server_name anthonyv.online;

    location / {
        proxy_pass http://127.0.0.1:8088;
        proxy_set_header Host $host;
        proxy_set_header X-Real-IP $remote_addr;
        proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
        proxy_set_header X-Forwarded-Proto $scheme;
    }
}
```

Minimal Caddy example:

```caddy
anthonyv.online {
    reverse_proxy 127.0.0.1:8088
}
```

### VPS / production behind the existing Instagrid Caddy container

Use this mode when `instiles.online` is already served by the `instagrid` Docker stack on ports `80/443`.

This stack does not publish any host ports. Instead, it joins the existing Docker network from `instagrid` and exposes the portfolio app there under the alias `profile-app`.

Start it with:

```bash
docker compose -f compose.prod.instagrid-edge.yaml up -d --build
```

The public hostname lives in the `instagrid` repo, because that stack owns ports `80/443`. Its `Caddyfile` must contain:

```caddy
anthonyv.online {
    encode zstd gzip

    header {
        Strict-Transport-Security "max-age=31536000; includeSubDomains; preload"
        X-Content-Type-Options "nosniff"
        X-Frame-Options "SAMEORIGIN"
        Referrer-Policy "strict-origin-when-cross-origin"
    }

    reverse_proxy profile-app:8080
}

www.anthonyv.online {
    redir https://anthonyv.online{uri} permanent
}

profile.instiles.online {
    redir https://anthonyv.online{uri} permanent
}
```

After editing it, reload Caddy on the server from the `instagrid` project root:

```bash
docker compose exec caddy caddy reload --config /etc/caddy/Caddyfile
```

Notes:

- `profile.instiles.online` is the previous hostname, kept as a permanent redirect so old links keep working; drop that block once nothing points there anymore
- the `Caddyfile` in `instagrid` is mounted read-only, so a reload is enough — no rebuild of that stack
- `profile-app` is the network alias exported by this portfolio stack for Caddy to reach
- the network name defaults to `instiles_default`; override it with the `EDGE_NETWORK` shell variable if the `instagrid` stack uses another one
- `EDGE_NETWORK` is read by Docker Compose itself, so it must come from the shell or a `.env` file next to the compose file — putting it in `.env.docker.prod` has no effect, since `env_file` is only passed to the container
- find the real name with `docker network ls`

## Scripts

### Local helpers

PowerShell helpers for Windows:

```powershell
./scripts/local-up.ps1
./scripts/local-logs.ps1
./scripts/local-down.ps1
```

### VPS helpers

Run on the server from the project root:

```bash
bash scripts/deploy-prod.sh
bash scripts/logs-prod.sh
bash scripts/down-prod.sh
```

`deploy-prod.sh` rebuilds, restarts, removes orphaned containers, and prints final status.
It also accepts a compose file override, for example:

```bash
bash scripts/deploy-prod.sh compose.prod.instagrid-edge.yaml
```

Or through an environment variable:

```bash
PROFILE_DEPLOY_COMPOSE_FILE=compose.prod.instagrid-edge.yaml bash scripts/deploy-prod.sh
```

### GitHub Actions deploy

The repository now includes `.github/workflows/deploy.yml`.
It runs automatically after the `tests` workflow succeeds on `main`, and it can also be started manually through `workflow_dispatch`.

Required repository secrets:

- `DEPLOY_HOST` — server hostname or IP
- `DEPLOY_USER` — SSH user
- `DEPLOY_SSH_KEY` — private SSH key for that user
- `DEPLOY_PATH` — absolute path to this repo on the server
- `DEPLOY_PORT` — optional, defaults to `22`
- `DEPLOY_COMPOSE_FILE` — optional, defaults to `compose.prod.yaml`

Examples for `DEPLOY_COMPOSE_FILE`:

- `compose.prod.yaml`
- `compose.prod.proxy.yaml`
- `compose.prod.instagrid-edge.yaml`

For the current Instagrid edge setup, set:

```text
DEPLOY_COMPOSE_FILE=compose.prod.instagrid-edge.yaml
```

### Notes

- `AUTO_GENERATE_APP_KEY=true` allows the container to generate and persist an app key in the storage volume on first boot.
- `RUN_MIGRATIONS=true` can be enabled if you decide to use the bundled SQLite database or another real database backend.
- The default Docker setup uses `sqlite` plus file-based session/cache drivers, which is sufficient for this portfolio project and keeps deployment simple.
- Production containers are intentionally constrained to low resource usage:
  - `app`: `384m` memory limit, `0.75` CPU
  - `caddy`: `128m` memory limit, `0.25` CPU
