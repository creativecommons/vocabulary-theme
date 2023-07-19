#!/bin/bash
set -o errexit
set -o errtrace
set -o nounset

# Change directory to repository root
# (parent directory of this script's location)
pushd "${0%/*}/.." >/dev/null

printf "\e[1m\e[7m %-80s\e[0m\n" 'Remove staged directories/files'
rm -fr -- \
    *.css \
    *.php \
    ./css \
    ./fonts \
    ./js \
    ./svg \
    .env
echo 'done.'
echo

printf "\e[1m\e[7m %-80s\e[0m\n" 'Restore repository'
git restore .
git status
echo
