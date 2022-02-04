<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN IN</title>
    <!-- css -->
    <link rel="stylesheet" href="./log in.css">
    <!-- CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="text-center">

    <main class="form-signin">
        <form class="one">
            <h1 class="border-start-2-danger"><span class="border-start border-5 border-info">E-classe</span></h1>
            <h3 class=" mb-3 "> SIGN IN</h3>
            <div id="email" class="form-text mb-3">Enter your credentials to access your account</div>

            <div class="email">
                <label for="email ">Email</label>
                <input type="email" class="form-control mt-2 " id="floatingInput" placeholder="Enter your email">
            </div>
            <div class="password mt-3">
                <label for="password">Password</label>
                <input type="password" class="form-control mt-2 " id="floatingPassword" placeholder="Enter your Password">
            </div>
            <button class=" btn  btn-primary" type="submit"><a href="./home.php">Sign in</a></button>
            <label>
          </label>
            </div>

            <p class="mt-3 mb-5 text-muted">forgot your password?<a href="#">Reset password</a></p>
        </form>
    </main>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>