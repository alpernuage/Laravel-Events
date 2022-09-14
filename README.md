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

* `composer require laravel/breeze --dev`
* `php artisan breeze:install`
* `npm install` to install JavaScript dependencies
* `npm run dev` to compile all JavaScript libraries
* Update [node](https://nodejs.org/en/download/) version if needed *(Ex:failed to load config from vite.config.js)*

### Tips - Debug

* Put `@auth` end `@endauth` directives around *Auth::user()* to prevent authentication system errors
* Put *Carbon::setLocale('fr');* in **boot()** method of **AppServiceProvider** to show dates in french
* Use *:* before value attribut to parse value and interpret php in value Example **:value="old('title')"**
* Error: *Illuminate \ Database \ Eloquent \ MassAssignmentException*,  
*Add [slug] to fillable property to allow mass assignment on [App\Models\Tag].*, solution: Declare **protected $guarded = [];** in model needed

## Page visuals

Login

[//]: # (![Login!]&#40;public/pages/Login.png&#41;)
![Login!](https://user-images.githubusercontent.com/50120472/189345943-bfae0db0-1883-41d1-9c26-334f863b376c.png)

Register

[//]: # (![Register!]&#40;public/pages/Register.png&#41;)
![Register!](https://user-images.githubusercontent.com/50120472/189345949-09de1aa6-3fc9-472e-bde6-9bb02df20ad0.png)

Posts

[//]: # (![Posts!]&#40;public/pages/Posts.png&#41;)
![Posts!](https://user-images.githubusercontent.com/50120472/189345948-1c8c10f2-a475-4afc-9e36-e79ee36d75fe.png)

Actions

[//]: # (![Actions!]&#40;public/pages/Actions.png&#41;)
![Actions!](https://user-images.githubusercontent.com/50120472/189345499-8e35a918-4a22-4252-be6e-f29183cfd10e.png)

Create

[//]: # (![Create!]&#40;public/pages/Create.png&#41;)
![Create!](https://user-images.githubusercontent.com/50120472/189345932-cdfd1cf0-dba1-496d-bd9b-6ca5cd26921a.png)

Edit

[//]: # (![Edit!]&#40;public/pages/Edit.png&#41;)
![Edit!](https://user-images.githubusercontent.com/50120472/189345940-d50a155c-25c1-46a0-859b-1bc0076539a2.png)

Delete

[//]: # (![Delete!]&#40;public/pages/Delete.png&#41;  )
![Delete!](https://user-images.githubusercontent.com/50120472/189346816-e3637692-8ec8-4a3a-b577-edfe48d18cff.png)
