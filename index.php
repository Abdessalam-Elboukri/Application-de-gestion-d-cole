<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" school management">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <main class="background-login">
        <div class="d-flex justify-content-end align-items-center button1 ">
            <a href="#" class="shadow">Sign Up</a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-10 offset-md-3">
                    <div class="text-center mt-4 mb-2 ">
                        <img src="images/Salford.png" alt="logo" class="img-fluid mb-1" width="150px">
                        <h4 class="text-white">Login</h4>
                    </div>
                    <div class="card-body">
                        <form action="login.php" method="post">
                            <div class="form-group">
                                <input type="text" name="username" id="username" placeholder="Enter your Username" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="password" placeholder="Enter your Password" class="form-control">
                            </div>
                            <div class="form-group d-flex justify-content-center">
                                <input  type="submit" class="form-control shadow signin_w btn-primary fw-700" value="LOGIN" >
                            </div>
                        </form>
                        <div class="text-center pss_frgt fs-6 text-white">
                            <p class="">Forgot your Password ?<a href="home.php">Click here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="./script.js"></script> 
</body>
</html>