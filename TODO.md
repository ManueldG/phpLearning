
 # TODO


|                | Da Fare                       | In esecuzione      | Fatto |
|----------------|-------------------------------|--------------------|-------|
|    Licenza     |Per ora uso quella di Laravel  |                    |       |
|  Trovare un modo per portare sqlite su mysql   |  posso creare un seeder con l'export di sqlite ma <br>non è compatibile con mysql forse CSV  |                    |       |
|    admin    || non ho creato dei ruoli ma semplicemnete l'id 1 è l'admin||
| Lingue  || ho creato la struttura da aggioranre i termini mancano delle traduzioni nel profilo e nell'email||


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

 ## Procedura

### Installata autenticazione
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

php artisan lang:publish

creato  /lang/en/*.php
        /lang/it/*.php
        /lang/en.json
        /lang/it.json


token utente xxx C3YJ9pAIGVAGbyavLEOo6yKjIJSfZBblq1ulKefZ71f58025



 ### Per attivare le notifiche email

in config/fortity.php ho decommentato `Features::emailVerification(),`

in FortifyServiceProvider.php ho aggiunto

        Fortify::registerView(function () {
                    return view('auth.register');
                });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });

        Fortify::requestPasswordResetLinkView(function () {
            return view('auth.forgot-password');
        });

        Fortify::resetPasswordView(function ($request) {
            return view('auth.reset-password', ['request' => $request]);
        });

        Fortify::verifyEmailView(function () {
            return view('auth.verify-email');
        });

        Fortify::confirmPasswordView(function () {
            return view('auth.password-confirm');
        });

        Fortify::twoFactorChallengeView(function () {
            return view('auth.two-factor-challenge');
        });
-----

in Model/User.php 
`class User extends Authenticatable implements MustVerifyEmail`

le rotte devono avere il middleware `verified` 

            Route::middleware([
                'auth:sanctum',
                config('jetstream.auth_session'),
                'verified'])

la configuarazione in .env

            MAIL_MAILER=smtp
            MAIL_SCHEME=null
            MAIL_HOST=mail.host.it
            MAIL_PORT=465
            MAIL_USERNAME=info@manueldellagala.it
            MAIL_PASSWORD=123456789
            MAIL_FROM_ADDRESS="info@manueldellagala.it"
            MAIL_FROM_NAME="${APP_NAME}"



---------------------------------

 # ToDo

 
spostare il database su mysql

impostare un admin per nascondere agli altri utenti le funzioni team e api token

un template per tutti o più navbar? ok fatta da testare

per i button in javascript usare listner ok

trovare una route interna per il parsing del codice da interpretare ok fatta una route

includere tutto il testo in __() per la gestione delle lingue
fatto creare una console da usare nella pagina test e da riusare nella pagina learning




