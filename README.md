# Muni-Muni Café

A small café site for a Laravel group project. The shared Home page introduces the café, highlights three drinks, and gives visitors sample location and hours information.

**Repository:** [Add the GitHub repository link](#repository-link)

## Group and page assignments

| Member | Module | Branch |
| --- | --- | --- |
| Bigaran | Home page and shared layout | `dev-member1-Bigaran` |
| Atillo | About page and route | `dev-memberN-Atillo` |
| Baclayon | Contact page and route | `dev-memberN-Baclayon` |

Replace `N` in the two teammate branch names with the member numbers agreed by the group. The Home page links to `/about` and `/contact`; those routes are added with their respective modules.

## Theme and content

The café uses a warm coffee palette:

| Color | Hex | Use |
| --- | --- | --- |
| Espresso | `#3B2A20` | Main text and deep brown accents |
| Caramel | `#C68F59` | Actions and highlights |
| Mocha | `#E6D2B3` | Soft details and decorative line art |
| Dark roast | `#1A120E` | Dark theme surfaces |

Display headings use a local serif stack; body text uses a local sans serif stack. The Home page supports dark and light themes, and remembers the selected theme in the browser. Cards and controls use theme-aware colors for readable contrast.

The sample café location is **Ampayon, Butuan City**. The sample hours are **7:00 AM–9:00 PM daily**. These are fictional project details.

## Set up and run

Requirements: PHP 8.3 or newer, Composer, Node.js with npm, and the PHP SQLite extension.

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm install
npm run build
php artisan serve
```

Open the local URL printed by `php artisan serve` (usually `http://127.0.0.1:8000`). For live frontend asset rebuilding, use a second terminal and run `npm run dev` instead of `npm run build`.

## Shared layout and assets

- `resources/views/layouts/app.blade.php` owns the wordmark, floating navigation, theme control, decorative coffee doodles, footer, and Blade content/style/script stacks. It loads the shared theme stylesheet for every page that extends it.
- Each page extends `layouts.app` and adds page assets with `@push('styles')` or `@push('scripts')`. Load public files with Laravel's `asset()` helper.
- Shared theme and Home styles live in `public/css/home.css`; Home interactions live in `public/js/home.js`.
- Café images belong in `public/images/cafe/`; reference them as `asset('images/cafe/filename.jpg')` from Blade. Keep supplied image filenames intact when adding the other pages.
- The shared coffee-bean background is fixed and cover-sized. Page content should use palette-colored panels so text stays readable over it.
- Use the existing route paths `/`, `/about`, and `/contact` for the main navigation. Keep page-specific content in that page's Blade view.

## Git and pull request workflow

1. Start from an up-to-date `main`: `git checkout main` then `git pull origin main`.
2. Create or switch to your assigned branch, for example `git checkout -b dev-member1-Bigaran`.
3. Commit one coherent project step at a time with a short, descriptive message, such as `Add Home drink carousel`.
4. Push your branch with `git push -u origin <your-branch>`.
5. Open a pull request from your branch into `main`, describe the page and assets changed, and include screenshots. Ask a teammate to review before merging.
6. After a merge, update local `main` before starting the next task. Avoid committing generated files, `.env`, or local database contents.

## Repository and screenshots

<a id="repository-link"></a>

### Repository link

Add the group repository URL here: **[Repository link](#repository-link)**

### Page screenshots

Save review screenshots under `docs/screenshots/` and link them here as the pages are completed.

| Page / viewport | Screenshot |
| --- | --- |
| Home — desktop | `docs/screenshots/home-desktop.png` |
| Home — mobile | `docs/screenshots/home-mobile.png` |
| About | `docs/screenshots/about-page.png` |
| Contact | `docs/screenshots/contact-page.png` |
