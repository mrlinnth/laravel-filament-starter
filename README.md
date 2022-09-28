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

## First CRUD

1. Create sample migration files

-   heroes, skills, teams
-   hero has many skills, skill belongs to a hero (one to many)
-   hero belongs to many teams, team belongs to many heroes (many to many)
-   hero has many team, team belongs to a hero (as leader) (one to many)

1. Create sample models
2. Create sample filament resources

-   Hero - generate resource `php artisan make:filament-resource Hero --generate`
-   Skill - simple resource `php artisan make:filament-resource Skill --simple`
-   Team - default resource `php artisan make:filament-resource Team`
