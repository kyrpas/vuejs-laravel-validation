# Laravel-based Vue.js form validation

A basic, working example of using Laravel's server-side validation in a Vue.js component.

Inspired by: https://medium.com/@lollypopgr/my-take-on-validating-vue-js-powered-forms-in-a-laravel-app-d1c60694865f

Server-side only validation uses Laravel's Form Requests (https://laravel.com/docs/master/validation#form-request-validation)

Error handling class (errors.js) is part of Jeffrey Way's Object Oriented Forms concept (https://github.com/laracasts/Vue-Forms/blob/master/public/js/app.js)

To try:

- clone the repository
- `composer install`
- `npm install`
- setup your database in .env
- `php artisan migrate`
- `npm run dev` to create public assets
