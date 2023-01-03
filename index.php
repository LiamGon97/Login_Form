<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In | VALHALLA ACADEMY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    <link rel="stylesheet" href="dash.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"><link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body style="background-color: #0c0000">
<div class="container px-4 py-3 mt-5 h-100"> <!--container-->
    <div class="row d-flex justify-content-center h-100"> <!--grid-->
        <div class="col-9 col-sm-8 col-md-7 col-lg-6 col-xl-5 "> <!--column-->
            <div class="bg-light text-black rounded-4"> <!--background-->
                <div class="p-1 px-5 py-3 text-center rounded-4" style="box-shadow: 1px 3px 12px rgba(25,52,76,0.71);"> <!--padding-->
                    <div class="mb-md-2 mt-md-2"> <!--margin-->
                        <form action="login.php" method="post">
                            <img src="image/logo.jpeg" alt="Logo" width="70%" height="50%" class="py-3">
                            <h3 class="fw-bold mb-2 text-uppercase">Login</h3>
                            <?php if (isset($_GET['error'])) echo "<p class='error' style='color: #ffce00;background-color:#023662'>" . $_GET['error'] . "</p>"; ?>
                            <div class="form-floating form-outline form-white mb-3">
                                <input type="text" id="username" name="user_n" class="form-control form-control" placeholder="Username">
                                <label for="username" class="text-muted">Username</label>
                            </div>
                            <div class="form-floating form-outline form-white mb-3">
                                <input type="password" id="password" name="user_p" class="form-control form-control" placeholder="Password">
                                <label for="password" class="text-muted">Password</label>
                            </div>
                            <button class="btn btn-outline-dark btn-md px-5" type="submit"><b>Login</b></button>
                        </form>
                    </div>
                    <hr>
                    <div>
                        <p class="mb-3 text-muted">&copy; 2022 VALHALLA ACADEMY </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>