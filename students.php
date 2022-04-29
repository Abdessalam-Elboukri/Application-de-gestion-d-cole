<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    <div class="container-fluid p-0 m-0">
        <div class="d-flex  flex-nowrap w-100">
            <!-- start sidebar -->
            <?php include 'includes/sidebar.php'; ?>
                <!-- end sidebar -->
            <div class="col-lg-10 col-11 col-sm-9 px-0 bg-white shadow ">
                <?php include 'includes/navbar.php'; ?>
                <main>
                    <div class="title_page p-2">
                        <h5>Students</h5>
                        <p>Welcome to Standford .</p>
                    </div>
                    <div class="w-100 table-responsive">
                        <table class="table table-striped table-hover table_students">
                            <thead>
                                <tr class=" text-muted ">
                                    <th scope="col"></th>
                                    <th scope="col">Matricule</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Genre</th>          
                                    <th scope="col">Date de N<abbr title="Naissance">...</abbr></th>
                                    <th scope="col">Class</th> 
                                    <th scope="col">Address</th> 
                                    <th scope="col">Nom de <abbr>Parent</abbr></th> 
                                </tr>
                            </thead>
                            <tbody>  <!-- ---------------------------- -->
                                <tr class="bg-white shadow">
                                    <td class="align-middle">
                                        <img src='images/avatar5.jpg' width="50" height="50" class="rounded-circle">
                                    </td>
                                    <td class="align-middle ">3561526</td>
                                    <td class="align-middle">Miller Hilton</td>
                                    <td class="align-middle"> Miller@gmail.com</td>
                                    <td class="align-middle">Female</td>
                                    <td class="align-middle">1/20/1999</td>
                                    <td class="align-middle">Class AE</td>
                                    <td class="align-middle">Tanger</td>
                                    <td class="align-middle">Mike Hilton</td>
                                </tr>
                                <!--  -->
                                <tr class="bg-white shadow">
                                    <td class="align-middle">
                                        <img src='images/avatar5.jpg' width="50" height="50" class="rounded-circle">
                                    </td>
                                    <td class="align-middle ">3561526</td>
                                    <td class="align-middle">Miller Hilton</td>
                                    <td class="align-middle"> Miller@gmail.com</td>
                                    <td class="align-middle">Female</td>
                                    <td class="align-middle">1/20/1999</td>
                                    <td class="align-middle">Class AE</td>
                                    <td class="align-middle">Tanger</td>
                                    <td class="align-middle">Mike Hilton</td>
                                </tr>
                                <!--  -->
                                <tr class="bg-white shadow">
                                    <td class="align-middle">
                                        <img src='images/avatar5.jpg' width="50" height="50" class="rounded-circle">
                                    </td>
                                    <td class="align-middle ">3561526</td>
                                    <td class="align-middle">Miller Hilton</td>
                                    <td class="align-middle"> Miller@gmail.com</td>
                                    <td class="align-middle">Female</td>
                                    <td class="align-middle">1/20/1999</td>
                                    <td class="align-middle">Class AE</td>
                                    <td class="align-middle">Tanger</td>
                                    <td class="align-middle">Mike Hilton</td>
                                </tr>
                            </tbody>
                        </div>
                    </main>
                </div>
            </div>
        </div>    

</body>
</html>