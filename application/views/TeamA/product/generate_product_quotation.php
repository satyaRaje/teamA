<div class="page-wrapper">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-6">

                 <form action='<?php echo base_url()."index.php/TeamA/product/ci_upload_product/update_company_quotation"?>' method="post">
                    <div class="form-group">
                        <label>User Id</label>
                        <input class="form-control" id="pname" name="pname" value='<?php echo $_POST['uploaded_by'];?>' readonly>
                    </div>


                    <div class="form-group">
                         <label>Product Id</label>
                             <input class="form-control" id="pid" name="pid" value='<?php echo $_POST['product_id'];?>' readonly>
                     </div>

                     <div class="form-group">
                         <label>Product Name</label>
                         <input class="form-control" id="pname" name="pname" value='<?php echo $_POST['product_name'];?>' readonly>
                     </div>

                     <div class="form-group">
                         <label>Company Price</label>
                         <input class="form-control" id="price" name="price" value="">
                     </div>


                     <div class="form-group">
                         <button type="submit" class="btn btn-primary pull-right" >Quote</button>
                     </div>
                 </form>

                </div>
                <div class="col-lg-3">
                </div>

            </div>
                <div class="col-lg-12">

                </div>

            </div>


        </div>
    </div>


<style>



</style>