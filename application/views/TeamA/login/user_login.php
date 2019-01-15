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
            <div id="hide_email">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="email_address" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>

                <div class="form-group">
                    <input type="button" class="btn btn-outline-secondary" id="email_check" value="Next">
                </div>
            </div>


            <div id="hide_password">

                <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="text" id="password"  aria-describedby="eotp" class="form-control" placeholder="Enter Password">
                    <small id="eotp" class="form-text text-muted text-primary">secure login </small>
                </div>
                <div class="form-group">
                    <input type="button" id="btn_login" class="btn btn-outline-info"value="Login" >
                </div>
            </div>

            <h6 class="text-danger" id="success_message"></h6>


        </div>


    </div>
</div>


</body>
<script>

    $(document).ready(function(){
        var email;
        var pass;

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
                    if(jsonData['status']==true){
                        window.location.replace('<?php echo base_url()."index.php/teama/login/login/dashboard/admin";?>');
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
