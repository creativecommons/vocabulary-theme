## Creating Releases

1. In the terminal, in root of project, run the release prep script: `./scripts/prepare-release.sh vX.X.X`
2. Verify files, and changes; commit changes with git
3. Push prep branch to origin: `git push origin prep-vX.X.X`
4. Go to Release page for repository in GitHub GUI
5. Generate new Release, targeting prep-vX.X.X branch, creating new tag of vX.X.X
6. Use `Generate release notes` button to auto-fill contents
7. Fill in remaining relevant information
8. Publish release, which will now have the correctly structured files in the .zip archives
9. Delete branch prep-vX.X.X, in GH GUI, and optionally locally: `git branch -D vX.X.X`
