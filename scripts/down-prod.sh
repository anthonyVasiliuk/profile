#!/usr/bin/env bash
set -euo pipefail

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
cd "$ROOT_DIR"

COMPOSE_FILE_PATH="${1:-${PROFILE_DEPLOY_COMPOSE_FILE:-compose.prod.instagrid-edge.yaml}}"

docker compose -f "$COMPOSE_FILE_PATH" down
