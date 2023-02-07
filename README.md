## osBase

osBase jest prostym skryptem obsługi bazy zawierającej pliki i obrazy instalacyjne systemów Windows, Linux oraz pakietów Office. Został napisany w frameworku Laravel, dzięki czemu jego wdrożenie bądź modyfikacja jest banalnie prosta.

## Możliwości

-segregacja systemów<br>
-dodawanie opisów systemów i opisów plików<br>
-wyszukiwarka<br>
-obsługa wielu serwerów pobierania (administrator podczas dodawania pliku dodaje linki do niego po przecinku każdy, a system potem losuje serwer pobierania)<br>
-wiele więcej<br>
-dojdą nowe funkcjonalności w wersji osBase 2.0 (już w trakcie roboty!)<br>

## Wymagania

<b>Od osoby hostującej:</b><br>
-choć mała wiedza o technologiach webowych i językach HTML, PHP<br>
<b>Od środowiska:</b><br>
-PHP w wersji co najmniej 7.4 lub wyższej<br>
-zainstalowany program Composer<br>
-skonfigurowana baza danych<br>
-zalecany dostęp do SSH<br>

## Wdrażanie

Samo wdrażanie nie różni się praktycznie niczym od wdrażania innej aplikacji Laravelowej. Pobierz lub sklonuj z repozytorium pliki naszego systemu na swój serwer, skonfiguruj ustawienia środowiska w pliku .env powstałym z kopiowania pliku .env.example. Zainstaluj zależności, wygeneruj klucz kryptograficzny i uruchom migracje. Następnie zmień katalog domowy strony z public_html na public lub skasuj folder public_html i utwórz dowiązanie z public_html do public.

## Dostęp do panelu administracyjnego po raz pierwszy

Zaloguj się do swojej bazy danych, przejdź do zarządzania tabelą users i utwórz wpis. Pamiętaj, że w polu na hasło musisz wpisać hasło zaszyfrowane w formacie bcrypt - inaczej nie zalogujesz się do panelu.

## Co dalej?

Zanim zaczniesz zapraszać innych na stronę, warto przejrzeć następujące rzeczy:<br>
-Dodaj opisy użytkowników tworzących bazę do szablonu aboutus.blade.php lub do plików tłumaczeń - plik interface.php<br>
-Zaktualizuj pod siebie politykę prywatności i regulamin.<br>
-Zmień inne rzeczy, które uważasz za istotne, w tym nazwę bazy na navbarze (w szablonie layout.blade.php). Dodaj własne skrypty trackingowe.<br>

## Nie zezwalamy na:

-używanie nazwy osBase.pl jako nazwy bazy - strona osBase.pl pod adresem osbase.pl należy do nas i nie zezwalamy na używanie jej nazwy.<br>
-zmiany identyfikacji wersji w stopce - a szczególnie na taką o schemacie:<br>
<i>X.X.X-OFFICIAL</i> lub <i>X.X.X-OFFICIAL-PL</i><br>
-umieszczanie treści, któe mogłyby działać na szkodę twórcy skryptu<br>
-plagiat - prawa autorskie do skryptu osBase posiada ekipa strony osbase.pl. Nie masz prawa umieszczać informacji, że jesteś twórcą.<br>

## UWAGA!

Jedyną stroną, która może używać kodu w formacie X.X.X-OFFICIAL i X.X.X-OFFICIAL-PL jest strona o adresie osbase.pl. Jeżeli zauważysz inną stronę używającą tego oznaczenia zamiast oznaczenia X.X.X-GH, zgłoś to na adres osbase@osbase.pl!

## Zgłoszenia błędów

Jeżeli znajdziesz błąd lub będziesz miał inny problem, poinformuj nas o tym mailowo: osbase@osbase.pl.
