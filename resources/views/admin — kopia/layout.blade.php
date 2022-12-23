<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>osBase | Panel administracyjny</title>
    <link rel="stylesheet" href="{{ asset('assets/css/admin-bs.css') }}">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h1>osBase</h1>
            </div>
            <div class="col text-end">
                <h3>Panel administracyjny</h3>
            </div>

        </div>
        @yield('content')
    </div>
</body>
</html>