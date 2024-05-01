<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Login</title>
</head>
<style>
    body {
        height: 100vh;
        overflow: hidden;
    }
</style>

<body class="bg-secondary">
    <div class="row d-flex align-content-center justify-content-center h-100 flex-wrap">
        <div class="shadow bg-white p-4 col-sm-4">
            <h4>Login</h4>
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="form-group mb-3">
                    <label for="">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label for="">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <div class="form-gorup">
                    <button type="submit" class="btn btn-primary" dusk="login">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
