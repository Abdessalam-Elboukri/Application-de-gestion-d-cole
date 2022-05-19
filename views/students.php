
                <main>
                    <div class="title_page p-2 d-flex justify-content-between">
                        <div>
                            <h5>Students</h5>
                            <p>Welcome to Standford .</p>
                        </div>                        
                        <div class="d-inline-block">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_student">
                            Add Student
                            </button>
                        </div>
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

        

    <div class="modal fade" id="add_student" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="login-form">
                    <div class=" d-flex flex-column text-muted align-items-start mb-2">
                        <label for="">Image</label>
                        <input type="file" name="_image" id="" value=""  class="w-100 rounded-3 border p-1 form-control">
                    </div>
                    <div class="d-flex gap-4 mb-2 pe-sm-4">
                        <div class=" d-flex flex-column text-muted col-sm-6 align-items-start">
                            <label for="">Matricule</label>
                            <input type="number" name="matricule" id="" value=""  class="w-100 rounded-3 border p-1 form-control">
                        </div>
                        <div class=" d-flex flex-column text-muted col-sm-6 align-items-start">
                            <label for="">Full name</label>
                            <input type="text" name="f_name" id="" value=""  class="w-100 rounded-3 border p-1 form-control">
                        </div>
                    </div>
                        
                        <div class=" d-flex flex-column text-muted align-items-start ">
                            <label for="">E-mail</label>
                            <input type="email" name="email" id="" value=""  class="w-100 rounded-3 border p-1 form-control">
                        </div>
                        
                        <div class=" d-flex flex-column text-muted mt-2 align-items-start">
                            <label for="">Genre</label>
                            <select class="outline-none form-control ">
                                <option value="male">Male</option>
                                <option value="female">Femele</option>
                            </select>
                            <!-- <input type="phone" name="phone" id="" value=""  class="w-100 rounded-3 border p-1 form-control"> -->
                        </div> 
                        <div class="d-flex gap-4 mb-2 pe-sm-4 mt-1">
                        <div class=" d-flex flex-column text-muted col-sm-6 align-items-start">
                            <label for="">Class</label>
                            <input type="text" name="class" id="" value=""  class="w-100 rounded-3 border p-1 form-control">
                        </div>
                        <div class=" d-flex flex-column text-muted col-sm-6 align-items-start">
                            <label for="">Parent Name</label>
                            <input type="text" name="p_name" id="" value=""  class="w-100 rounded-3 border p-1 form-control">
                        </div>
                    </div>
                        <div class=" d-flex flex-column text-muted mt-2 align-items-start">
                            <label for="">Address</label>
                            <textarea id="address" name="address" rows="2" cols="auto" resize ="none" outline="none"  width="100%"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" name="sub_add_contact" class="btn btn-primary" value="Add">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 <!-- end add contact modal -->
