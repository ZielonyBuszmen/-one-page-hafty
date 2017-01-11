# [one-page] Hafty
Prosta stronka oparta na technologi "one-page". Wykorzystany został framework PHP Larevel 5.3, Bootstrap, jakaś "całkiem-spoko" galeria zdjęć i Angular2.
Działającą stronę można znaleźć pod adresem: http://hafty-kasi.cba.pl/

## Instalacja
Standardowo -> pobieramy projekt do folderu `htdocs` Xamppa, albo do `www` Wampa (lampa, trampa, itp). Następnie otwieramy terminal (konsolę) w folderze z projektem i wpisujemy `composer install`, a potem `composer dump`. Tak, projekt wymaga zainstalowanego composera.

## Dodawanie nowych zdjęć:
 - Duże zdjęcia znajdują się w `public/img/hafty`. Na podstawie tego katalogu skrypt tworzy array'a z odnośnikami do zdjęć.
 - Miniaturki są przechowywane w folderze `public/img/miniaturki`. Miniaturka musi nazywać się tak samo jak duże zdjęcie. Powinna mieć wymiary `400px x 300px`.
 - Ustawienia odnośnie lokalizacji folderu ze zdjęciami oraz cały krypt który przeszukuje te foldery znajdziemy w pliku `app/Repositories/PhotoRepository.php`. Metoda `getAll()` zwraca gotowego array'a z linkami do zdjęć i miniaturek. Wynik tej funkcji jest zwracany do widoku `resources/views/includes/gallery_blueimp.blade.php`. Nie jest to robione standardowo przez kontroler lub router, tylko poprzez tzw. "ViewComposer" o nazwie `PhotoComposer` (lokalizacja `app\Console\Http\ViewComposers\PhotoComposer.php`). Te dane są zwracane do zmiennej `$photos`, którą możemy używać w widoku.
 
 
## TODO:
- napisać księgę gości + zrobić do niej ładny wygląd + skopiować wpisy ze starej


### Info o Laravelu
 - Został zainstalowany tzw. "HTML helper" o nazwie "laravel collective". Instalacja tego "dodatku" wymaga wpisania w konsoli:
`composer require laravelcollective/html`


# Inne brednie

<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb combination of simplicity, elegance, and innovation give you tools you need to build any application with which you are tasked.

## Learning Laravel

Laravel has the most extensive and thorough documentation and video tutorial library of any modern web application framework. The [Laravel documentation](https://laravel.com/docs) is thorough, complete, and makes it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 900 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
