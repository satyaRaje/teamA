    <!DOCTYPE html>
<html lang="zxx">
<!-- Head -->

<head>
    <title>login form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
</head>


<body class="bg-dark">

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

<br><br>
<div class="container ">

    <div class="row">
        <div class="col-sm-3"> </div>

        <div class="col-sm-6 border border-dark border-dark bg-light" style="border-radius:5px;">
            <h1 class="text-center">Join Community</h1>
            <div id="hide_email_otp">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="email_address" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>

                    <div class="form-group">
                       <input type="button" class="btn btn-outline-secondary" id="email_otp_send" value="Send OTP">
                    </div>
            </div>


        <div id="hide_email_otp_verify">

            <div class="form-group">
                <label for="exampleInputEmail1">Email OTP</label>
                     <input type="text" id="email_otp_verify"  aria-describedby="eotp" class="form-control" placeholder="Enter OTP">
                     <small id="eotp" class="form-text text-muted">Do Not Share OTP</small>
            </div>
            <div class="form-group">
                  <input type="button" id="btn_email_otp_verify" class="btn btn-outline-info"value="Verify OTP" >
            </div>
        </div>

         <div id="hide_mobile_otp">
                <div class="form-group">
                    <label for="exampleInputEmail1">Mobile No</label>
                     <input type="text" id="mobile_no" class="form-control" aria-describedby="emailHelp" placeholder="Enter Mobile No">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your mobile with anyone else.</small>
                </div>
                <div class="form-group">
                      <input type="button" id="btn_mobile_otp_send"  class="btn btn-outline-warning" value="Send OTP">
                </div>

         </div>

          <div id="hide_mobile_verify_otp">
            <div class="form-group">
                <label for="exampleInputEmail1">Mobile OTP</label>
                   <input type="text" id="mobile_otp_verify"aria-describedby="mobilehelp" class="form-control" placeholder="Enter OTP">
                <small id="mobilehelp" class="form-text text-muted">Do Not Share OTP.</small>
            </div>



            <div class="form-group">
                    <input type="button" id="btn_mobile_otp_verify"  class="btn btn-outline-danger" value="Verify OTP">
            </div>
          </div>


           <div id="hide_password">
               <div class="form-group">
                   <label for="exampleInputEmail1">Password</label>
                   <input type="password" id="password"class="form-control" placeholder="Enter Password">
               </div>

               <div class="form-group">
                   <label for="exampleInputEmail1">Confirm Password</label>
                   <input type="password" id="confirm_password"class="form-control" placeholder="Confirm Password">
                   <span id='message'></span>
               </div>

               <div class="form-group">
                   <input type="button" id="register"  class="btn btn-outline-danger" value="Registration">
               </div>
           </div>
            <h6 class="text-danger" id="success_message"></h6>
        </div>


    </div>
</div>


</body>
<script>

    $(document).ready(function(){
        var eotp="";
        var motp="";

        $("#hide_email_otp_verify").hide();
        $("#hide_mobile_otp").hide();
        $("#hide_mobile_verify_otp").hide();
        $("#hide_password").hide();
        $("#success_message").hide();

        $("#email_otp_send").click(function(event){
            var email=$("#email_address").val();
            console.log(email);
            $.post('<?php echo base_url()."index.php/TeamA/login/login/send_email_otp";?>',
                {
                    name: email
                },
                function(data,status){

                    console.log(data);
                        var a=  data;
                        var jsonData = JSON.parse(data);
                         if(jsonData['status']==true){
                            eotp=jsonData['email_otp'];
                            $("#success_message").show();
                             $("#success_message").text(jsonData['otp_message']);
                             $("#hide_email_otp_verify").show();
                             $("#email_address").attr('readonly', 'true');
                             $("#email_otp_send").hide();

                         }else{
                             $("#success_message").show();
                             $("#success_message").text(jsonData['otp_message']);
                         }


                });
        });



        $("#btn_email_otp_verify").click(function(event){
            if(eotp==$("#email_otp_verify").val()){
                $("#success_message").show();
                $("#success_message").text("OTP Verified Successfully..");
                $("#hide_email_otp_verify").hide();
                $("#hide_email_otp").hide();
                $("#hide_mobile_otp").show();

            }else {
                $("#success_message").text("Wrong OTP try again");


            }
            });

    $("#btn_mobile_otp_send").click(function(event){
        var email=$("#mobile_no").val();
        console.log(email)
        $.post('<?php echo base_url()."index.php/TeamA/login/login/send_mobile_otp";?>',
            {
                name: email
            },
            function(data,status){
                //var g=['gaurav''kad']
                console.log(status);
                var a=  data;
                console.log(data);
                var jsonData = JSON.parse(data);
                motp=jsonData['mobile_otp'];
                $("#success_message").text(jsonData['otp_message']);
                $("#mobile_no").attr('readonly', 'true');
                $("#hide_mobile_verify_otp").show();
                $("#btn_mobile_otp_send").hide();
            });
    });


    $("#btn_mobile_otp_verify").click(function(event){
        if(motp==$("#mobile_otp_verify").val()){
            $("#hide_mobile_verify_otp").hide();
            $("#hide_mobile_otp").hide();
            $("#hide_password").show();

        }else{
            console.log("OTP Try Again");
        }

    });
         $("#register").click(function () {
             var pass=$("#password").val();
             var cnf = $("#confirm_password").val();
             if(pass===cnf){
                $("#success_message").text("continue");
                var email = $("#email_address").val();
                var mobile=$("#mobile_no").val();
                var pass = $("#password").val();
                 $.post('<?php echo base_url()."index.php/TeamA/login/login/register_user";?>',
                     {
                         email: email,
                         mobile:mobile,
                         password:pass
                     },
                     function(data,status){

                         console.log(data);
                         console.log(status);
                         var a=  data;
                         var jsonData = JSON.parse(data);
                         if(jsonData['status']==true){
                             //eotp=jsonData['email_otp'];
                             $("#email_otp_send").hide();
                               if(jsonData['status']===true){
                                  alert("Registration Successful..");
                                  window.location.replace('<?php echo base_url();?>');
                               }
                         }else{
                             $("#success_message").show();
                             $("#success_message").text(jsonData['otp_message']);
                         }


                     });


             }else{
                 $("#success_message").text("fail");
             }
         });
    });





</script>
</html>
