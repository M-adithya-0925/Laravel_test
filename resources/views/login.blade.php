<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow text-center">
                <div class="card-body">
                    <h4 class="mb-3">Login</h4>

                    <a href="{{ route('google.login') }}"
                       class="btn btn-danger w-100">
                        Login with Google
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
