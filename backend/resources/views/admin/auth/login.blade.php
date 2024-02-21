<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/argon-design-system-free@1.2.0/assets/css/argon-design-system.min.css"
        rel="stylesheet">
</head>

<body>

    <div class=" container mt-5">
        <div class="row">
            <div class="col-6 offset-3">
                <div class="card">
                    <div class="card-header">Admin Loging</div>
                    <div class="card-body">
                        <form action="{{ url('admin/login') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="email">Enter Email</label>
                                <input type="text" name="email" id="email" class=" form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Enter Password</label>
                                <input type="password" name="password" id="password" class=" form-control">
                            </div>
                            <input type="submit" class="btn btn-dark" value="Login">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
