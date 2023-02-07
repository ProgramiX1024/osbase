<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ __('interface.desc') }}">
    <title>Nazwa Twojej bazy | {{ $title }}</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/bs.css') }}">
	
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
    				<a class="dropdown-item" href="language/en">English</a>
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
            
    	




        @yield("content")
        <div class="mt-2">
            <hr>
            <div class="row">
                <div class="col">
                osBase v1.1.1-GH | 
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
    
</body>
</html>
