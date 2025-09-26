# Copilot Instructions for AI Agents

## Project Overview
This is a Laravel 12 CRUD application using Tailwind CSS. The project demonstrates user management (create, list, edit, delete) and follows conventions from the official Laravel documentation and YouTube tutorial series ([link](https://www.youtube.com/watch?v=ButD2QVZprE&list=PLmY5AEiqDWwB29FbhTfTh86Zr0yjeFBwO)).

## Architecture & Key Components
- **Backend:**
  - Laravel MVC structure: controllers in `app/Http/Controllers`, models in `app/Models`, requests in `app/Http/Requests`.
  - Routes defined in `routes/web.php` (web) and `routes/console.php` (console commands).
  - Database migrations and seeders in `database/migrations` and `database/seeders`.
  - Views (Blade templates) in `resources/views`.
- **Frontend:**
  - Tailwind CSS for styling (`resources/css/app.css`).
  - JavaScript entry point: `resources/js/app.js` and `resources/js/bootstrap.js`.
  - Vite is used for asset bundling (`vite.config.js`).

## Developer Workflows
- **Setup:**
  - Duplicate `.env.example` to `.env` and configure DB credentials.
  - Install PHP dependencies: `composer install`
  - Install Node.js dependencies: `npm install`
  - Generate app key: `php artisan key:generate`
  - Run migrations: `php artisan migrate`
- **Running:**
  - Start Laravel server: `php artisan serve`
  - Start frontend dev server: `npm run dev`
- **Creating Components:**
  - Controller: `php artisan make:controller UserController`
  - View: `php artisan make:view users/create`
  - Model: `php artisan make:model User`
- **Testing:**
  - Tests are in `tests/Feature` and `tests/Unit`. Run with `php artisan test`.

## Conventions & Patterns
- **CRUD pattern:** Each resource (e.g., User) has a controller, model, migration, and views for create/edit/list.
- **Blade templates:** Use layouts and components in `resources/views/components` and `resources/views/layouts`.
- **Requests:** Form validation logic is placed in `app/Http/Requests`.
- **Localization:** Language files in `lang/` (supports `en` and `pt_BR`).
- **Environment:** Use `.env` for secrets and config. Never commit `.env` with secrets.

## Integration Points
- **Database:** MySQL or other DB configured via `.env`.
- **Frontend:** Vite handles hot-reloading and asset compilation.
- **External:** No third-party APIs by default, but can be added via Laravel services or packages.

## Examples
- To add a new resource (e.g., Student):
  1. Create model: `php artisan make:model Student -m`
  2. Create controller: `php artisan make:controller StudentController`
  3. Add routes in `routes/web.php`
  4. Create views in `resources/views/students/`
  5. Add migration logic in `database/migrations`

## References
- Main entry points: `routes/web.php`, `app/Http/Controllers`, `resources/views`, `app/Models`, `database/migrations`
- For build/test/debug, see commands above and `README.md` for more details.

---
_If any section is unclear or missing, please provide feedback so this guide can be improved._
