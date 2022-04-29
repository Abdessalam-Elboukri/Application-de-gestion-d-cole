<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    <div class="container-fluid p-0 m-0">
        <div class="d-flex flex-nowrap">
            <!-- start sidebar -->
            <?php include 'includes/sidebar.php'; ?>
                <!-- end sidebar -->
            <div class="col-lg-10 col-11 col-sm-9 px-0 bg-white shadow">
            <?php include 'includes/navbar.php'; ?>
                <main>
                    <div class="title_page p-2">
                        <h5>Dashboard</h5>
                        <p>Welcome to Standford .</p>
                    </div>
                    <div class="d-flex gap-3 flex-wrap p-2 ">
                        <!-- code here -->
                        <!-- del -->
                        <div class="col-sm-10 col-md-5 col-10 col-xl-3 mb-2 card_static">
                            <div class="card shadow border-0 fs-6">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div class="" style="height: 120px;">
                                            <h5 class="card-title">Students</h5>
                                            <p class="card-text mt-4">
                                                Total Students :<span class="number_student static">1005</span>
                                            </p>
                                        </div>                      
                                    <i class="fs-4 bi-mortarboard"></i>
                                    </div>
                                    <div class="progress1">
                                        <div class="progress-bar progress_child prog_student" role="progressbar"  aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <--------------------->
                        <div class="col-sm-10 col-md-5 col-10 col-xl-3 mb-2 card_static">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div class="" style="height: 120px;">
                                            <h5 class="card-title">Teachers</h5>
                                            <p class="card-text mt-4">
                                                Total Teachers :<span class="number_teachers static">65</span>
                                            </p>
                                        </div>                      
                                    <i class="fs-4 bi-people"></i>
                                    </div>
                                    <div class="progress1">
                                        <div class="progress-bar progress_child prog_teacher" role="progressbar"  aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <--------------------->
                        <div class="col-sm-10 col-md-5 col-10 col-xl-3 mb-2 card_static">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div class="" style="height: 120px;">
                                            <h5 class="card-title"> Classes</h5>
                                            <p class="card-text mt-4">
                                                Total Classes :<span class="number_classes static">78</span>
                                            </p>
                                        </div>                      
                                    <i class="fs-4 bi-diagram-3"></i>
                                    </div>
                                    <div class="progress1">
                                        <div class="progress-bar progress_child prog_classes" role="progressbar"  aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <--------------------->
                        <div class="col-sm-10 col-md-5 col-10 col-xl-2  mb-2 card_static">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div class="" style="height: 120px;">
                                            <h5 class="card-title">Admins</h5>
                                            <p class="card-text mt-4">
                                                Total Admins :<span class="number_admins static">7</span>
                                            </p>
                                        </div>                      
                                    <i class="fs-4 bi-person-check-fill"></i>
                                    </div>
                                    <div class="progress1">
                                        <div class="progress-bar progress_child prog_admins" role="progressbar"  aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- del -->
                        <!-- <--------------------->
                    </div>
                </main>
            </div>
            </div>
        </div>



        
            
</body>
</html>