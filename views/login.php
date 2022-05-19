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
                                <input type="email" name="email" id="email" placeholder="Enter your Email" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="password" placeholder="Enter your Password" class="form-control">
                            </div>
                            <div class="form-group d-flex justify-content-center">
                                <input  type="submit" class="form-control shadow signin_w btn-primary fw-700" value="LOGIN" name="login" >
                            </div>
                        </form>
                        <div class="text-center pss_frgt fs-6 text-white">
                            <p class="">Forgot your Password ?<a href="dashboard">Click here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
