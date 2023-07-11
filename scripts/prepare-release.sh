#!/bin/bash
set -o errexit
set -o errtrace
set -o nounset

# always run this in the project's root

git checkout -b prep-${1}
mv ./src/* ./
rm -r ./src
# remove other files here
echo "prep complete";
git status
echo 'please remove the scripts folder to continue'
echo "rm -r ./scripts"
echo "changes ready to be commited, please commit, and push with"
echo "git push origin prep-${1}"
