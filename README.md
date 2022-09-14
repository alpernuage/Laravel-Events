# Laravel Events project

Project realised with Nord
Coders [tutorial](https://www.youtube.com/watch?v=joaHRXptsF8&list=PLeeuvNW2FHVhs5i7Gt4ms2NzT0_YfI1Ev&index=2)

*Commands to clone this project from GitHub*

1. git clone https://github.com/alpernuage/Laravel-Events.git
2. composer install
3. cp .env.example .env
4. php artisan key:generate, *(if needed)*
5. php artisan migrate
6. php artisan serve
7. Go to link localhost:8000

## Terminal Commands to run the project

* `php artisan make:model Event -mfr` to create Event model and other files needed  
  *(Model, Factory, Migration, Controller)*
* `php artisan migrate --seed` to proceed migration and seed.
* **If an error occurs**, run `php artisan migrate:refresh --seed` to proceed
  migration and seed` after debug. This command calls down method in migration file to rollback operation

## Install [Laravel Breeze](https://laravel.com/docs/9.x/starter-kits) for the authentication system

1. `composer require laravel/breeze --dev`
2. `php artisan breeze:install`
3. `npm install` to install JavaScript dependencies
4. `npm run dev` to compile all JavaScript libraries
5. Update [node](https://nodejs.org/en/download/) version if needed *(Ex:failed to load config from vite.config.js)*

## Install [Laravel Cashier(Stripe)](https://laravel.com/docs/9.x/billing)

Laravel Cashier Stripe provides an expressive, fluent interface to Stripe's subscription billing services.

1. `composer require laravel/cashier`
2. `php artisan migrate`
3. Add **Billable Trait** in User model
4. Use [Payment Methods For Single Charges](https://laravel.com/docs/9.x/billing#payment-methods-for-single-charges) for
   js configuration
5. Add [stripe webhooks](https://www.youtube.com/watch?v=FQBggjrwnpA)

### Use Stripe

1. Sign up or Sign in to [Stripe](https://stripe.com)
2. Open **Développeurs/Clés API** menu
3. Create `STRIPE_KEY` variable in env file and paste value of the **Clé secrète** key
4. Create `STRIPE_SECRET` variable in env file and paste value of the **Clé secrète** key
5. Including [Stripe.js](https://stripe.com/docs/js) in create.blade.php

### Tips - Debug

* Put `@auth` end `@endauth` directives around *Auth::user()* to prevent authentication system errors
* Put *Carbon::setLocale('fr');* in **boot()** method of **AppServiceProvider** to show dates in french
* Use *:* before value attribut to parse value and interpret php in value Example **:value="old('title')"**
* Error: *Illuminate \ Database \ Eloquent \ MassAssignmentException*,  
  *Add [slug] to fillable property to allow mass assignment on [App\Models\Tag].*, solution: Declare **protected
  $guarded = [];** in model needed

## Page visuals

Events

![Events!](https://user-images.githubusercontent.com/50120472/190167246-d1b62f7f-e3c6-496a-ac6b-ec551d5006c7.png)

Create

![Create!](https://user-images.githubusercontent.com/50120472/190167253-6ace7fdf-24db-4241-bf8c-d4be0b7aecc5.png)



