#!/usr/bin/env bash
set -euo pipefail

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
cd "$ROOT_DIR"

if [[ ! -f ".env.docker.prod" ]]; then
    echo ".env.docker.prod not found"
    exit 1
fi

docker compose -f compose.prod.yaml up -d --build --remove-orphans
docker compose -f compose.prod.yaml ps
