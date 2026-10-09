# Creatique

A Laravel-based portfolio generator.

## Features
- Portfolio template selection
- Portfolio creation and preview
- Laravel Blade templates

## Requirements
- PHP
- Composer
- Node.js and npm, if building frontend assets
- Supabase PostgreSQL database

## Setup
1. Run `composer install`.
2. Copy `.env.example` to `.env`.
3. Configure your environment variables.
4. Run `php artisan key:generate` if an application key has not already been configured.
5. Configure the database connection.
6. Run `php artisan migrate`.

**Security:** Never commit `.env` or database credentials to GitHub.