<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

installato 
      "laravel/jetstream": "^5.3",
      "laravel/livewire-starter-kit": "^1.0",
      "laravel/sanctum": "^4.0",
      "livewire/livewire": "^3.0"

php artisan  jetstream:install   
php artisan jetstream:install --teams
php artisan fortify:install 

php artisan vendor:publish 
    - Laravel\Jetstream\JetstreamServiceProvider 
    - sanctum-config 
    - livewire:config 

già funziona la registrazione con il token



http://127.0.0.1:8000/user/profile




esempio curl
-X POST http://127.0.0.1:8000/api/ask -H "Content-Type: application/json; charset=utf-8" -H "Authorization: Bearer yt7Hau5pkJ7Ou5ipEWwnADperRrZsiY4OFbx5BsHa13e4c40" -d "{\"code\":\" echo+23%2B56%3B  \"}"

esempio axios

axios.post('/api/ask', {
    code: 'echo+23%2B56%3B', // Url decoded = echo 23+56;

  },{
    headers: {
      'Content-Type': 'application/json',
      'Authorization': 'Bearer 6hFAz7WnQW00ChRwMQZUSxyLdvqMYkAkVe3tZa8tac922b95'
    }
  })
  .then(function (response) {
    console.log(response);
  })
  .catch(function (error) {
    console.log(error);
  });

// comando convertito con URLEncode

composer require meebio/php-eval-console #non necessario è utile toolox per la configurazione
composer require corveda/php-sandbox

procedura

---------------------------------
da fare

creare una console da usare nella pagina test e da riusare nella pagina learning
 
spostare il database su mysql

impostare un admin per nascondere agli altri utenti le funzioni team e api token

un template per tutti o più navbar? ok fatta da testare

per i button in javascript usare listner ok

trovare una route interna per il parsing del codice da interpretare ok fatta una route

includere tutto il testo in __() per la gestione delle lingue

php artisan lang:publish

creato  /lang/en/*.php
        /lang/it/*.php
        /lang/en.json
        /lang/it.json

token utente xxx C3YJ9pAIGVAGbyavLEOo6yKjIJSfZBblq1ulKefZ71f58025
