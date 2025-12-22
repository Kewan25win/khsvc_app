<!-- .github/copilot-instructions.md - Guidance for AI coding agents -->
# Copilot instructions for khsvc_app

## Quick summary
- This repository is a small Laravel (PHP 8.2 / Laravel 12) application skeleton. Key folders:
  - `app/` — application code (controllers, models, providers)
  - `routes/` — route definitions (`routes/web.php`)
  - `database/` — migrations, factories, seeders
  - `resources/` — frontend assets (Vite + Tailwind)
  - `tests/` — `Feature` and `Unit` tests

## Important workflows & commands
- Setup (install deps, env, migrations, build assets):
  - `composer run setup` (runs composer install, copies `.env`, generates app key, runs migrations, installs npm, builds assets)
- Local development (runs server, queue worker, log tailer, and vite):
  - `composer run dev` (spawns `php artisan serve`, `php artisan queue:listen --tries=1`, `php artisan pail`, and `npm run dev` via `concurrently`)
- Tests:
  - `composer run test` → `php artisan test` (phpunit config uses `sqlite` in-memory DB; see `phpunit.xml`)
- Build assets:
  - `npm run build` (Vite build)
- Format / lint:
  - `vendor/bin/pint` (Laravel Pint is available in `require-dev`)

## Project-specific notes & patterns (important for code changes)
- Tests rely on `phpunit.xml` environment overrides (e.g., `DB_CONNECTION=sqlite`, `QUEUE_CONNECTION=sync`), so tests expect an in-memory DB and synchronous queue processing.
- The project uses PSR-4 (`App\` → `app/`). Keep namespaces consistent when adding files.
- There is a `database/database.sqlite` helper step in `post-create-project-cmd` — migrations expect either sqlite file or the in-memory driver depending on context.
- The dev script uses `php artisan pail` (from `laravel/pail`) to show application logs; when running `composer run dev` expect `pail` to be one of the processes to check logs.
- Queue work is handled by `php artisan queue:listen --tries=1` in dev — changes that dispatch jobs should be tested with `QUEUE_CONNECTION=sync` in CI or test runs.
- Frontend uses Vite + Tailwind (`vite` + `tailwindcss`). Use `npm run dev` for HMR and `npm run build` for production bundles.

## Where to look for examples
- Controller templates: `app/Http/Controllers/ControllerName.php`
- Models and factories: `app/Models/User.php`, `database/factories/UserFactory.php`
- Migrations: `database/migrations/*` (example: `create_users_table.php`)
- Tests: `tests/Feature` and `tests/Unit` directories

## Guidance for AI code edits
- Be explicit and conservative when modifying bootstrapping (scripts in `composer.json`) — these affect contributor setup. Prefer adding new scripts rather than changing defaults.
- When adding tests, ensure they run under phpunit’s environment (`DB_CONNECTION=sqlite`, `QUEUE_CONNECTION=sync`). Use factories in `database/factories` and the in-memory DB where possible.
- For any change that touches background jobs or logs, add or update tests to run with `QUEUE_CONNECTION=sync` and verify log output via `php artisan pail` or by asserting expected side effects.
- When modifying frontend assets, update Vite config (`vite.config.js`) and run `npm run build` to validate bundle outputs.

## Quick checklist for PRs
- Add/modify tests (Feature/Unit) and ensure `composer run test` passes locally.
- Document any new env variables in README or add a migration/seed where relevant.
- Run `vendor/bin/pint` to check formatting and follow PSR-12 conventions.

---
If anything above is unclear or you want me to expand a section (examples for tests, workflow automation, or conventions), tell me which part to iterate on.
