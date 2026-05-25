## Anton Vasiliuk Profile

Personal developer profile and online resume built with Laravel 12, Livewire Volt, Tailwind CSS 4, and Vite.

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

### VPS / production run

Edit `.env.docker.prod` first:

- set `APP_URL=https://your-domain.example`
- set `CADDY_DOMAIN=your-domain.example`
- set `CADDY_EMAIL=admin@your-domain.example`

Then run:

```bash
docker compose -f compose.prod.yaml up -d --build
```

In production, only Caddy publishes ports `80` and `443`; the Laravel app stays internal.

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

### Notes

- `AUTO_GENERATE_APP_KEY=true` allows the container to generate and persist an app key in the storage volume on first boot.
- `RUN_MIGRATIONS=true` can be enabled if you decide to use the bundled SQLite database or another real database backend.
- The default Docker setup uses `sqlite` plus file-based session/cache drivers, which is sufficient for this portfolio project and keeps deployment simple.
