//Ajax call for admin login verification
function checkAdminLogin(){
    var AdminLogEmail=$("#AdminLogEmail").val();
    var AdminLogPass=$("#AdminLogPass").val();
    $.ajax({
     url: "admin/admin.php",
     method:"POST",
     data:{
       checkLogemail:"checkLogmail",
       AdminLogEmail:AdminLogEmail,
       AdminLogPass:AdminLogPass,
     },
     success: function(data){
       if(data==0){
         $("#statusAdminLogMsg").html('<small class="alert alert-danger">Invalid Email Id or Password!</small>');
   
       }else if(data==1) {
         $("#statusAdminLogMsg").html('<small class="alert alert-success">Success Loading...</small>');
       }
         setTimeout(()=>{
            window.location.href="admin/adminDashboard.php";
      
          },1000);
       
      
     },
    });
   }