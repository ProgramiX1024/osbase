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

        Zaloguj się.
        <div class="w-50">
            <form method="post" action="/admin/login/check">
            @csrf
                <div class="mb-3 mt-4">
                    <label for="username" class="form-label">Nazwa użytkownika</label>
                    <input name="username" type="text" class="form-control" id="username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Hasło</label>
                    <input name="password" type="password" class="form-control" id="password">
                </div>
                <div class="mt-4">
                    <input type="submit" value="Zaloguj się" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</body>
</html>