<?php
session_start();
    ?>

<head>
    <title>Upload Product</title>


	
	
	</head>
<body>
<br>
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
}
</script>
   
    <div class="col-sm-8 text-left">
	<form method="post" action="<?php echo site_url('Upload/database_fun'); ?>">
    <section id="contact" class="content-section ">
        <div class="contact-section">
            <div class="container-fluid " style="padding-left: 20%;">
                <div class="row">
                    <div class="col-md-8 col-md-offset-1">
					       <br><br><br>
                            <div class="form-group">
                                <label style="font-size: 20px;text-align: center;font-weight: bold;margin-left: 30%;">Upload Products</b></label>
                            </div><br>

						    <div class="form-group">
                                <label style="font-size: 16px">Product ID</b></label>
                                <input type="text" class="form-control" name="pid" placeholder="">
                            </div>
                             <div class="form-group">
                                <label style="font-size: 16px">Product Name</label>
                                <input type="text" class="form-control" name="pname" placeholder="Enter product name">
                            </div>
			
							<div class="form-group">
                                <label  style="font-size: 16px">Create ISQ number</label>
                                <input type="text" class="form-control" name="isq" placeholder="Enter SQA number">
                            </div>
							                           
                            <div class="form-group">
                                <label  style="font-size: 16px">Product MRP</label>
                                <input type="text" class="form-control" name="pmrp" placeholder="Enter product price">
                            </div>
							
                           
							<div class="form-group">
                                <label  style="font-size: 16px">Product Height</label>
                                <input text-size="16px" type="text" class="form-control" name="pheight" placeholder="Enter product height">
                            </div>
							
							<div class="form-group">
                                <label  style="font-size: 16px">Product Width</label>
                                <input type="text" class="form-control" name="pwidth" placeholder="Enter Product Width">
                            </div>
							
							<div class="form-group">
                                <label  style="font-size: 16px"> Product Volume</label>
                                <input type="text" class="form-control" name="pvolume" placeholder="Enter Product Volume">
                            </div>

                            <div class="form-group">
                                <label  style="font-size: 16px"> Product Color</label>
                                <input type="text" class="form-control" name="pcolor" placeholder="Enter Product Color">
                            </div>


                            <div class="form-group">
                                <label  style="font-size: 16px"> Product Diameter</label>
                                <input type="text" class="form-control" name="pdiameter" placeholder="Enter product Diameter">
                            </div>


                            <div class="form-group ">
                                <label  style="font-size: 16px">Description of Product</label>
                                <textarea  class="form-control" name="pdesc" placeholder="Product Description"></textarea>
                            </div>

                            <div class="form-group">
                                    <form action="#" method="POST" enctype="multipart/form-data">
                                <label  style="font-size: 16px">Upload STL file</label> <input type="file" name="imagestl" > </form>
                           </div>


                            <div class="form-group">
                                    <form action="#" method="POST" enctype="multipart/form-data">
                                <label  style="font-size: 16px">Upload Front View</label> <input type="file" name="imagefront" > </form>
                           </div>

                            <div class="form-group">
                                    <form action="#" method="POST" enctype="multipart/form-data">
                                <label  style="font-size: 16px">Upload Top View</label> <input type="file" name="imagetop" > </form>
                           </div>

                            <div class="form-group">
                                    <form action="#" method="POST" enctype0.00="multipart/form-data">
                                <label  style="font-size: 16px">Upload Bottom View</label> <input type="file" name="imagebottom" > </form>
                           </div>

                            <div class="form-group">
                                    <form action="#" method="POST" enctype="multipart/form-data">
                                <label  style="font-size: 16px">Upload Right-Side View</label> <input type="file" name="imageright" > </form>
                           </div>

                            <div class="form-group">
                                <form action="#" method="POST" enctype="multipart/form-data">
                                <label  style="font-size: 16px">Upload Left-Side View</label> <input type="file" name="imageleft" ></form>
                           </div>

                            <div class="form-group">
                                <form action="#" method="POST" enctype="multipart/form-data">
                                <label  style="font-size: 16px">Upload Isometric View</label>
                                <input type="file" name="imageisometric"/ > </form>
                           </div>

							<div class="form-group" align="center">
                                <input type="submit" class="btnRegister" name="b_upload" style="width:50%" value="Upload Product on marketplace"/>
                                </div>
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
   
   
