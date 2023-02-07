## osBase

osBase jest prostym skryptem obsługi bazy zawierającej pliki i obrazy instalacyjne systemów Windows, Linux oraz pakietów Office. Został napisany w frameworku Laravel, dzięki czemu jego wdrożenie bądź modyfikacja jest banalnie prosta.

## Możliwości

-segregacja systemów
-dodawanie opisów systemów i opisów plików
-wyszukiwarka
-obsługa wielu serwerów pobierania (administrator podczas dodawania pliku dodaje linki do niego po przecinku każdy, a system potem losuje serwer pobierania)
-wiele więcej
-dojdą nowe funkcjonalności w wersji osBase 2.0 (już w trakcie roboty!)

## Wymagania

<b>Od osoby hostującej:</b>
-choć mała wiedza o technologiach webowych i językach HTML, PHP
<b>Od środowiska:</b>
-PHP w wersji co najmniej 7.4 lub wyższej
-zainstalowany program Composer
-skonfigurowana baza danych
-zalecany dostęp do SSH

## Wdrażanie

Samo wdrażanie nie różni się praktycznie niczym od wdrażania innej aplikacji Laravelowej. Pobierz lub sklonuj z repozytorium pliki naszego systemu na swój serwer, skonfiguruj ustawienia środowiska w pliku .env powstałym z kopiowania pliku .env.example. Zainstaluj zależności, wygeneruj klucz kryptograficzny i uruchom migracje. Następnie zmień katalog domowy strony z public_html na public lub skasuj folder public_html i utwórz dowiązanie z public_html do public.

## Dostęp do panelu administracyjnego po raz pierwszy

Zaloguj się do swojej bazy danych, przejdź do zarządzania tabelą users i utwórz wpis. Pamiętaj, że w polu na hasło musisz wpisać hasło zaszyfrowane w formacie bcrypt - inaczej nie zalogujesz się do panelu.

## Co dalej?

Zanim zaczniesz zapraszać innych na stronę, warto przejrzeć następujące rzeczy:
-Dodaj opisy użytkowników tworzących bazę do szablonu aboutus.blade.php lub do plików tłumaczeń - plik interface.php
-Zaktualizuj pod siebie politykę prywatności i regulamin.
-Zmień inne rzeczy, które uważasz za istotne, w tym nazwę bazy na navbarze (w szablonie layout.blade.php). Dodaj własne skrypty trackingowe.

## Nie zezwalamy na:

-używanie nazwy osBase.pl jako nazwy bazy - strona osBase.pl pod adresem osbase.pl należy do nas i nie zezwalamy na używanie jej nazwy.
-zmiany identyfikacji wersji w stopce - a szczególnie na taką o schemacie:
<i>X.X.X-OFFICIAL</i> lub <i>X.X.X-OFFICIAL-PL</i>
-umieszczanie treści, któe mogłyby działać na szkodę twórcy skryptu
-plagiat - prawa autorskie do skryptu osBase posiada ekipa strony osbase.pl. Nie masz prawa umieszczać informacji, że jesteś twórcą.

## UWAGA!

Jedyną stroną, która może używać kodu w formacie X.X.X-OFFICIAL i X.X.X-OFFICIAL-PL jest strona o adresie osbase.pl. Jeżeli zauważysz inną stronę używającą tego oznaczenia zamiast oznaczenia X.X.X-GH, zgłoś to na adres osbase@osbase.pl!

## Zgłoszenia błędów

Jeżeli znajdziesz błąd lub będziesz miał inny problem, poinformuj nas o tym mailowo: osbase@osbase.pl.
