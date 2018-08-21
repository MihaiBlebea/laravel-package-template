# Install the Laravel Package Template

1. Important! Go to the main Laravel app folder, delete the ".git" folder and run "git init" to not override this template repo
2. Add an ".env" file
3. Clone the repo https://github.com/SerbanBlebea/laravel-package-template.git
4. Go to /package folder and change the name of the package from "Template" to "Your package name", also change the service provider name and all the files
5. Go to the main Laravel app and change the composer.json to autoload the new package name
6. Go to config and add the name ServiceProvider name and Facade name
7. In the main Laravel app run "composer dump-autoload -o" and "composer install"
8. In the package folder run "composer install"
9. Add your own logic and enjoy your package
