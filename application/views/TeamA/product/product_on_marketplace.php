<div class="page-wrapper">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <?php foreach ($data as $d ){?>
                  <br>
                <div class="col-lg-12" style="margin-top:15px;">

                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <p><?php echo $d->pname;?> </p>
                        <?php if($d->flag==11){ ?>    
                            <form method="post"action='<?php echo base_url()."index.php/TeamA/product/ci_upload_product/upload_product_on_marketplace";?>' >
                                <input type="hidden" name="pid" value='<?php echo $d->pid;?>'/>
                                <button type="submit" class="btn btn-primary pull-right" > MP</buttom>
                            </form>
                            <?php } ?>
                            
                            <?php if($d->flag==18){ ?>    
                            <form method="post"action='<?php echo base_url()."index.php/TeamA/product/ci_upload_product/remove_product_on_marketplace";?>' >
                                <input type="hidden" name="pid" value='<?php echo $d->pid;?>'/>
                                <button type="submit" class="btn btn-danger pull-right" > RM</buttom>
                            </form>
                            <?php } ?>
                        </div>
                        <div class="panel-body">
                            <form class="col-lg-2" method="post" enctype="multipart/form-data" action='<?php echo base_url()."index.php/TeamA/product/ci_upload_product/upload_front_view";?>'>
                                <input type="hidden" name="pid" value='<?php echo $d->pid;?>'/>
                                <input type="hidden" name="pname" value='<?php echo $d->pname;?>'/>
                                <label class="label label-warning form-control">Front View</label>
                            <input type="file" name="userfile" class="form-control btn btn-file" required>
                                <button type="submit" class="form-control btn btn-primary">Upload</button>
                            </form>

                            <form class="col-lg-2" method="post" enctype="multipart/form-data" action='<?php echo base_url()."index.php/TeamA/product/ci_upload_product/upload_top_view";?>'>
                                <input type="hidden" name="pid" value='<?php echo $d->pid;?>'/>
                                <input type="hidden" name="pname" value='<?php echo $d->pname;?>'>
                                <label class="label label-warning form-control">Top View</label>
                            <input type="file" name="userfile"  class="form-control btn btn-file" required>
                                <button type="submit" class="form-control btn btn-primary">Upload</button>
                            </form>

                            <form class="col-lg-2" method="post" enctype="multipart/form-data" action='<?php echo base_url()."index.php/TeamA/product/ci_upload_product/upload_bottom_view";?>'>
                                <input type="hidden" name="pid" value='<?php echo $d->pid;?>'/>
                                <input type="hidden" name="pname" value='<?php echo $d->pname;?>'>
                                <label class="label label-warning form-control">Bottom View</label>
                            <input type="file" name="userfile" class="form-control btn btn-file" required>
                                <button type="submit" class="form-control btn btn-primary">Upload</button>
                            </form >
                            <form class="col-lg-2" method="post" enctype="multipart/form-data" action='<?php echo base_url()."index.php/TeamA/product/ci_upload_product/upload_right_view";?>'>
                                <input type="hidden" name="pid" value='<?php echo $d->pid;?>'/>
                                <input type="hidden" name="pname" value='<?php echo $d->pname;?>' >
                                <label class="label label-warning form-control">Right View</label>
                            <input type="file" name="userfile" class="form-control btn btn-file" required>
                                <button type="submit" class="form-control btn btn-primary">Upload</button>
                            </form>

                            <form class="col-lg-2" method="post" enctype="multipart/form-data" action='<?php echo base_url()."index.php/TeamA/product/ci_upload_product/upload_left_view";?>'>
                                <input type="hidden" name="pid" value='<?php echo $d->pid;?>'/>
                                <input type="hidden" name="pname" value='<?php echo $d->pname;?>'>
                                <label class="label label-warning form-control">Left View</label>
                                <input type="file" name="userfile" class="form-control btn btn-file" required>
                                <button type="submit" class="form-control btn btn-primary">Upload</button>
                            </form>

                            <form class="col-lg-2" method="post" enctype="multipart/form-data" action='<?php echo base_url()."index.php/TeamA/product/ci_upload_product/upload_isometric_view";?>'>
                                <input type="hidden" name="pid" value='<?php echo $d->pid;?>'/>
                                <input type="hidden" name="pname" value='<?php echo $d->pname;?>'>
                                <label class="label label-warning form-control">Isometric View</label>
                                <input type="file" name="userfile" class="form-control btn btn-file" required>
                                <button type="submit" class="form-control btn btn-primary">Upload</button>
                            </form>

                        </div>
                        <div class="panel-footer">
                            <div class="col-lg-2">
                                <?php
                                if($d->front_View!=null){?>
                                <img src='<?php echo base_url()."uploads/admin_product/".$d->pname."/".$d->front_View; ?>' height="100px" width="100px" />
                                        <?php } ?>
                            </div>

                            <div class="col-lg-2">
                                <?php
                                if($d->top_view!=null){?>
                                    <img src='<?php echo base_url()."uploads/admin_product/".$d->pname."/".$d->top_view; ?>' height="100px" width="100px" />
                                <?php } ?>
                            </div>

                            <div class="col-lg-2">
                                <?php
                                if($d->bottom_view!=null){?>
                                    <img src='<?php echo base_url()."uploads/admin_product/".$d->pname."/".$d->bottom_view; ?>' height="100px" width="100px" />
                                <?php } ?>
                            </div>

                            <div class="col-lg-2">
                                <?php
                                if($d->right_view!=null){?>
                                    <img src='<?php echo base_url()."uploads/admin_product/".$d->pname."/".$d->right_view; ?>' height="100px" width="100px" />
                                <?php } ?>
                            </div>

                            <div class="col-lg-2">
                                <?php
                                if($d->left_view!=null){?>
                                    <img src='<?php echo base_url()."uploads/admin_product/".$d->pname."/".$d->left_view; ?>' height="100px" width="100px" />
                                <?php } ?>
                            </div>

                            <div class="col-lg-2">
                                <?php
                                if($d->isomatric_view!=null){?>
                                    <img src='<?php echo base_url()."uploads/admin_product/".$d->pname."/".$d->isomatric_view; ?>' height="100px" width="100px" />
                                <?php } ?>
                            </div>


                        </div>
                    </div>


                </div>
                <br>
                <?php } ?>
        </div>
              
    </div>
</div>