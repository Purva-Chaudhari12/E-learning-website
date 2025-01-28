<?php
include('./maininclude/header.php');
?>

<!DOCTYPE html>    
<html>    
<head>    
<meta name="viewport" content="width=device-width, initial-scale=1">    

<style>    
/* Your CSS styles here */
.header {
  background-color: #333;
  color: white;
  padding: 10px;
  text-align: center;
  position: fixed;
  width: 100%;
  top: 0;
}

.container {
  max-width: 500px;
  margin: auto;
  padding: 100px 20px 20px; /* Adjust top padding to make space for the fixed header */
}

input[type=text], input[type=email], select, textarea {    
  width: 100%;    
  padding: 10px;    
  border: 1px solid #ccc;    
  border-radius: 4px;    
  resize: vertical;    
}    
    
label {    
  padding: 10px 0;    
  display: inline-block;    
}    
    
input[type=submit] {    
  background-color: #007bff;    
  color: white;    
  padding: 12px 20px;    
  border: none;    
  border-radius: 4px;    
  cursor: pointer;    
}    
    
input[type=submit]:hover {    
  background-color: #0056b3;    
}    

.col-25 {    
  float: left;    
  width: 30%;    
  margin-top: 6px;    
}    
    
.col-75 {    
  float: left;    
  width: 70%;    
  margin-top: 6px;    
}    
    
/* Clear floats after the columns */    
.row:after {    
  content: "";    
  display: table;    
  clear: both;    
}    
</style>    

</head>    
<body>    

<div class="header">
  <h2>FEEDBACK FORM</h2>
</div>

<div class="container">    
  <form id="feedbackForm" onsubmit="showThankYouMessage(); return false;">    
    <div class="row">    
      <div class="col-25">    
        <label for="fname">First Name</label>    
      </div>    
      <div class="col-75">    
        <input type="text" id="fname" name="firstname" placeholder="Your name..">    
      </div>    
    </div>    

    <div class="row">    
      <div class="col-25">    
        <label for="cname">Course Name</label>    
      </div>    
      <div class="col-75">    
        <input type="text" id="cname" name="coursename" placeholder="Your course name..">    
      </div>    
    </div>    

    <div class="row">    
      <div class="col-25">    
        <label for="email">Email</label>    
      </div>    
      <div class="col-75">    
        <input type="email" id="email" name="email" placeholder="Your email..">    
      </div>    
    </div>    

    <div class="row">    
      <div class="col-25">    
        <label for="country">Country</label>    
      </div>    
      <div class="col-75">    
        <select id="country" name="country">    
          <option value="none">Select Country</option>    
          <option value="australia">Australia</option>    
          <option value="canada">Canada</option>    
          <option value="usa">USA</option>    
          <option value="russia">Russia</option>    
          <option value="japan">Japan</option>    
          <option value="india">India</option>    
          <option value="china">China</option>    
        </select>    
      </div>    
    </div>    

    <div class="row">    
      <div class="col-25">    
        <label for="feedback">Feedback</label>    
      </div>    
      <div class="col-75">    
        <textarea id="feedback" name="feedback" placeholder="Write something.." style="height:150px"></textarea>    
      </div>    
    </div>    

    <div class="row" style="text-align: center;">    
      <input type="submit" value="Submit">    
    </div>    
  </form>    
</div>    

<script>
function showThankYouMessage() {
  document.getElementById("feedbackForm").reset(); // Reset form fields
  document.getElementById("feedbackForm").innerHTML = "<div style='text-align:center;'>Thank you for your feedback!</div>";
}
</script>  

</body>    
</html>

<?php
include('./maininclude/footer.php');
?>
