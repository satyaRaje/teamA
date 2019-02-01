<div class="page-wrapper">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-6">

                </div>

            </div>
             <h1>Quotation </h1>
            <div class="col-lg-12">

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Product Id</th>
                            <th>Product Name</th>
                            <th>File Name</th>
                            <th>download</th>
                            <th>Quote</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php foreach ($data as $d ){?>
                            <form method="post" action='<?php echo base_url()."index.php/TeamA/product/ci_upload_product/generate_quotation";?>'>
                                <tr>
                                    <input type="hidden" name="product_id" value='<?php echo $d->pid;?>'>
                                    <input type="hidden" name="product_name" value='<?php echo $d->pname;?>'>
                                    <input type="hidden" name="uploaded_by" value='<?php echo $d->uploaded_by;?>'>
                                    <td><?php
                                        echo md5($d->pid);
                                        ?></td>
                                    </td>
                                    <td><?php echo $d->pname;?></td>
                                    <td><?php echo $d->file_url;?></td>
                                    <td><button type="button" class="bnt btn-primary">download</button></td>
                                    <td><button type="submit" class="bnt btn-primary">Quote</button></td>

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