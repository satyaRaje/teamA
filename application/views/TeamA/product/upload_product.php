 <div class="page-wrapper">
     <div id="page-wrapper">
         <div class="row">
             <div class="col-lg-12">
                 <div class="col-lg-6">
                       <h3>Upload Product - <?php echo $this->session->dir_url;?></h3>
                       <form method="post" action="<?php echo base_url()."index.php/TeamA/product/ci_upload_product/upload_stl_file"?>" enctype="multipart/form-data">
                           <div class="form-group">
                               <label for="exampleInputEmail1">Product Name</label>
                               <input type="text" class="form-control" name="pname"id="email_address" aria-describedby="emailHelp" placeholder="Enter Product Name">
                               <small id="emailHelp" class="form-text text-muted">Product Name Must Be Unique.</small>
                           </div>

                           <div class="form-group">
                               <label for="exampleInputEmail1">Product File</label>
                               <input type="file" class="form-control" name="userfile" id="email_address" aria-describedby="emailHelp">
                               <small id="emailHelp" class="form-text text-muted">Allowed File Type are STL,ZIP.</small>
                           </div>

                           <div class="form-group pull-right">
                               <input type="submit" class="btn btn-primary" id="product_send" value="Upload">
                           </div>

                       </form>

                 </div>

             </div>

             <div class="col-lg-12">

                     <div class="table-responsive">
                         <table class="table">
                             <thead>
                             <tr>
                                 <th>Product Id</th>
                                 <th>Product Name</th>
                                 <th>File Name</th>
                                 <th></th>
                             </tr>
                             </thead>
                             <tbody>

                             <?php foreach ($data as $d ){?>
                            <form method="post" action='<?php echo base_url()."index.php/TeamA/product/ci_upload_product/remove_stl_file";?>'>
                                 <tr>
                                     <input type="hidden" name="product_id" value='<?php echo $d->pid;?>'>
                                     <td><?php
                                         echo md5($d->pid);
                                         ?></td>
                                     </td>
                                     <td><?php echo $d->pname;?></td>
                                     <td><?php echo $d->file_url;?></td>
                                     <td><button type="submit" class="bnt btn-primary">delete</button></td>

                                 </tr>
                            </form>
                             <?php } ?>



                             </tbody>
                         </table>
                     </div>

                 </div>


         </div>
     </div>
 </div>

 <style>



 </style>