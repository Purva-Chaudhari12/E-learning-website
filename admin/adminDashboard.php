
<?php
  include('./admininclude/header.php')

?>

            <div class="col-sm-9 mt-5">
                <div class="row mx-5 text-center">
                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-danger mb-3" style="max-width:18rem;">
                            <div class="card-header">Courses</div>
                            <div class="card-body">
                                <h4 class="card-title">5</h4>
                                <a class="btn text-white" href="#">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                            <div class="card-header">Students</div>
                            <div class="card-body">
                                <h4 class="card-title">25</h4>
                                <a class="btn text-white" href="#">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-danger mb-3" style="max-width:18rem;">
                            <div class="card-header">Sold</div>
                            <div class="card-body">
                                <h4 class="card-title">3</h4>
                                <a class="btn text-white" href="#">View</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Table Section -->
                <div class="mx-5 mt-5 text-center">
                    <!--table-->
                    <p class="bg-dark text-white p-2">Course Order</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Course Id</th>
                                <th scope="col">Student Name</th>
                                <th scope="col">Student Email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">22</th>
                                <td>100</td>
                                <td>Name</td>
                                <td>sona@gmail.com</td>
                                <td><button type="submit" class="btn btn-secondary" name="delete" value="Delete"><i class="far fa-trash-alt"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?php

  include('./admininclude/footer.php')

?>   
