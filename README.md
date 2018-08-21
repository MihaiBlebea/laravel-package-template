# Install the Laravel Package Template

0. Important! Go to the main Laravel app folder and run "git init" to not override this template repo
1. Clone the repo https://github.com/SerbanBlebea/laravel-package-template.git
2. Go to /package folder and change the name of the package from "Template" to "Your package name", also change the service provider name and all the files
3. Go to the main Laravel app and change the composer.json to autoload the new package name
4. Go to config and add the name ServiceProvider name and Facade name
5. In the main Laravel app run "composer dump-autoload -o" and "composer install"
6. In the package folder run "composer install"
7. Add your own logic and enjoy your package
