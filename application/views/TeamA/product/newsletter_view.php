<?php
//session_start();
    ?>

<head>

    <title>News Letter</title>
   
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
    <div class="col-sm-8 text-left">
    <form method="post" action="">
    <section id="contact" class="content-section ">
        <div class="contact-section">
            <div class="container-fluid " style="padding-left: 20%;">
                <div class="row">
                    <div class="col-md-8 col-md-offset-1">
                    <br><br><br>
                            <div class="form-group">
                                <label style="font-size: 20px;text-align: center;font-weight: bold;margin-left: 30%;">News Letter</b></label>
                            </div><br>					       
						    <div class="form-group">
                                <label for="exampleInputEmail2">News Title : </label>
                                <input type="text" class="form-control" name="ntitle" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail2">News Description : </label>                            
                            </div>
                            <div class="form-group">
                                 <textarea rows="4" cols="50"></textarea>
                            </div>
                            <div class="form-group">                            
                                <form action="#" method="POST" enctype="multipart/form-data">
                                <label  style="font-size: 16px">Upload Image :  </label>              <input type="file" name="image"/ > 
                                </form><br><br>
                           </div>
							<div class="form-group" align="center">
                                <input type="submit" class="btnRegister" name="b_post" style="width:50%" value="Post"/>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    </form>
</div>
</body>
<div>
<footer class="container-fluid text-center">
        <!--?php include 'footer.php';?-->
    </footer>
</div>    
</html>