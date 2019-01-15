<?php
//session_start();
?>

    <head>

        <title>Generate Quotations</title>
        <!-- Latest compiled and minified CSS -->
       
        <style>
            /* Remove the navbar's default margin-bottom and rounded borders */
            .navbar {
                margin-bottom: 0;
                border-radius: 0;
            }

            /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
            .row.content {height: 450px}

            /* Set gray background color and 100% height */
            .sidenav {
                padding-top: 20px;
                background-color: #f1f1f1;
                height: 100%;
            }

            /* Set black background color, white text and some padding */

            /* On small screens, set height to 'auto' for sidenav and grid */
            @media screen and (max-width: 767px) {
                .sidenav {
                    height: auto;
                    padding: 15px;
                }
                .row.content {height:auto;}
            }

            #enq_panel, #enq_flip {
                padding: 5px;
                text-align: center;
                /*background-color: #e5eecc;
                border: solid 1px #c3c3c3;*/
            }

            #enq_panel {
                padding: 50px;
                display: none;
            }


            #adm_panel, #adm_flip {
                padding: 5px;
                text-align: center;
                /*background-color: #e5eecc;
                border: solid 1px #c3c3c3;*//
            }

            #adm_panel {
                padding: 50px;
                display: none;
            }

            img {
                border-radius: 50%;
            }
            #rpt_panel, #rpt_flip {
                padding: 5px;
                text-align: center;
                /*background-color: #e5eecc;
                border: solid 1px #c3c3c3;*/
            }

            #rpt_panel {
                padding: 50px;
                display: none;
            }

            #admin_panel, #admin_flip {
                padding: 5px;
                text-align: center;
                /*background-color: #e5eecc;
                border: solid 1px #c3c3c3;*/
            }

            #admin_panel {
                padding: 50px;
                display: none;

            }




            #std_panel, #std_flip {
                padding: 5px;
                text-align: center;
                /*background-color: #e5eecc;
                border: solid 1px #c3c3c3;*/
            }

            #std_panel {
                padding: 50px;
                display: none;
            }




            #myac_panel, #myac_flip {
                padding: 5px;
                text-align: center;
                /*background-color: #e5eecc;
                border: solid 1px #c3c3c3;*/
            }

            #myac_panel {
                padding: 50px;
                display: none;
            }


            #admission_panel, #admission_flip {
                padding: 5px;
                text-align: center;
                /*background-color: #e5eecc;
                border: solid 1px #c3c3c3;*/
            }

            #admission_panel {
                padding: 50px;
                display: none;
            }




        </style>



    </head>
    <body>
    <br>
    <br>
    <br>
    <br>
    <script>
        function GEEKFORGEEKS()
        {
            var name = document.forms["Form"]["pid"];

            if (name.value == "")
            {
                window.alert("Please enter your name.");
                name.focus();
                return false;
            }


            return true;
        }</script>

    <div class="col-sm-8 text-left">
    <form method="post" action="">
    <section id="contact" class="content-section ">
        <div class="contact-section">
            <div class="container-fluid " style="padding-left: 20%;">
                <div class="row">
                    <div class="col-md-8 col-md-offset-1">
                           <br><br><br>
                           <form name="Form" onsubmit="return GEEKFORGEEKS()" method="post">  
                            <div class="form-group">
                                <label style="font-size: 20px;text-align: center;font-weight: bold;margin-left: 30%;">Generate Quotation</b></label>
                            </div><br>
                                    <div class="form-group">
                                        <label style="font-size: 16px">Customer ID</b></label>
                                        <input type="text" class="form-control" name="cid" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label style="font-size: 16px">Customer Name</label>
                                        <input type="text" class="form-control" name="cname" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label style="font-size: 16px">Product ID</label>
                                        <input type="text" class="form-control" name="pid" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label style="font-size: 16px">Product Name</label>
                                        <input type="text" class="form-control" name="pname" placeholder="Enter product name">
                                    </div>

                                    <div class="form-group">
                                        <label style="font-size: 16px">Product Details</label>
                                        <textarea class="form-control" name="pdetails" placeholder="Enter product name"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label style="font-size: 16px">Customer given Price</label>
                                        <input type="text" class="form-control" name="pname" placeholder="Enter product name">
                                    </div>

                                    <div class="form-group">
                                        <label style="font-size: 16px">Admin Price</label>
                                        <input type="text" class="form-control" name="pname" placeholder="Enter product name">
                                    </div>

                                    <div class="form-group">
                                        <label style="font-size: 16px">Customer Profit</label>
                                        <input type="text" class="form-control" name="custpft" placeholder="Enter product name">
                                    </div>

                                    <div class="form-group">
                                        <label style="font-size: 16px">Final Price</label>
                                        <input type="text" class="form-control" name="fprice" placeholder="Enter product name">
                                    </div>

                                    <div class="form-group" align="center">
                                        <input type="submit" class="btnRegister" name="b_upload" style="width:50%" value="Upload Product on marketplace"/>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>




    </div>
    </div>
    </div>
    </form>


    <div>
        <footer class="container-fluid text-center">
            <?php include 'footer.php';?>
        </footer>
    </div>




    </body>


<?php
/**
 * Created by PhpStorm.
 * User: Shree Pc
 * Date: 04/01/2019
 * Time: 12:09 PM
 */