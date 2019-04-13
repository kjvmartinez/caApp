# caApp
- Conference attendance application using QR Code.

# Installation
  1. fire terminal, git clone this repo. to directory of your choice
  2. Create database named attendanceappdb, start mysql
  3. rename .env.example to .env, open & edit username and password to your db account, save
  3. run `composer update` newer mysql versions has bugs (stalling in this part) see [workaround](https://github.com/laradock/laradock/issues/1392)
  4. run `php artisan db:seed`
  5. run `php artisan key:generate`
  6. run `php artisan serve`
  7. Start browsing
