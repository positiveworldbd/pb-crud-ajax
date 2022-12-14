<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery-Ajax-CRUD</title>
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<body>

    <!-- CRUD START -->
    <div class="crud py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="student__form mb-5 bg-light border border-primary rounded p-4">
                        <!-- HEADING START -->
                        <h2 class="py-2 text-center text-primary display-6">Student Form</h2>
                        <!-- MESSAGE START-->
                        <div class="msg"></div>
                        <!-- FORM START-->
                        <div class="form-group mb-3">
                            <label for="student_name">Student Name</label>
                            <input type="text" name="student_name" id="student_name" class="student_name form-control" placeholder="Enter student name">
                        </div>
                        <div class="form-group mb-3">
                            <label for="f_name">Father's Name</label>
                            <input type="text" name="f_name" id="f_name" class="f_name form-control" placeholder="Enter father's name">
                        </div>
                        <div class="form-group mb-3">
                            <label for="m_name">Mother's Name</label>
                            <input type="text" name="m_name" id="m_name" class="m_name form-control" placeholder="Enter mother's name">
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" class="email form-control" placeholder="Enter email address">
                        </div>
                        <div class="form-group mb-3">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="status form-control">
                                <option value="">---------- Select Status ----------</option>
                                <option value="1">Active</option>
                                <option value="2">Inactive</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <button class="add_student btn btn-primary btn-block w-100" name="add_student">Add Student</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="student__data border border-primary rounded p-3">
                        <h2 class="py-2 text-center text-primary display-6">Student Information</h2>
                        <button data-bs-toggle="modal" data-bs-target="#forInsert" class="add_new btn btn-dark mb-3" name="add_new">Add New</button>

                        <!-- MODAL FOR DELETE-->
                        <div class="modal fade" id="forDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-danger" id="exampleModalLabel">Confirmation Message</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete this item?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <button class="MbtnDelete btn btn-danger"><i class="fa-solid fa-trash"></i> Confirm</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- MODAL FOR INSERT-->
                        <div class="modal fade" id="forInsert" tabindex="-2" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-dark" id="exampleModalLabel">Add New Student</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group m-4">
                                            <input type="text" id="Mstudent_name" class="form-control" placeholder="Enter student name">
                                        </div>
                                        <div class="form-group m-4">
                                            <input type="text" id="Mf_name" class="form-control" placeholder="Enter father's name">
                                        </div>
                                        <div class="form-group m-4">
                                            <input type="text" id="Mm_name" class="form-control" placeholder="Enter mother's name">
                                        </div>
                                        <div class="form-group m-4">
                                            <input type="text" id="Memail" class="form-control" placeholder="Enter email address">
                                        </div>
                                        <div class="form-group m-4">
                                            <select id="Mstatus" class="form-control">
                                                <option value="">---------- Select Status ----------</option>
                                                <option value="1">Active</option>
                                                <option value="2">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-success" id="MAddNew">Add</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- TABLE START -->
                        <table class="table table-striped" id="example">
                            <thead>
                                <tr class="text-center">
                                    <th>SL.No</th>
                                    <th>Student Name</th>
                                    <th>Father's Name</th>
                                    <th>Mother's Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="tdata">

                                <!-- DATA PRINTED USING AJAX PHP SERVER -->

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CRUD END -->


    <!-- JS INCLUDE -->
    <script src="./js/jquery-3.6.1.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/app.js"></script>
</body>

</html>