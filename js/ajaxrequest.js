$(document).ready(function(){
  //ajax call for already regstered email
$("#stuemail").on("keypress blur",function(){
  var reg = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  var stuemail = $("#stuemail").val()
  $.ajax({
    url:'student/addstudent.php',
    method:'POST',
    data:{
      checkemail:"checkmail",
      stuemail:stuemail,
    },
    success:function(data){
      //console.log(data);
      if(data!=0){
        $("#statusMsg2").html(
          '<small style="color:red;">Email ID Already used!</small>'
        );
        $("#signup").attr("disabled",true);
      }else if (data==0 && reg.test(stuemail)){
      $("#statusMsg2").html(
        '<small style="color:green;">There you go</small>'
      );
        $("#signup").attr("disabled",false);
      
      }else if(!reg.test(stuemail)){
        $("#statusMsg2").html(
          '<small style="color:red;">Please enter valid mail! e.g.example@mail.com</small>'
        );
        $("#signup").attr("disabled",true);
      }
      if(stuemail==""){
        $("#statusMsg2").html(
          '<small style="color:red;">Please Enter Email !</small>'
        );
        $("#signup").attr("disabled",true);
      }
    },
  });
});
});









function addstu(){
    var reg = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var stuname =$("#stuname").val();
    var stuemail =$("#stuemail").val();
    var stupass =$("#stupass").val();

  //checking form fields
  if(stuname.trim()=="")
  {
    $("#statusMsg1").html(
      '<small style="color:red;">Please Enter Name !</small>'
    );
    $("#stuname").focus();
    return false;
  }
  else if(stuemail.trim()=="")
  {
    $("#statusMsg2").html(
      '<small style="color:red;">Please Enter Email!</small>'
    );
    $("#stuemail").focus();
    return false;
  }
  else if(stuemail.trim() !=="" && !reg.test(stuemail))
  {
    $("#statusMsg2").html(
      '<small style="color:red;">Please Enter Email! e.g.example@mail.com</small>'
    );
    $("#stuemail").focus();
    return false;
  }
  else if(stupass.trim()=="")
  {
    $("#statusMsg3").html(
      '<small style="color:red;">Please Enter Password!</small>'
    );
    $("#stupass").focus();
    return false;
  }
  else{
    $.ajax({
      url: "student/addstudent.php",
      method: "POST",
      dataType: "json",
      data: {
          stusignup: "stusignup",
          stuname: stuname,
          stuemail: stuemail,
          stupass: stupass
      },
      success: function(data) {
          console.log(data); // Log the response data to the console for debugging
  
          if (data == "OK") {
              // Display a success message if registration is successful
              $("#successMsg").html("<span class='alert alert-success'>Registration Successful !</span>");
  
              // Clear the registration form fields
              clearStuRegField();
          } else if (data == "Failed") {
              // Display an error message if registration failed
              $("#successMsg").html("<span class='alert alert-danger'>Unable to Register</span>");
          }
      },
     
  });
  


  }

    
}

//empty all fields
function clearStuRegField(){
  $("#stuRegForm").trigger("reset");
  $("#statusMsg1").html(" ");
  $("#statusMsg2").html(" ");
  $("statusMsg3").html(" ");
}

//Ajax call for student login verification
function checkStuLogin(){
 var stuLogEmail=$("#stuLogemail").val();
 var stuLogPass=$("#stuLogpass").val();
 $.ajax({
  url: "student/addstudent.php",
  method:"POST",
  data:{
    checkLogemail:"checkLogmail",
    stuLogEmail:stuLogEmail,
    stuLogPass:stuLogPass,
  },
  success:function(data){
    if(data==0){
      $("#statusLogMsg").html('<small class="alert alert-danger">Invalid Email Id or Password!</small>');

    }else if(data == 1) {
      $("#statusLogMsg").html('<div class="spinner-border text-success" role="status"></div>');

    }
    setTimeout(()=>{
      window.location.href="index.php";

    },1000);
  },
 });
}