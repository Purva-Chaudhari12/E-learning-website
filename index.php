<?php
     include('./maininclude/header.php');
?>

<!--video in background -->
<div class="container-fluid remove-vid-marg">
    <div class="vid-parent">
        <video playsinline autoplay muted loop>
           <source src="video/video.mp4">
        </video>
        <div class="vid-overlay"></div>
    </div>
    <div class="vid-content">
        <h1 class="my-content">Welcome to Spark tuition Classes</h1>
        <small class="my-content">Learn and implementet</small><br>
        <?php
          if(!isset($_SESSION['is_login'])){
            echo '<a href="#" class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#stuRegisModal">Get Started</a>';
          }else{
            echo'<a href="student/profile.php" class="btn btn-pimary mt-3">My Profile</a>';
          }
        ?>
        
        
    </div>
</div>



  <!-- start courses -->
  <div class="container mt-5">
  <h1 class="text-center">Popular Courses</h1>
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
    <div class="col mb-3">
      <div class="card">
        <img src="image/web development.png" class="card-img-top" alt="Java"style="height: 300px; width: auto;">
        <div class="card-body">
          <h5 class="card-title">Learn Web development</h5>
          <p class="card-text">Build a faster website</p>
        </div>
        <div class="card-footer">
          <p class="card-text d-inline">Price: <small><del>&#8377 2500</del></small> <span class="font-weight-bolder">&#8377 300</span></p>
          <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
        </div>
      </div>
    </div>

    <div class="col mb-3">
      <div class="card">
        <img src="image/c++.png" class="card-img-top" alt="Python" style="height: 300px; width: auto;">
        <div class="card-body">
          <h5 class="card-title">Learn c++/h5>
          <p class="card-text">Learn c++ programming .</p>
        </div>
        <div class="card-footer">
          <p class="card-text d-inline">Price: <small><del>&#8377 2200</del></small> <span class="font-weight-bolder">&#8377 250</span></p>
          <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
        </div>
      </div>
    </div>

    <div class="col mb-3">
      <div class="card">
        <img src="image/python.png" class="card-img-top" alt="Python" style="height: 300px; width: auto;">
        <div class="card-body">
          <h5 class="card-title">Python for Data Science</h5>
          <p class="card-text">Learn Python programming for data analysis and visualization.</p>
        </div>
        <div class="card-footer">
          <p class="card-text d-inline">Price: <small><del>&#8377 2200</del></small> <span class="font-weight-bolder">&#8377 250</span></p>
          <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
        </div>
      </div>
    </div>
  
  <div class="col mb-3">
      <div class="card">
        <img src="image/ml.png" class="card-img-top" alt="Java"style="height: 300px; width: auto;">
        <div class="card-body">
          <h5 class="card-title">Learn machine learning</h5>
          <p class="card-text">Master the fundamentals of machine learning</p>
        </div>
        <div class="card-footer">
          <p class="card-text d-inline">Price: <small><del>&#8377 2500</del></small> <span class="font-weight-bolder">&#8377 300</span></p>
          <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
        </div>
      </div>
    </div>
    <div class="col mb-3">
      <div class="card">
        <img src="image/java.png" class="card-img-top" alt="Java"style="height: 300px; width: auto;">
        <div class="card-body">
          <h5 class="card-title">Learn Java Programming</h5>
          <p class="card-text">Master the fundamentals of Java programming language.</p>
        </div>
        <div class="card-footer">
          <p class="card-text d-inline">Price: <small><del>&#8377 2500</del></small> <span class="font-weight-bolder">&#8377 300</span></p>
          <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- second card 
<div class="card-deck mt-5">
    <a href="#" class="btn" style="text-align: left; padding:0px; margin:0px;">
      <div class="card">
        <img src="image/c++.png" class="card-img-top" alt="Guitar">
        <div class="card-body">
          <h5 class="card-title">Learn Web Development</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="card-footer">
          <p class="card-text d-inline">Price: <small><del>&#8377 6000</del></small> <span class="font-weight-bolder">&#8377 5000</span></p>
          <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
        </div>
      </div>
    </a>
  </div>

  
  <div class="card-deck mt-5">
    <a href="#" class="btn" style="text-align: left; padding:0px; margin:0px;">
      <div class="card">
        <img src="image/c++.png" class="card-img-top" alt="Guitar">
        <div class="card-body">
          <h5 class="card-title">Learn Python</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="card-footer">
          <p class="card-text d-inline">Price: <small><del>&#8377 6000</del></small> <span class="font-weight-bolder">&#8377 5000</span></p>
          <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
        </div>
      </div>
    </a>
  </div>-->

  




<div class="text-center m-2">
  <a class="btn btn-danger btn-sm" href="#">View All Courses</a>
</div>
</div>

<div class="container mt-4">
  <h2 class="text-center mb-4">Contact Us</h2>
  <div class="row">
    <div class="col-md-10">
      <form action="index.php" method="POST">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
        </div>
        <br>
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
        </div>
        <br>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea class="form-control" id="message" name="message" rows="5" placeholder="Enter your message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>


  <div class="container">
    <!-- Section for About Us, Category, and Contact Details -->
    <div class="row">
      <div class="col-md-4">
        <h5>About Us</h5>
        <p class="small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut libero eget nisi consectetur sodales vel vel nisi.</p>
      </div>
      <div class="col-md-4">
        <h5>Category</h5>
        <ul class="list-unstyled">
          <li><a href="#" class=" small">Category 1</a></li>
          <li><a href="#" class="small">Category 2</a></li>
          <li><a href="#" class="small">Category 3</a></li>
          <li><a href="#" class="">Category 4</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h5>Contact Details</h5>
        <p class="small">123 Main Street<br>City, State ZIP<br>Phone: 123-456-7890<br>Email: info@example.com</p>
      </div>
    </div>
    </div>

<!-- footer -->
<?php
     include('./maininclude/footer.php');
?>
     

  