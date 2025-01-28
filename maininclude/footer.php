<!-- registration form model -->
  <!-- Modal -->
  <div class="modal fade" id="stuRegisModal" tabindex="-1" aria-labelledby="stuRegisModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="stuRegisModalLabel">Student Registration</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<?php
     include('studentregis.php');
?>
  <!-- end student registration form -->
      </div>
      <div class="modal-footer">
      <span id="successMsg"></span>
      <button type="button" class="btn btn-primary" 
      onclick="addstu()" id="signup">Sign Up</button>
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!-- end student registration mode -->

<!-- Login form model -->
  <!-- Modal -->
  <div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="LoginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="LoginModalLabel">Student Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
  <form id="stuLoginForm">
      <div class="form-group">
        <i class="fas fa-envelope"></i>
          <label for="stuLogemail" class="pl-2 font-weight-bold">Email</label>
          <input type="email" class="form-control" id="stuLogemail" placeholder="Email" name="stuLogemail">
          
      </div>
      <div class="form-group">
        <i class="fas fa-key"></i>
          <label for="stuLogpass" class="pl-2 font-weight-bold">Password</label>
          <input type="password" class="form-control" id="stuLogpass" placeholder="password" name="stuLogpass">
      </div>
  </form>
  <!-- end student login form -->
      </div>
      <div class="modal-footer">
        <small id="statusLogMsg"></small>
      <button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="checkStuLogin()"> Login </button>
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        
      </div>
    </div>
  </div>
</div>
<!-- end student Login model -->

<!-- Section for Copyright -->
<footer class="container-fluid bg-dark text-center p-2">
        <small class="text-white"> Copyright&copy; 2024 || Designed By E-learning ||<a href="#login" data-bs-toggle="modal" data-bs-target="#AdminLoginModal">Admin Login</a> </small>
    </footer>

<!-- Admin loginForm -->
<div class="modal fade" id="AdminLoginModal" tabindex="-1" aria-labelledby="AdminLoginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="AdminLoginModalLabel" >Admin Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
  <form id="AdminLoginForm">
      <div class="form-group">
        <i class="fas fa-envelope"></i>
          <label for="AdminLogEmail" class="pl-2 font-weight-bold">Email</label>
          <input type="email" class="form-control" id="AdminLogEmail" placeholder="Email" name="AdminLogEmail">
          
      </div>
      <div class="form-group">
        <i class="fas fa-key"></i>
          <label for="AdminLogPass" class="pl-2 font-weight-bold">Password</label>
          <input type="password" class="form-control" id="AdminLogPass" placeholder="password" name="AdminLogPass">
      </div>
  </form>
  <!-- end student login form -->
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary" id="AdminLoginBtn" onclick="checkAdminLogin()">Login</button>
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        
      </div>
    </div>
  </div>`
</div>
 


    
    <!--jqury and bootstrap-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/all.min.js"></script>
    <!--Student Ajax Call javascript-->
    <script src="js/ajaxrequest.js"></script>
    <!--Admin Ajax call javascript-->
    <script src="js/adminajaxrequest.js"></script>
  </body>
</html>