#!/usr/bin/env bash
set -euo pipefail

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
cd "$ROOT_DIR"

COMPOSE_FILE_PATH="${1:-${PROFILE_DEPLOY_COMPOSE_FILE:-compose.prod.yaml}}"

if [[ ! -f ".env.docker.prod" ]]; then
    echo ".env.docker.prod not found"
    exit 1
fi

if [[ ! -f "$COMPOSE_FILE_PATH" ]]; then
    echo "Compose file not found: $COMPOSE_FILE_PATH"
    exit 1
fi

echo "Deploying with $COMPOSE_FILE_PATH"
docker compose -f "$COMPOSE_FILE_PATH" up -d --build --remove-orphans
docker compose -f "$COMPOSE_FILE_PATH" ps
