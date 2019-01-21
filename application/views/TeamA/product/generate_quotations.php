<html>
<head>
	<title>abc</title>
    <link href="<?php echo base_url(); ?>style/formwizard/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>style/formwizard/style.css" rel="stylesheet"/>
</head>
<body>
	<script src="<?php echo base_url();?>style/formwizard/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>style/formwizard/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>style/formwizard/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>style/formwizard/script.js"></script>  
	<div class="page-wrapper">
		<div id="page-wrapper"><br>
			<h1 align="center">Generate Quotation</h1>
			<div class="container">
            <form action="" method="post">
            <div class="wizards">
                <div class="progressbar">
                    <div class="progress-line" data-now-value="12.11" data-number-of-steps="5" style="width: 12.11%;"></div> <!-- 19.66% -->
                </div>
                <div class="form-wizard active">
                    <div class="wizard-icon"><i class="fa fa-file-text-o"></i></div>
                    <p>Billing to</p>
                </div>
                <div class="form-wizard">
                    <div class="wizard-icon"><i class="fa fa-user"></i></div>
                    <p>Shipping to</p>
                </div>
                <div class="form-wizard">
                    <div class="wizard-icon"><i class="fa fa-key"></i></div>
                    <p>Mode of Payment</p>
                </div>
                <div class="form-wizard">
                    <div class="wizard-icon"><i class="fa fa-globe"></i></div>
                    <p>Services</p>
                </div>
                <div class="form-wizard">
                    <div class="wizard-icon"><i class="fa fa-check-circle"></i></div>
                    <p>Finish</p>
                </div>
            </div>
            <fieldset><br><br>
                <div class="form-group">
                    <label style="font-size: 16px">Customer Name :</b></label>
                    <input type="text" class="form-control" name="pid" placeholder="">
                </div>
                <div class="form-group">
                    <label style="font-size: 16px">Att. to</b></label>
                    <input type="text" class="form-control" name="pid" placeholder="">
                </div>
                <div class="form-group">
                    <label style="font-size: 16px">State</b></label>
                    <input type="text" class="form-control" name="pid" placeholder="">
                </div>
                <div class="form-group">
                    <label style="font-size: 16px">Country</b></label>
                    <input type="text" class="form-control" name="pid" placeholder="">
                </div>
                <div class="wizard-buttons">
                    <button type="button" class="btn btn-next">Next</button>
                </div>
            </fieldset>
            <fieldset><br><br>
                <h4>Input shipping to data</h4>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder=""/>
                </div>
                <div class="form-group">
                    <label>Att. to</label>
                    <input type="email" name="email" class="form-control" placeholder=""/>
                </div>
                <div class="form-group">
                    <label>State</label>
                    <input type="tel" name="phone" class="form-control" placeholder=""/>
                </div>
                <div class="form-group">
                    <label>Country</label>
                    <input type="tel" name="country" class="form-control" placeholder=""/>
                </div>
                <div class="wizard-buttons">
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="button" class="btn btn-next">Next</button>
                </div>
            </fieldset>
            <fieldset><br><br>
                <h4>Input Mode of Payment</h4>
                <div class="form-group">
                    <label>Quotation No.</label>
                    <input type="text" name="username" class="form-control" placeholder=""/>
                </div>
                <div class="form-group">
                    <label>Quotation Validity</label>
                    <input type="text" name="username" class="form-control" placeholder=""/>
                </div>
                <div class="form-group">
                    <label>Despatch Through</label>
                    <input type="text" name="username" class="form-control" placeholder=""/>
                </div>
                <div class="form-group">
                    <label>Destination</label>
                    <input type="text" name="username" class="form-control" placeholder=""/>
                </div>
                <div class="wizard-buttons">
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="button" class="btn btn-next">Next</button>
                </div>
            </fieldset>
            <fieldset><br><br>
                <h4>Input Services</h4>
                <div class="form-group">
                    <label>Description of Services</label>
                    <input type="text" name="title" class="form-control" placeholder="Judul website"/>
                </div>
                <div class="form-group">
                    <label>HSN/SAC Code</label>
                    <textarea name="description" class="form-control" placeholder="Deskripsi website"></textarea>
                </div>
                <div class="form-group">
                    <label>Quantity</label>
                    <input type="text" name="sites" class="form-control" placeholder="Alamat website"/>
                </div>
                <div class="form-group">
                    <label>Unit Price</label>
                    <input type="text" name="category" class="form-control" placeholder="Category website"/>
                </div>
                <div class="form-group">
                    <label>GST Percentage</label>
                    <input type="text" name="category" class="form-control" placeholder="Category website"/>
                </div>
                <div class="form-group">
                    <label>GST in Rupees</label>
                    <input type="text" name="category" class="form-control" placeholder="Category website"/>
                </div>
                <div class="form-group">
                    <label>Amount</label>
                    <input type="text" name="category" class="form-control" placeholder="Category website"/>
                </div>
                <div class="wizard-buttons">
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="button" class="btn btn-next">Next</button>
                </div>
            </fieldset>
            <fieldset><br><br>
                <div class="jumbotron text-center">
                <h1>Please click submit button to save your data</h1>
                </div>
                <div class="wizard-buttons">
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="submit" name="save" class="btn btn-primary btn-submit">Submit</button>
                </div>
            </fieldset>
        </form>
    </div>
		</div>
	</div>
</body>
</html>