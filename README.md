# psp-theme-2026

This repository contains the WordPress theme for the Podcast Standards Project website, [podstandards.org](https://podstandards.org). Any changes to the theme should be made here, rather than in wp-admin. Anything merged to `main` should be ready to be deployed to production.

> [!NOTE] 
> `README.md` is different from `readme.txt`.
> - `README.md` (this file) describes this repo and provides instructions for development. It does not get deployed to production.
> - `readme.txt`describes the theme itself. It is deployed to production.

---

## How to develop locally

### Get a local copy of the site
- Download and install WordPress Studio: [developer.wordpress.com/studio](http://developer.wordpress.com/studio/)   
- Log into Studio with our WordPress.com account 
- Click **Add Site**  
- Click **Connect a Site**  
- Select the PSP site  
- Open the site's **Sync** tab and click **Pull**  
- For this first time, pull all files and database.  
  * If you need to pull site updates in the future, select “Specific files and folders” and exclude the Themes folder\!  
  * Do NOT use Studio’s Push feature  
- If the pull errors out and you get cryptic errors, just delete the site in Studio and start over

### Connect local theme folder to the git repo 

- Go to `~/Studio/<site-name>/wp-content/themes/`  
- Delete the folder `psp-theme-2026`  
- Run `git clone https://github.com/Podcast-Standards-Project/psp-theme-2026.git`  
- In WP Studio, go to **Overview** and make sure the local site’s active theme is PSP-Theme-2026

### Start developing

- Switch to a new git branch, make changes to the files, etc  
- In WP Studio, click **Open Local Site** to see what your changes look like  
- Push your changes to a remote branch

## How to deploy to production

- Merge your branch to `main` (in GitHub)  
  - Make sure to switch back to `main` and run `git pull` in your local repo,   
- Go to [**WordPress.com \> Sites \> Podcast Standards Project \> Deployments**](https://wordpress.com/github-deployments/podstandards.org)   
- Click on the three-dot-menu next to the `psp-theme-2026` repo  
- Click **trigger manual deployment**
