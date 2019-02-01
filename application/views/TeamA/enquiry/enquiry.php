<?php //include 'header.php';?>
<div id="page-wrapper">
         <div class="row">
             <div class="col-lg-12">
                 
                        <table id="example" class="table">
                            <tr>
                                <th>Client Name</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>info</th>
                                <th>Enquiry</th>
                                <th></th>
                                <th></th>
                        
                            </tr>
                                                     <?php foreach ($data as $d ){?>
                                                    
                                                         <tr>
                                                             <td><?php echo $d->name;?></td>
                                                             <td><?php echo $d->mobile;?></td>
                                                             <td><?php echo $d->email;?></td>
                                                             <td><?php echo $d->info;?></td>
                                                             <td><i class="fa fa-envelope fa-fw"  style='font-size:14px'>Email</i></td>
                                                             <td><i class='fa fa-mobile fa-fw'  style='font-size:20px'>Text</i></td>
                                                             <td><i class='fa fa-mobile fa-fw'  style='font-size:20px'>call</i></td>
                        
                                                         </tr>
                                                    
                                                     <?php } ?>
                        </table>
                  </div>
                  </div>
                  </div>