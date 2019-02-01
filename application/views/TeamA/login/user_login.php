<!DOCTYPE html>
<html lang="zxx">
<!-- Head -->

<head>
    <title>login form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <style>
        background-image: linear-gradient(to left bottom, #858383, #a2a1a1, #c0bfc0, #dfdfdf, #ffffff);
    </style>
</head>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src='<?php echo base_url()."style/NewTM_Logo.png";?>' height="40" width="150"/></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-weight:bold;">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="https://www.ipro3d.io">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.ipro3d.io"> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          About Us
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                 <a class="dropdown-item" href="https://www.ipro3d.io/Aboutus/overview.php">Overview</a>
          <a class="dropdown-item" href="https://www.ipro3d.io/Aboutus/overview.php">Careers</a>
          <a class="dropdown-item" href="https://www.ipro3d.io/Aboutus/overview.php">History</a>
          <a class="dropdown-item" href="https://www.ipro3d.io/Aboutus/overview.php">Our Approach</a>
          <a class="dropdown-item" href="https://www.ipro3d.io/Aboutus/overview.php">Our Team</a>
          <a class="dropdown-item" href="https://www.ipro3d.io/Aboutus/overview.php">Company Ethics</a>
          <a class="dropdown-item" href="https://www.ipro3d.io/Aboutus/overview.php">Authentic</a>
          <a class="dropdown-item" href="https://www.ipro3d.io/Aboutus/overview.php">Accuracy</a>
          <a class="dropdown-item" href="https://www.ipro3d.io/Aboutus/overview.php">Careers</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
      
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
           <a class="dropdown-item" href="https://www.ipro3d.io/Aboutus/overview.php">3D Printing</a>
          <a class="dropdown-item" href="https://www.ipro3d.io/Aboutus/overview.php">3D Scanning</a>
          <a class="dropdown-item" href="https://www.ipro3d.io/Aboutus/overview.php">Rapid Prototyping</a>
          <a class="dropdown-item" href="https://www.ipro3d.io/Aboutus/overview.php">3D & 2D CAD Modeling</a>
          <a class="dropdown-item" href="https://www.ipro3d.io/Aboutus/overview.php">Design for 3D Printing</a>
          <a class="dropdown-item" href="https://www.ipro3d.io/Aboutus/overview.php">Reverse Engineering</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
      
      <li class="nav-item active">
        <a class="nav-link" href="https://www.ipro3d.io">Marketplace <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>

<body class="bg-dark">
<br><br>
<div class="container">
<form method="post" action='<?php echo base_url()."index.php/TeamA/login/login/login_success"; ?>'>
    <div class="row">
        <div class="col-sm-3"> </div>

        <div class="col-sm-6 border border-dark bg-light" style="border-radius:5px;;">
            <img src='<?php echo base_url().'/style/NewTM_Logo.png'; ?>'  style=" padding-left:25%;height:100px;max-width: 100%;max-height: 100%;align:center;" class="text-center"/>
            <h1 class="text-center text-secondary">Login</h1>
            <div id="hide_email">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="email_address" aria-describedby="emailHelp" name="email" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>

                <div class="form-group">
                    <input type="button" class="btn btn-outline-secondary" id="email_check" value="Next">
                </div>
                <br>
            </div>


            <div id="hide_password">

                <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" id="password"  aria-describedby="eotp" class="form-control" name="password" placeholder="Enter Password">
                    <small id="eotp" class="form-text text-muted text-primary">secure login </small>
                </div>
                <div class="form-group">
                    <input type="submit"  class="btn btn-outline-info"value="Login" >
                </div>
            </div>
            
            <div class="form-group">
                <a href='<?php echo "https://www.ipro3d.io";?>' class="btn btn-primary float-left" style="padding-bottom:5px;">Home</a>
                <a href='<?php echo base_url()."index.php/TeamA/login/login/login_page"?>' class="btn btn-primary float-right" style="padding-bottom:5px;">Register</a>
                
            </div>
         <br>
            
            <h6 class="text-danger" id="success_message"></h6>


        </div>

</form>
    </div>
</div>



</body>
<script>

    $(document).ready(function(){
        var email;
        var pass;
        var u_type;

        $("#success_message").hide();
        $("#hide_password").hide();
        $("#email_check").click(function () {
             email=$("#email_address").val();
            $.post('<?php echo base_url()."index.php/TeamA/login/login/email_exist_check";?>',
                {
                    name: email
                },
                function(data,status){

                    console.log(data);
                    var a=  data;
                    var jsonData = JSON.parse(data);
                    if(jsonData['status']==true){
                        jsonData['email_otp'];
                        u_type=jsonData['flag'];
                        console.log("user_type "+u_type)
                        $("#success_message").show();
                        $("#success_message").text(jsonData['otp_message']);
                        $("#email_address").attr('readonly', 'true');
                        $("#email_check").hide();
                        $("#hide_password").show();
                        pass=jsonData['password'];
                    }else{

                        $("#success_message").show();
                        $("#success_message").text(jsonData['otp_message']);
                    }


                });
        });
        
        $("#btn_login").click(function () {
            //var md5 = $.md5('gaurav');
            //console.log(md5);
            var email = $("#password").val();
            $.post('<?php echo base_url()."index.php/TeamA/login/login/encrypt_password";?>',
                {
                    name: email
                },
                function(data,status){

                    console.log(data);
                    var a=  data;
                    var jsonData = JSON.parse(data);
                    if(jsonData['enc']==pass){
                        if(u_type==1) {
                            window.location.replace('<?php echo base_url() . "index.php/teama/login/login/admin_dashboard";?>');
                        }else if(u_type==0){
                            window.location.replace('<?php echo base_url() . "index.php/teama/login/login/customer_dashboard";?>');
                        }else{
                            alert("Not Exist");
                        }
                    }else{

                        $("#success_message").show();
                        $("#success_message").text(jsonData['otp_message']);
                    }



                $("#success_message").show();
                $("#success_message").text("ok");

        });


    });
    });





</script>
</html>
