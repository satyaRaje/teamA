<div class="page-wrapper">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
           <div class="col-lg-3"></div>
           <div class="col-lg-6">
            <form method="post" action="<?php echo base_url().'index.php/TeamA/product/ci_upload_product/upload_admin_product_save_admin'; ?>">
                            <div class="form-group">
                                <label style="font-size: 20px;text-align: center;font-weight: bold;margin-left: 30%;">Upload Products</b></label>
                            </div>

                            <div class="form-group">
                                <label style="font-size: 16px">Product Name</label>
                                <input type="text" class="form-control" name="pname" placeholder="Enter product name">
                            </div>

                            <div class="form-group">
                                <label style="font-size: 16px">Catageory</label>
                                <select class="form-control" name="catageory">
                                    <option value="Printing">Printing</option>
                                </select>
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

                            <div class="form-group" align="center">
                                <input type="submit" class="btn btn-primary"  style="width:50%" value="Upload"/>
                            </div>

            </form>
           </div>
            </div>
        </div>
    </div>
</div>




<!--
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
-->