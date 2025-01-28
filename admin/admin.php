<?php
if(!isset($_SESSION)){
  session_start();
}
  include_once('../databaseconnect.php');
   
//Admin login verification
if(!isset($_SESSION['is_admin_login'])){
if(isset($_POST['checkLogmail']) && isset($_POST['AdminLogEmail']) && isset($_POST['AdminLogPass'])){
  $AdminLogEmail = $_POST['AdminLogEmail'];
  $AdminLogPass = $_POST['AdminLogPass'];

  $sql="SELECT admin_email,admin_pass FROM admin WHERE admin_email = '".$AdminLogEmail."' AND admin_pass='".$AdminLogPass."'";
  $result = $conn->query($sql);

  $row=$result->num_rows;
  
  if($row==1){
    $_SESSION['is_admin_login']=true;
    $_SESSION['AdminLogEmail']=$AdminLogEmail; 
    echo json_encode($row);

  }else if($row==0){
    echo json_encode($row);
  }
}
} 
?>