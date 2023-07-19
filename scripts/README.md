## Creating Releases

1. In the terminal, in root of project, run the release prep script:
    ```shell
    ./scripts/prepare-release.sh vX.Y.Z
    ```
   - This will prepare a branch with the directory and files structured for
     compatibility with WordPress
2. Verify files and changes and then commit changes with git
3. Push prep branch to origin:
    ```shell
    git push origin prep-vX.Y.Z
    ```
4. Go to Release page for repository in GitHub GUI
   1. Generate new Release, targeting `prep-vX.Y.Z` branch, creating new tag of
      `vX.Y.Z`
   2. Use **Generate release notes** button to auto-fill contents
   3. Fill in remaining relevant information
   4. Publish release
      - Due to step 1, the `.zip` archive will contain correctly structured
        files
5. Clean-up prep branch
   1. Delete branch `prep-vX.Y.Z` in GitHub GUI
   2. Delete branch `prep-vX.Y.Z` locally:
        ```shell
        git branch -D prep-vX.Y.Z
        ```
