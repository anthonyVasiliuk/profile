#!/usr/bin/env bash
set -euo pipefail

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
cd "$ROOT_DIR"

COMPOSE_FILE_PATH="${1:-${PROFILE_DEPLOY_COMPOSE_FILE:-compose.prod.shared-edge.yaml}}"

if [[ ! -f ".env.docker.prod" ]]; then
    echo ".env.docker.prod not found"
    exit 1
fi

if [[ ! -f "$COMPOSE_FILE_PATH" ]]; then
    echo "Compose file not found: $COMPOSE_FILE_PATH"
    exit 1
fi

echo "Deploying with $COMPOSE_FILE_PATH"
docker compose -f "$COMPOSE_FILE_PATH" config --quiet
docker compose -f "$COMPOSE_FILE_PATH" up -d --build --remove-orphans --wait --wait-timeout "${PROFILE_DEPLOY_WAIT_TIMEOUT:-300}"
docker compose -f "$COMPOSE_FILE_PATH" ps
