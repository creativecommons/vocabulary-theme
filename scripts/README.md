# Scripts


## Creating Releases

1. Be the version in `src/style.css` is set to the correct version.

2. In the terminal, in root of project, run the release prep script:
    ```shell
    ./scripts/prepare-release.sh vX.Y.Z
    ```
   - This will prepare a branch with the directory and files structured for
     compatibility with WordPress
3. Verify files and changes and then commit changes with git
4. Push prep branch to origin:
    ```shell
    git push origin prep-vX.Y.Z
    ```
5. Go to Release page for repository in GitHub GUI
   1. Generate new Release, targeting `prep-vX.Y.Z` branch, creating new tag of
      `vX.Y.Z`
   2. Use **Generate release notes** button to auto-fill contents
   3. Fill in remaining relevant information
   4. Publish release
      - Due to step 1, the `.zip` archive will contain correctly structured
        files
6. Clean-up prep branch
   1. Delete branch `prep-vX.Y.Z` in GitHub GUI
   2. Delete branch `prep-vX.Y.Z` locally:
        ```shell
        git branch -D prep-vX.Y.Z
        ```


## Release process development

The `unprepare-release.sh` is a convenience script for developing the release
process. It is not normally used. When developing the release process, it can
be invoked after `prepare-release.sh`:
```shell
git restore scripts && ./scripts/unprepare-release.sh
```
