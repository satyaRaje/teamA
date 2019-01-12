    <!DOCTYPE html>
<html lang="zxx">
<!-- Head -->

<head>
    <title>login form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>

    <style>
    background-image: linear-gradient(to left bottom, #858383, #a2a1a1, #c0bfc0, #dfdfdf, #ffffff);
</style>
</head>

<body>
<br><br>
<div class="container">

    <div class="row">
        <div class="col-sm-3"> </div>

        <div class="col-sm-6 border border-dark" style="border-radius:5px;">
            <h1 class="text-center">Ipro3d</h1>
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
                         var a=  data;
                         var jsonData = JSON.parse(data);
                         if(jsonData['status']==true){
                             //eotp=jsonData['email_otp'];
                             $("#email_otp_send").hide();
                               if(jsonData['status']===true){
                                  alert("Registration Successful..");
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
