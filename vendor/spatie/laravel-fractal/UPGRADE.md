# Upgrade guide

## From v4 to v5

If you have a configuration file named `laravel-fractal.php`, rename it to `fractal.php` for it to still be used.

## From v3 to v4

v2 has mainly been made to provide compatibility with fractal 0.16 through fractalistic 2. In that version of Fractal your transformers, includes and excludes should return an array. String, ints, bools and such are not allowed anymore.

If all your transformers follow that rule you should be able to upgrade to v2 without any modifications to your code.
