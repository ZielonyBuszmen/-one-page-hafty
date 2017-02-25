# [one-page] Hafty
### http://hafty-kasi.cba.pl/
Stronka oparta na technologi "one-page". Wykorzystany został framework PHP Larevel 5.3, Bootstrap i Angular2. Wszystko zostało wykonane jako One-Page oraz jest w pełni responsywne.
Działającą stronę można znaleźć pod adresem: http://hafty-kasi.cba.pl/

![alt tag](https://raw.githubusercontent.com/ZielonyBuszmen/onePage-hafty/master/photos_to_readme/1.png)

## Instalacja
Standardowo -> pobieramy projekt do folderu `htdocs` Xamppa, albo do `www` Wampa (lampa, trampa, itp). Następnie otwieramy terminal (konsolę) w folderze z projektem i wpisujemy `composer install`, a potem `npm install`. Tak, projekt wymaga zainstalowanego Composera oraz Node.js. 

Być moze będzie wymagane odlokowanie `php_intl.dll` w pliku `php.ini` w konfiguracji naszego serwera, ale to już jest spowodowane przez wymagania samego Laravela. 

Następnie musimy przejść do pliku `node_modules/elixir-typescript/index.js` i zakomentować w nim linijkę: `//.pipe($.concat(paths.output.name))`.

Na koniec wpisujemy komendę `gulp` by skompilować assety (pliki TypeScript) Angulara 2.

## Dodawanie nowych zdjęć:
 - Duże zdjęcia znajdują się w `public/img/hafty`. Na podstawie tego katalogu skrypt tworzy array'a z odnośnikami do zdjęć.
 - Miniaturki są przechowywane w folderze `public/img/miniaturki`. Miniaturka musi nazywać się tak samo jak duże zdjęcie. Powinna mieć wymiary `400px x 300px`.
 - Ustawienia odnośnie lokalizacji folderu ze zdjęciami oraz cały skrypt który przeszukuje te foldery znajdziemy w pliku `app/Repositories/PhotoRepository.php`. Metoda `getAll()` zwraca gotowego array'a z linkami do zdjęć i miniaturek. Wynik tej funkcji jest zwracany do widoku `resources/views/includes/gallery_blueimp.blade.php`. Nie jest to robione standardowo przez kontroler lub router, tylko poprzez tzw. "ViewComposer" o nazwie `PhotoComposer` (lokalizacja `app\Console\Http\ViewComposers\PhotoComposer.php`). Te dane są zwracane do zmiennej `$photos`, którą możemy używać w widoku.
 - Repozytorium do ViewComposera jest „wstrzykiwane” dzięki mechanizmowi Dependency Injection
 
 
## TODO:
- napisać księgę gości + zrobić do niej ładny wygląd + skopiować wpisy ze starej (księga gości na angularze2)
- porobić parę rzeczy w Angularze2
