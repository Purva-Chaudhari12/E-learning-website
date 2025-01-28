<!-- header -->
<?php
include('./mainInclude/header.php')

?>


<!-- course banner -->
<div class="container-fluid bg-dark">
    <div class="row">
        <img src="./image/book.jpg" alt="courses" style="height:500px; width:100%; object-fit:cover; box-shadow: 10px;">
    </div>
</div>

<!-- courses -->
<div class="container mt-5">
    <h1 class="text-center">All Courses</h1>
    <div class="row row-cols-1 row-cols-md-3">
        <div class="col mb-3">
            <div class="card">
                <img src="image/resume.png" class="card-img-top" alt="Guitar" style="height: 300px; width: auto;">
                <div class="card-body">
                    <h5 class="card-title">Learn Resume building</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small> <span class="font-weight-bolder">&#8377 200</span></p>
                    <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
                </div>
            </div>
        </div>
        <!-- Add more course cards here -->
    </div>
</div>

<!-- footer -->
<?php
include('./maininclude/footer.php');
?>
