# Laravel with Filament and plugins

## Project Setup

1. Install laravel
2. Install [livewire](https://laravel-livewire.com/docs/2.x/installation)
3. Install [filament](https://filamentphp.com/docs/2.x/admin/installation#installation)
4. Install [filament tags, setting, media library plugins](https://gist.github.com/Z3d0X/3981de122991b0a616aa69277335569c)
5. Install npm [tailwindcss](https://tailwindcss.com/docs/installation) forms typography
6. Setup tailwind and vite
7. Install [deployer](https://deployer.org/docs/7.x/installation)
8. Install [laravel module](https://nwidart.com/laravel-modules/v6/installation-and-setup)
9. Install [json api](https://laraveljsonapi.io/docs/2.0/getting-started/)
10. Install [saloon](https://docs.saloon.dev/getting-started/getting-started)
11. Install [scribe](https://scribe.knuckles.wtf/laravel/)
12. Install [spatie permission](https://spatie.be/docs/laravel-permission/v5/installation-laravel)
13. Update AppServiceProvider with `Schema::defaultStringLength(125);`
14. Update User with `use HasRoles;`
15. Install [spatie activity log](https://spatie.be/docs/laravel-activitylog/v4/installation-and-setup)
16. Install [spatie enum](https://github.com/spatie/laravel-enum)
17. Install [impersonate](https://github.com/404labfr/laravel-impersonate)
18. Create DB
19. Update env
20. Run optimize clear
21. Run config cache
22. Run migrate
23. Create filament user
24. Uninstall module package
25. Run `npm run build`

## First CRUD

1. Create sample migration files

    - heroes, skills, teams
    - hero has many skills, skill belongs to a hero (one to many)
    - hero belongs to many teams, team belongs to many heroes (many to many)
    - hero has many team, team belongs to a hero (as leader) (one to many)

1. Create sample models
1. Create sample filament resources

    - Hero - default resource `php artisan make:filament-resource Hero`
    - Skill - simple resource `php artisan make:filament-resource Skill --simple`
    - Team - generate resource `php artisan make:filament-resource Team --generate`

1. Create seeders and factories
1. Use enum for species and traits
1. Update team resource for heroes relationship
1. Update hero resource with skill relation manager
1. Update hero resource with search, sort, filter and toggle columns
1. Update hero resource with image upload

    - Setup spatie media library

1. Add custom view page for heroes resource
    - Setup daisyui cdn

## Roles and Permissions

1. Install [env indicator filament plugin](https://github.com/pxlrbt/filament-environment-indicator)
2. Create `super-admin` role and user
3. Create `project:factory-reset` command
4. Install [filament shield](https://github.com/bezhanSalleh/filament-shield)
5. Remove the super-admin role and user assignment from seeder since Sheild provided it
6. Publish en translation file and change navigation group label
7. Create filament user resource
8. Install [filament impersonate](https://github.com/stechstudio/filament-impersonate)
9. Install [filament breezy](https://github.com/jeffgreco13/filament-breezy)
10. Create setting page for hero
11. Update hero resource table with filter, sort and search

## JSON API

1. Update [Exception Handler](https://laraveljsonapi.io/docs/2.0/tutorial/03-server-and-schemas.html#exception-handler)
2. Create API server `php artisan jsonapi:server v1`
3. Update servers array in `jsonapi.php` config with above server class
4. Create API schema for heroes `php artisan jsonapi:schema heroes`
5. Update `allSchemas()` method in `Server.php` with Hero schema
6. Update hero attributes in `HeroSchema.php` class `fields()` method
7. Update `api.php` with Json API server v1 route
8. Create or update `HeroPolicy.php` class
9. Add has many skills relationship to hero schema
10. Create skills schema `php artisan jsonapi:schema skills`
11. Create teams schema `php artisan jsonapi:schema teams`
12. Update skill and team schema
13. Update `allSchemas()` method in `Server.php`
14. Update `api.php` with `relationships()`
15. Either `hasOne` or `hasMany` available

Install [filament fabricator](https://filamentphp.com/plugins/fabricator)
