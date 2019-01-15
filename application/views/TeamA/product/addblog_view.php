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

  <div class="col-sm-8 text-left">
  <form method="post" action="">
    <section id="contact" class="content-section ">
        <div class="contact-section">
            <div class="container-fluid " style="padding-left: 20%;">
                <div class="row">
                    <div class="col-md-8 col-md-offset-1">
                     <br><br><br>
                      <div class="form-group">
                         <label style="font-size: 20px;text-align: center;font-weight: bold;margin-left: 30%;">Add Blog</b></label>
                      </div>
					            <br>
						               <div class="form-group">
                                <label for="exampleInputEmail2">Topic Name</label>
                                <input type="text" class="form-control" name="tname" placeholder="">
                            </div>
							
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


<div>
<footer class="container-fluid text-center">
        <!--?php include 'footer.php';?-->
    </footer>
</div>



    
<!--<?php
	if(isset($_POST['b_upload'])){

	
	@$pname=$_POST['pname'];	
if(isset($_FILES['image'])){
   	  $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==false){
         move_uploaded_file($file_temp,"proImage/".$pname.".jpg");
         echo "Success";
      }else{
         print_r($errors);
      }
   }
	
	
	$query= "INSERT INTO `admin_product_table`(`Admin_Name`, `Product_Name`, `Product_Price`, `Product_Height`, `Product_Width`, `Product_Volume`, `Product_Description`, `Product_Image`, `Admin_id`) VALUES ('".$_POST['aname']."','".$_POST['pname']."','".$_POST['pprice']."','".$_POST['pheight']."','".$_POST['pheight']."','".$_POST['pvolume']."','".$_POST['pdesc']."','".$_POST['image']."','".$_POST['aid']."')";
    $conn = mysqli_connect("localhost","root", "","add_product_db");
	if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
	
    $check = mysqli_query($conn,$query);
	
    if ($check) {
      echo "New record created successfully";
	echo '<meta http-equiv="refresh" content="0">';
	  
    } 

    else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
		
    mysqli_close($conn);

}
?>-->
</body>
</html>