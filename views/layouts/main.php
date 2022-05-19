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
    <link href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>School</title>
</head>
<body>
    <div class="container-fluid p-0 m-0">
        <div class="d-flex flex-nowrap">
            <!-- start sidebar -->
            <div class=" col-auto  px-3 bg-light shadow sidebar1 side-menu sidebar_margin">
                <div class="d-flex flex-column align-items-center  p-3 pt-2 text-white min-vh-100">
                    <div class="d-flex justify-content-center mb-2 ">
                        <a href="home.php" class="d-flex justify-content-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                            <img src="images/Salford.png" class="d-none d-sm-inline" width="50">
                        </a>
                    </div>
                    <div class="image_profile text-center">
                        <img src="images/avatar1.jpg" class="d-none d-sm-inline" alt="">
                        <p class="text-dark d-none d-sm-block"><strong >Meley Say</strong></p>
                    </div>

                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start mt-2" id="menu">
                        <li class="nav-item">
                            <a href="dashboard" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="students"  class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-mortarboard"></i> <span class="ms-1 d-none d-sm-inline">Student</span> 
                            </a>
                        </li>
                        <li>
                            <a href="" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Teachers</span></a>
                        </li>
                        <li>
                            <a href="classes" class="nav-link px-0 align-middle ">
                                <i class="fs-4 bi-diagram-3"></i> <span class="ms-1 d-none d-sm-inline">Classes</span>
                            </a>
                        </li>
                        <hr>
                        <li>
                            <a href="profile" class="nav-link px-0 align-middle mt-2">
                                <i class="fs-4 bi-person-circle"></i> <span class="ms-1 d-none d-sm-inline">Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="login" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-box-arrow-in-right" ></i> <span class="ms-1 d-none d-sm-inline">Logout</span> </a>
                        </li>
                    </ul>
                    </div>
                </div>

                <!-- end sidebar -->
            <div class="container-fluid p-0 m-0 content">
            <nav class="bg-blue  ">
                <div class="search d-flex justify-content-between">
                    <div class="me-3 d-inline text-white fw-bold">
                        <i class="bi bi-list fs-5 side-btn"></i>
                    </div>
                    <div>
                        <input type="search" class="input-form p-1 ps-2 text-white" placeholder="Search ...">
                        <button class="btn-search"><i class="bi-search text-white"></i></button>
                    </div>
                </div>
            </nav>
                {{content}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="js/script.js"></script>
    
</body>
</html>