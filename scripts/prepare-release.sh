#!/bin/bash
set -o errexit
set -o errtrace
set -o nounset

# note: always run this in the project's root

# setup fun colors for added UX
BLUE='\033[0;34m'
GREEN='\033[0;32m'
PURPLE='\033[0;35m'
NC='\033[0m'


if [ -z ${1+x} ]
    then
         echo -e "${BLUE}missing VERSION argument, in format: v0.1.0${NC}"  
    else 
        git checkout -b prep-${1}
        mv ./src/* ./
        rm -r ./src

        # remove unneeded files for release
        rm -r ./.devcontainer
        rm -r ./.github
        rm -r ./docker
        rm -r .cc-metadata.yml
        rm -r .env.example
        rm -r .gitignore
        rm -r docker-compose.yml

        rm -r ./scripts

        echo "prep complete";
        git status
        
        echo -e "${BLUE}changes ready to be commited, please commit, and push with${NC}"
        echo -e "${PURPLE}git push origin prep-${1}${NC}"
        #echo -e "${BLUE}please remove the scripts folder to continue${NC}"
        #echo -e "${PURPLE}rm -r ./scripts${NC}"
fi
