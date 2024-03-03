<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <div class="card mb-3 mx-auto" style="width: 400px;">
            <div class="card-header">Đăng nhập</div>
            <div class="card-body">
                <form action="?action=verify" method="post">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="email"
                            placeholder="name@example.com">
                        <label for="floatingInput" class="form-label">Email</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" name="password"
                            placeholder="Password">
                        <label for="floatingPassword" class="form-label">Password</label>
                    </div>
                    <div class="mb-3">
                        <label for="remember" class="form-label">Remember</label>
                        <input type="checkbox" name="remember">
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary row">Đăng nhập</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>


</html>