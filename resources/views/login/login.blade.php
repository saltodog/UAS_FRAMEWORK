<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>perpusQu</title>
</head>

<style>
    .login-box {
        border: solid  1px;
        width: 500px;
        padding: 200px;
        box-sizing: border-box;
    }
</style>

<body>

    
    <div class="vh-100 d-flex justify-content-center align-item-center">
        <div class="login-box">
            <form>
                @csrf
                <div calss="mb-3">
                    <label for="email" class="form-label">email</label>
                    <input type="email" nama="email" id="email" class="form-control" required>
                </div>
                <div calss="mb-3">
                    <label for="password" class="form-label">password</label>
                    <input type="password" nama="password" id="password" class="form-control" required>
                </div>
                <div class="mb-3">
                    <button class="btn-primary" form-control type="submit">login</button>
                </div>
            </form>
        </div>
</body>
</html>