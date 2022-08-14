### Install

1. Clone this project
2. Run `composer install`
3. Run `yarn install`

### Working

1. Run `symfony server:start` to launch your local php web server
2. Run `yarn run dev --watch` to launch your local server for assets

### database

1.create a copy of .env named .env.local and add you login and password of your database
2.Run 'symfony console doctrine:database:create' to create the database
3.Run 'symfony console doctrine:migrations:migrate' to get the latest migration of the database
4.Run 'php bin/console doctrine:fixtures:load' to load the existing fixtures

### Windows Users

If you develop on Windows, you should edit you git configuration to change your end of line rules with this command :

`git config --global core.autocrlf true`
