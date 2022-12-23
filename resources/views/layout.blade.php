<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="winiso,winworldpc,windowsbase,basewin,uupdump,iso,microsoft,osbase,baza,linux,pobierz,download,sterowniki,intel,nvidia,amd,virtualbox,vmware,archive">
    <meta name="description" content="{{ __('interface.desc') }}">
    <title>osBase.pl | {{ $title }}</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/bs.css') }}">
	<script>
		var _paq = window._paq = window._paq || [];
		/* tracker methods like "setCustomDimension" should be called before "trackPageView" */
		_paq.push(['trackPageView']);
		_paq.push(['enableLinkTracking']);
		(function() {
		var u="//matomo.osbase.pl/matomo/";
		_paq.push(['setTrackerUrl', u+'matomo.php']);
		_paq.push(['setSiteId', '1']);
		var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
		g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
		})();
	</script>
</head>
<body>
    <script type="text/javascript">
	$(document).ready(function() {
    	$('dropdown-toggle').dropdown()
	});
	</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">osBase.pl</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav me-auto">
    		<li class="nav-item dropdown">
    			<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Język/Language</a>
    			<div class="dropdown-menu">
    				<a class="dropdown-item" href="language/pl">Polski</a>
    				<a class="dropdown-item" href="language/en">English (BETA) (partly translated)</a>
    			</div>
    		</li>
            <li class="nav-item">
            <a class="nav-link" href="/">{{ __('interface.home') }}
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/about-us">{{ __('interface.about') }}</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="https://t.me/osbasepl">{{ __('interface.announcements') }}</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/timers">{{ __('interface.timers') }}</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/money">{{ __('interface.money') }}</a>
            </li>
        </ul>
        <form class="d-flex" action="/search" method="get">
            <input name="q" class="form-control me-sm-2" type="text" placeholder="windows xp">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">{{ __('interface.search') }}</button>
        </form>
        </div>
    </div>
    </nav>

    <div class="container mt-5 mb-5">
            
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
  				<strong>TESTY BETA/BETA TESTS</strong> Funkcja internacjonalizacji jest aktualnie w wersji beta i tłumaczenie na język angielski może być niepełne. Proszę zgłaszać wszelkie błędy pod adres e-mail <a href="mailto:programix@osbase.pl">programix@osbase.pl</a> lub <a href="mailto:osbase@osbase.pl">osbase@osbase.pl</a>. Dziękujemy!<br>
            	Internationalization function is actually in beta version and translation to English may not be completed. Please report all bugs by e-mail: <a href="mailto:programix@osbase.pl">programix@osbase.pl</a> or <a href="mailto:osbase@osbase.pl">osbase@osbase.pl</a>. Thank you!
  				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
    	




        @yield("content")
        <div class="mt-2">
            <hr>
            <div class="row">
                <div class="col">
                osBase.pl v1.1 | 
                <a href="/privacy-policy">{{ __('interface.privacy') }}</a>
            	|
            	<a href="/terms">{{ __('interface.terms') }}</a>
                </div>
                <div class="col text-end">
                    {{ __('interface.created') }}</a>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('/assets/js/win-8-1-warning.js') }}"></script>
    
</body>
</html>