# caApp
- Conference attendance application using QR Code.

# Installation
    1. git clone <this repo>
    2. Create database named attendanceappdb
    3. run `composer update` newer mysql versions has bugs (stalling in this part) see [workaround](https://github.com/laradock/laradock/issues/1392)
    4. run `php artisan db:seed`
    5. run `php artisan key:generate`
    6. run `php artisan serve`
    6. Start browsing
