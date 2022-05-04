<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    <div class="container-fluid p-0 m-0">
        <div class="d-flex flex-nowrap">
            <!-- start sidebar -->
            <?php include 'includes/sidebar.php' ?>
                <!-- end sidebar -->
            <div class="container-fluid p-0">
                <?php include 'includes/navbar.php'; ?>
                <main>
                    <div class="title_page p-2">
                        <h5>Classes</h5>
                        <p>Welcome to Standford .</p>
                    </div>
                    <div class="d-flex flex-wrap justify-content-center justify-content-sm-start gap-3 p-2 ">
                        <div class="col-10 col-md-5 col-xl-3 mb-2 " onclick="popup('https://youtube.com','600px','700px')">
                            <div class="card shadow border-0 class_card">
                                <div class="card-body " >
                                    <div class="d-flex justify-content-between text-muted ">
                                        <div class="" style="height: 160px;">
                                            <h5 class="card-title text-dark">Class A</h5>
                                            <p class="card-text mt-3 ">
                                                Prof :<span class=" ">Hamza</span>
                                            </p>
                                            <p class="card-text mt-3 ">
                                                Option:<span class=" ">Chimie</span>
                                            </p>
                                            <p class="card-text mt-3">
                                                Total Students :<span class="static">49</span>
                                            </p>
                                        </div> 
                                        <i class="bi bi-mortarboard graduation_icon"></i>                     
                                    </div>
                                    <div class="d-flex justify-content-end arrow_class">
                                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="fs-5 bi-capslock-fill text-success"></i>
                                        </button>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <!-- <--------------------->
                        <div class="col-10 col-md-5 col-xl-3 mb-2">
                            <div class="card shadow border-0 class_card">
                                <div class="card-body " >
                                    <div class="d-flex justify-content-between text-muted ">
                                        <div class="" style="height: 160px;">
                                            <h5 class="card-title text-dark">Class B</h5>
                                            <p class="card-text mt-3 ">
                                                Prof :<span class=" ">Hamza</span>
                                            </p>
                                            <p class="card-text mt-3 ">
                                                Option:<span class=" ">Math</span>
                                            </p>
                                            <p class="card-text mt-3">
                                                Total Students :<span class=" static">49</span>
                                            </p>
                                        </div> 
                                        <i class="bi bi-mortarboard graduation_icon"></i>                     
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#class_students">
                                            <i class="fs-5 bi-capslock-fill text-success"></i>
                                        </button>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <!-- <--------------------->
                        <div class="col-10 col-md-5 col-xl-3  mb-2">
                            <div class="card shadow border-0 class_card">
                                <div class="card-body " >
                                    <div class="d-flex justify-content-between text-muted ">
                                        <div class="" style="height: 160px;">
                                            <h5 class="card-title text-dark">Class A</h5>
                                            <p class="card-text mt-3 ">
                                                Prof : <span class=" ">Hamza</span>
                                            </p>
                                            <p class="card-text mt-3 ">
                                                Option : <span class=" ">Chimie</span>
                                            </p>
                                            <p class="card-text mt-3">
                                                Total Students :<span class=" static">49</span>
                                            </p>
                                        </div> 
                                        <i class="bi bi-mortarboard graduation_icon"></i>                     
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="fs-5 bi-capslock-fill text-success"></i>
                                        </button>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <!-- <--------------------->
                    </div>
                </main>
            </div>
            </div>
        </div>

<!-- pop up -->
        <div class="modal fade" id="class_students" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="class_students">Students</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="d-flex fs-6 text-muted mt-1 px-3">
                        <h6 class="me-4"> Class : <span>A</span></h6>
                        <h6>Professeur : <span>Hamza  </span></h6>
                    </div> 
                    <div class="modal-body student_modal">
                        <ul>
                            <li>steve harvey</li>
                            <li>steve harvey</li>
                            <li>steve harvey</li>
                            <li>steve harvey</li>
                            <li>steve harvey</li>
                            <li>steve harvey</li>
                            <li>steve harvey</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> 
        <script src="./script.js"></script>
</body>
</html>