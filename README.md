# caApp
- Conference attendance application using QR Code.

# Installation
  1. go to your terminal, clone this repo. to a directory of your choice
  2. Create database named attendanceappdb, start mysql
  3. rename .env.example to .env, open & edit username and password to your db account, save
  4. run `composer update` 
  5. run `php artisan migrate` newer mysql versions has bugs (stalling in this part) see [workaround](https://github.com/laradock/laradock/issues/1392)
  6. run `php artisan db:seed`
  7. run `php artisan key:generate`
  8. run `php artisan serve`
  9. browse `http://localhost:8000`
