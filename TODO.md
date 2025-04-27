
 # TODO


|                | Da Fare                       | In esecuzione      | Fatto |
|----------------|-------------------------------|--------------------|-------|
|    Licenza     |Per ora uso quella di Laravel  |                    |       |
|  spostare il DB su mysql |posso creare un seeder con l'export di sqlite ma <br>non è compatibile con mysql CSV  |   |       |
|    admin    || non ho creato dei ruoli ma semplicemnete l'id 1 è l'admin||
| Lingue  || ho creato la struttura da aggioranre i termini mancano delle traduzioni nel profilo e nell'email||
| pagina articolo inserito aggiornato cancellato ||  | ho aggiunto un redirect alla index con il messaggio dell'aggiornamento|
| a volte non riporta l'errore nella pagina larning|| | X |
| @metod e @cfrs appaiono 2 volte nel form ||  | X|
| da rivedere la console in una pagina è nera in una è input:text in un altra textarea |X|  | |

 ## ToDo
 
spostare il database su mysql

impostare un admin per nascondere agli altri utenti le funzioni team e api token

includere tutto il testo in __() per la gestione delle lingue

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

per creare pagine d'errore custom

        php artisan vendor:publish --tag=laravel-errors

ho spostato da errors/minimal.blade.php in layouts 

quindi ho creato in app/View/Components/MinimalLayout.php 

         public function render(): View|Closure|string
    {
        return view('layouts.minimal');
    }

i modelli usano la vecchia versione di Blade e l'ho aggiornati alla nuova usando x-component

ora personalizzo i modelli con logo errore e link per tornare indietro

in app.js ho creato un listner onload associata alla funzione setTimeOut come callback per far si di tornare alla pagina 

precedente a quella che da errore

ho testato le pagine d'errore con la funzione abort() es.: abort(404) dentro la rotta web "/"

fin qui non ho errori

 php artisan stub:publish

pubblica tutti i template per esempio php artisan make

 php artisan vendor:publish

pubblicato i modelli Mail (23)

    php artisan vendor:publish

pubblicato modelli notification (24)

ho modificato vendor/mail/html/subcopy.blade.php
e vendor/notifications/email.blade.php
e aggiunto la traduzione in lang/it.json per far funzionare la traduzione

scritto un feedback in caso d'errore in console 
passo un errore tramite l'eccezione generata in try .. catch

creati messaggi di feedback per la creazione aggiornamento e cancellazione 

nel controller

    return redirect('/page')->with('status', 'Page updated!!');

e nella view

    @if (session('status'))

        <div class="text-green-500">{{ __(session('status')) }}</div>

    @endif

ho creato un test email 

    php artisan make:mail TestShipped 

ha creato una classe che uso nella route

    Route::get('/mail',function(){

    Mail::to("manuel@manueldellagala.it")->send(new TestShipped());

    });

per creare nuove viste 
in AppServiceProvider.php

     View::addNamespace('mail', base_path('resources/views/vendor/mail/html'));

creata nuova middleware con

    php artisan  make:middleware Admin

modificato '/bootstrap/app.php' per creare un'alias

    $middleware->alias(['admin' => \App\Http\Middleware\Admin::class]);

nella pagina blade uso
    @if(Auth::user()->id==1)
per le funzionalità dell'Admin

Ho creato in .env una serie di opzioni per la configurazione di CodeSandBox 
in fase di produzione .env non viene usato e ho creato /config/sandbox.php che preleva la configurazione da .env e viene compilato in fase di produzione posso creare un provider nel caso dovessi creare il file tramite artisan vendor:publish

creata pagination:

PageLearnController.php

    $pages = PageLearn::paginate(3);

in index.blade.php
     
     {{ $pages->links('components.paginator',['pages' => $pages]) }}

posso personalizzarlo con

    $paginator->nextPageUrl() Get the URL for the next page.
    $paginator->previousPageUrl() Get the URL for the previous page.
    $paginator->hasPages() Determine if there are enough items to split into multiple pages.
    $paginator->firstItem()
    $paginator->lastItem() Get the result number of the last item in the results.
    $paginator->onFirstPage() Determine if the paginator is on the first page.
    $paginator->previousPageUrl()
    $paginator->currentPage()
    $paginator->hasMorePages()

installato pacchetto per esportare seed

    composer require orangehill/iseed

corretto il problema in vendor\orangehill\iseed\src\Orangehill\Iseed\Iseed.php

    $schema = \DB::connection($this->databaseName)->getSchemaBuilder();
        $listTable = $schema->getTableListing();

        foreach($listTable as &$elem){

            $start = strpos($elem,'.');
            $elem = substr($elem, ++$start);

        };
    
    modificato le pagine del tutorial con una pagination in page.index e un'altra nell'aside in page.show 

    

 ## tradurre
 Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.

We have emailed your password reset link. 

Ciao!

You are receiving this email because we received a password reset request for your account.
Reset Password

This password reset link will expire in 60 minutes.

If you did not request a password reset, no further action is required.

For your security, please confirm your password to continue. 

Please enter your password to confirm you would like to log out of your other browser sessions across all of your devices. 

Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account. 

---------------------------------

 ## deploy

    php artisan optimize

    php artisan optimize:clear

    php artisan config:cache

    php artisan event:cache

    php artisan route:cache

    php artisan view:cache

    npm run build

    il file hot in /public dice a laravel dove cercare i file per il frontend *.js *.css 
    quando faccio npm run build lo cancello per fargli trovare i file in /public/build/assets


 ## Task svolti e consigli 

{{ trans_choice('{0} There :form :count apples|{1} There :form just :count apple|[2,19] There :form :count apples', 0, ['form' => 'is']) }}

scrive la stringa in base al valore

per i button in javascript usare listner 

trovare una route interna per il parsing del codice da interpretare ok fatta una route

creare error pages custom

fatto creare una console da usare nella pagina test e da riusare nella pagina learning

un template per tutti o più navbar? ok fatta da testare
