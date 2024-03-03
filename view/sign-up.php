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
            <div class="card-header">Đăng ký</div>
            <div class="card-body">
                <form action="?action=store" method="post">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control name-input" id="floatingInput" name="name"
                            placeholder="name@example.com">
                        <label for="floatingInput" class="form-label">Username</label>
                    </div>
                    <div class="form-floating mb-3">

                        <input type="text" class="form-control email-input" id="floatingInput" name="email"
                            placeholder="name@example.com">
                        <label for="floatingInput" class="form-label">Email</label>
                        <span class="email-error"></span>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="phoneNumber"
                            placeholder="name@example.com">
                        <label for="floatingInput" class="form-label">Số điện thoại</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" name="password"
                            placeholder="Password">
                        <label for="floatingPassword" class="form-label">Password</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingInput" name="re-enter"
                            placeholder="name@example.com">
                        <label for="floatingInput" class="form-label">Re-enter Password</label>
                    </div>
                    <div class="mb-3">
                        <input type="radio" class="form-check-input" name="gender" value="1" checked>
                        <label class="form-check-label" for="gender">
                            Male
                        </label>
                        <input type="radio" class="form-check-input" name="gender" value="0">
                        <label class="form-check-label" for="gender">
                            Female
                        </label>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="submit btn btn-primary row">Đăng Ký</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        const buttonSubmit = document.querySelector('.submit');
        const emailInput = document.querySelector('.email-input');
        const emailError = document.querySelector('.email-error');
        const emailRegex = /^[\w\-\.]+@([\w-]+\.)+[\w-]{2,}$/gm;
        let flag = true;

        buttonSubmit.addEventListener("click", (e) => {
            flag = true;
            if (!emailRegex.test(emailInput.value)) {
                emailError.style.color = "red";
                emailError.innerHTML = "Email không hợp lệ";
                flag = false;
            }
            if (flag === false) {
                e.preventDefault();
            }
        })
    </script>
</body>


</html>