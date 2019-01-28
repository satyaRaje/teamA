<?php
//session_start();
    ?>

<head>

    <title>Add Blog</title>
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
		table {
         font-family: arial, sans-serif;
         border-collapse: collapse;
         width: 100%;
        }

        td, th { 
         border: 1px solid #dddddd;
         text-align: left;
         padding: 8px;
        }

         tr:nth-child(even) {
        background-color: #dddddd;
         }
    </style>
	</head>
    <!--?php include'admin_header.php'?-->
<body>
  <body>
      <script src="<?php echo base_url();?>style/formwizard/js/jquery.min.js"></script>
      <script src="<?php echo base_url();?>style/formwizard/js/popper.min.js"></script>
      <script src="<?php echo base_url();?>style/formwizard/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url();?>style/formwizard/script.js"></script>  
      <div class="page-wrapper">
        <div id="page-wrapper"><br>
          <h1 align="center">Add Blog</h1>
           <form method="post" action="">
              <section id="contact" class="content-section ">
                <div class="contact-section">
                    <div class="container-fluid " style="padding-left: 20%;">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-1">
                              <br>
  						              	<div class="form-group">
                                  <label for="exampleInputEmail2">Written By</label>
                                  <input type="text" class="form-control" name="Written" placeholder="">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail2">Blog</label>
                              </div>

                               <div class="form-group">
                               <textarea rows="4" cols="50"></textarea> </div>
                               <div>
                               <input type="submit" class="btnAddblog" style="width:50%" value="Add Blog"/>
                               </div><br>
                               <div>
                               <input type="submit" class="btnAddblog" style="width:50%" value="Delete Blog"/>
                               </div><br>  
                               <div>                       
                               <input type="submit" class="btnAddblog" style="width:50%" value="Update Blog"/>
                               <br>
                               </div>
                               <!--table code-->
                               <br>
                               <table>
                                <tr>
                                    <th>Customer Id</th>
                                    <th>Customer Name</th>
                                    <th>Topic Name</th>
                                    <th>Date</th>
                                    <th>View BLog</th>
                                </tr>
                                <!--customer id-->
                                 <tr>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                 </tr>
                              <!--customer name-->
                                  <tr>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                 </tr>
                                
                              <!--topic name-->
                                  <tr>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                 </tr>
                              <!--date-->
                                  <tr>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                 </tr>
   
                              <!--view blog-->
                                  <tr>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                 </tr>
                             </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
	       </form>
      </div>
    </div>
</body>
</html>