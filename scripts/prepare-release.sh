#!/bin/bash
set -o errexit
set -o errtrace
set -o nounset

# setup fun colors for added UX
BLUE='\033[0;34m'
PURPLE='\033[0;35m'
NC='\033[0m'

# Change directory to repository root
# (parent directory of this script's location)
pushd "${0%/*}/.." >/dev/null

if [[ -z "${1+x}" ]]
then
     echo -e "${BLUE}missing VERSION argument, in format: v0.1.0${NC}" 1>&2
     exit 1
else
    printf "\e[1m\e[7m %-80s\e[0m\n" 'Checkout prep branch'
    git checkout -b "prep-${1}"
    mv ./src/* ./
    # remove unneeded files for release (and self destruct)
    rm -fr \
        ./.devcontainer \
        ./.github \
        ./src \
        ./docker \
        ./scripts \
        .cc-metadata.yml \
        .env.example \
        .gitignore \
        docker-compose.yml

    echo 'prep complete';
    git status

    echo -en "${BLUE}changes ready to be commited, please commit, and push"
    echo -e " with${NC}"
    echo -e "${PURPLE}git push origin prep-${1}${NC}"
fi
