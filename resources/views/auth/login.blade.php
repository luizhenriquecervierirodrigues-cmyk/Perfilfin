<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        html, body {
            height: 100%;
        }

        .form-container{
            max-width: 350px;
            padding: 1rem;
        }

        .lnr-eye {
            position: absolute;
            top: 5px;
            right: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body class="d-flex align-items-center py-4 bd-body-tertiary">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <main class="w-100 m-auto form-container">
        <form action="{{ route('auth.login') }}" method="POST">
            @csrf

            <div class="container">
                <img src="https://www.fundect.ms.gov.br/wp-content/uploads/2019/06/ifms-marca-2015.png" class="mb-4" heigth="80" width="220"/>

                <h1 class="h3 mb-3 fw-normal">Login</h1>

                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                        <input type="email" id="email" name="email"
                            class="form-control" value="{{ old('email') }}" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                        <input type="password" id="senha" name="senha" class="form-control" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-outline-info w-100">Entrar</button>

                <p class="text-body-secondary mt-5 mb-3">© 2025 PERFILFIN</p>
            </div>
        </form>

        <p class="mt-3 text-center">
            Não tem conta? <a href="{{ route('register') }}">Registrar-se</a>
        </p>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>

