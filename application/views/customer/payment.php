<!DOCTYPE html>
<html lang="en">

<style>
.panel-title > a:before {
    float: left !important;
    font-family: FontAwesome;
    content:"\f1db";
    padding-right: 5px;
}

.panel-title > a:hover, 
.panel-title > a:active, 
.panel-title > a:focus  {
    text-decoration:none;
}
</style>

<div class="" style="margin-top:150px;">
	
</div>
<body >
<div class="pad_bod">
		<div class="row">
		<div class="col-md-3" style="position: fixed;">
		<div class="panel panel-primary">
			<div class="panel-heading ">Price details</div>
			<div class="panel-body">
				<div class="pull-left">
					Price (<?php if(count($carttotal_amount['itemcount']) >0){  echo $carttotal_amount['itemcount'].'  '.'items';}else{  echo "item";  }?>)
				</div>
				<div class="pull-right">
					<i class="fa fa-inr" aria-hidden="true"></i><?php echo isset($carttotal_amount['pricetotalvalue'])?$carttotal_amount['pricetotalvalue']:''; ?>
				</div>
				
				<div class="clearfix"></div>
				<div class="mar_t20">
				<div class="pull-left">
					Delivery Charges
				</div>
				<div class="pull-right">
					<i class="fa fa-inr" aria-hidden="true"></i><?php echo isset($carttotal_amount['delivertamount'])?$carttotal_amount['delivertamount']:''; ?>
				</div>
				</div>
				<div class="clearfix"></div>
				<hr>
				<div class="mar_t20">
				<div class="pull-left">
					<b>Amount Payable</b>
				</div>
				<div class="pull-right">
					<i class="fa fa-inr" aria-hidden="true"></i><b>
				<?php 	$totalpayamount=$carttotal_amount['pricetotalvalue'] + $carttotal_amount['delivertamount'];
					echo $totalpayamount;
				?>
				</b>
				</div>
				</div>
				
			</div>
		</div>
		</div>
		
		<div class="col-md-offset-3 col-md-8 col-md-offset-right-1">
		<div class="panel panel-primary">
			<div class="panel-heading ">Payment</div>
			<div class="panel-body">
			<section>
        <div class="wizard">
           
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation">
						 <a href="<?php echo base_url('customer/cart'); ?>" aria-controls="step1" role="tab" title="Step 1">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-shopping-cart"></i>
                            </span>
							
                        </a>
						<p class="text-center"><b>Check Cart</b> </p>
                    </li>  
					<li role="presentation" class="" >
						   <a href="<?php echo base_url('customer/billing'); ?>" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-folder-open"></i>
                            </span>
							
                        </a>
						<p class="text-center"><b>Billing Address</b> </p>
                    </li>

                    <li role="presentation" class="active">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-credit-card"></i>
                            </span>
                        </a>
						<p class="text-center"><b>Payment mode </b></p>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab" title="Step 4">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                        </a>
						<p class="text-center"><b>Thanks for Shopping </b></p>
                    </li>
                </ul>
            </div>

         
       <div class="tab-content">
					<div class="title"><span>Billing Address</span></div>
					 <?php if($this->session->flashdata('paymenterror')): ?>
						<div class="alert dark alert-warning alert-dismissible" id="infoMessage"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button><?php echo $this->session->flashdata('paymenterror');?></div>
			<?php endif; ?>
						<div class="container">
						<div class="row">
						<div class="col-md-8">
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
									 <h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										  HDFC Bank Creadit Card
										</a>
									  </h4>

								</div>
								<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									<div class="panel-body">
									<h4 class="site_col">Complete your payment using</h4>
										<div class="mar_l20 row">
											<div class="radio"><label><input type="radio" name="radio-product" checked="checked"><span> verify with OTP</span></label></div>
											<div class="radio"><label><input type="radio" name="radio-product"><span>verify with Secure Password</span></label></div>
												<div class="clearfix"></div>
											<div class="col-md-2">
												<input class="form-control" type="text" placeholder="CVV">
											</div>
											<div class="col-md-2 ">
												 <button type="submit" class="btn btn-primary">PAY <i class="fa fa-inr" aria-hidden="true"></i>500</button>
											</div>
										</div>	
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTwo">
									 <h4 class="panel-title">
								<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								   Wallet
								</a>
							  </h4>

								</div>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									<div class="panel-body"><p>You'll be redirected to PhonePe page, where you can pay using UPI, credit/debit card or any other VPA.</p>
									<button type="submit " class="btn btn-primary pull-right">CONTINUE</button>
									</div>
									
									<br>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
									 <h4 class="panel-title">
								<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								  Credit / Debit / ATM Card
								</a>
							  </h4>

								</div>
								<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
									<div class="panel-body">
										<form action="<?php echo base_url('payment/debit_credit_post'); ?>" method="post" class="form-horizontal" role="form">
											<fieldset >
											  <legend>Payment</legend>
											  <div class="form-group ">
												<label class="col-sm-3 control-label inpu_pad" for="card-holder-name">Name on Card</label>
												<div class="col-sm-9 inpu_pad">
												  <input type="text" class="form-control" name="card-holder-name" id="card-holder-name" placeholder="Card Holder's Name">
												</div>
											  </div>
											  
											  <div class="form-group">
												<label class="col-sm-3  inpu_pad control-label" for="card-number">Card Number</label>
												<div class="col-sm-9 inpu_pad">
												  <input type="text" class="form-control" name="card-number" id="card-number" placeholder="Debit/Credit Card Number">
												</div>
											  </div>
											  <?php $monthArray = array("01" => "January", "02" => "February", "03" => "March", "04" => "April", "05" => "May", "06" => "June", "07" => "July", "08" => "August","09" => "September", "10" => "October", "11" => "November", "12" => "December",);?> 
											  <div class="form-group">
												<label class="col-sm-3 inpu_pad control-label" for="expiry-month">Expiration Date</label>
												<div class="col-sm-9 inpu_pad">
												  <div class="row">
													<div class="col-xs-3 ">
													  <select class="form-control col-sm-2" name="expiry-month" id="expiry-month">
														<option>Month</option>
														<?php
														foreach ($monthArray as $key=>$month) { ?>
															<option value="<?php echo $key ;?>"><?php echo $month;?></option>														}
														
														<?php }?>
													  </select>
													</div>
													<div class="col-xs-3">
														
													<select class="form-control" name="expiry-year">
													<?php for ($i = 2010; $i <= 2100; $i++) {  ?>
													<option value="<?php echo substr($i, -2); ?>"><?php echo $i; ?></option>
													<?php }  ?>
													</select>
													</div>
												  </div>
												</div>
											  </div>
											  <div class="form-group">
												<label class="col-sm-3 control-label inpu_pad" for="cvv">Card CVV</label>
												<div class="col-sm-3 inpu_pad">
												  <input type="text" class="form-control" name="cvv" id="cvv" placeholder="Security Code">
												</div>
											  </div>
											  <div class="clearfix"></div>
											  <div class="form-group ">
												<div class=" inpu_pad">
												  <button type="submit" class="btn btn-primary pull-right">Pay Now</button>
												</div>
											  </div>
											</fieldset>
										</form>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingFour">
									 <h4 class="panel-title">
								<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								  Net Banking
								</a>
							  </h4>

								</div>
								<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
									<div class="panel-body">
										<h4 class="site_co">Popular Banks</h4>
											<div class="row">
												<div class="col-sm-3">
													<div class="radio">
														<label>
															<input type="radio" name="radio-product" checked="checked"><span><span><img src="<?php echo base_url(); ?>assets/home/images/axis.png" /> </span>Axis Bank</span>
														</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="radio">
														<label>
															<input type="radio" name="radio-product" checked="checked"><span><span><img src="<?php echo base_url(); ?>assets/home/images/sbi.png" /> </span>State Bank of India</span>
														</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="radio">
													<label>
														<input type="radio" name="radio-product" checked="checked"><span><span><img src="<?php echo base_url(); ?>assets/home/images/hdfc.png" /> </span>HDFC Bank</span>
													</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="radio">
														<label>
															<input type="radio" name="radio-product" checked="checked"><span><span><img src="<?php echo base_url(); ?>assets/home/images/icic.png" /> </span> ICICI Bank</span>
														</label>
													</div>
												</div>
											</div>
												<div class="clearfix"></div>
												<div class="row">
												<h4 class="site_col pad_l15">Other Banks</h4>
												<div class=" col-md-5 ">
												<div class="form-group">
												<label for="bank">Bank name</i></label>
													<select type="text" class="form-control " id="bank">
													<option selected>Choose</option>
													<option value="access">Access Bank</option>
													<option value="citibank">Citibank</option>
													<option value="diamond">Diamond Bank</option>
													<option value="ecobank">Ecobank</option>
													<option value="fidelity">Fidelity Bank</option>
													<option value="fcmb">First City Monument Bank (FCMB)</option>
													<option value="fsdh">FSDH Merchant Bank</option>
													<option value="gtb">Guarantee Trust Bank (GTB)</option>
													<option value="heritage">Heritage Bank</option>
													<option value="Keystone">Keystone Bank</option>
													<option value="rand">Rand Merchant Bank</option>
													<option value="skye">Skye Bank</option>
													<option value="stanbic">Stanbic IBTC Bank</option>
													<option value="standard">Standard Chartered Bank</option>
													<option value="sterling">Sterling Bank</option>
													<option value="suntrust">Suntrust Bank</option>
													<option value="union">Union Bank</option>
													<option value="uba">United Bank for Africa (UBA)</option>
													<option value="unity">Unity Bank</option>
													<option value="wema">Wema Bank</option>
													<option value="zenith">Zenith Bank</option>
													</select>
													</div>
												</div>
											</div>
											
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingFive">
									<h4 class="panel-title">
									<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
									  Cash on Delivery
									</a>
									</h4>
								</div>
								<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
									<div class="panel-body">
										<h4 class="site_col"> Order Confirmation</h4>
										<div class="checkbox">
											<label>
												<input type="checkbox" value="">
												
													Please Click here to Confirm your Order 
											</label>
											<br>
											<button type="button" class="btn btn-primary pull-right">Confirm Order</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						</div>
						</div>
						</div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button type="button" class="btn btn-primary next-step">next</button></li>
                        </ul>
                    
    </section>
	
	   </div>
	   </div>
	   
	   </div>
	   </div>
	</div>
	

<script>

	$(document).ready(function() {
    $('#billingaddress').bootstrapValidator({
       
        fields: {
            
             name: {
              validators: {
					notEmpty: {
						message: 'Name is required'
					},
                   regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Name can only consist of alphanumaric, space and dot'
					}
                }
            },
			mobile: {
              validators: {
					 notEmpty: {
						message: 'Mobile Number is required'
					},
                    regexp: {
					regexp:  /^[0-9]{10}$/,
					message:'Mobile Number must be 10 to 14 digits'
					}
                }
            },
			area: {
              validators: {
					notEmpty: {
						message: 'Please select an area'
					}
                }
            },
			address1: {
				validators: {
					notEmpty: {
						message: 'Address1 is required'
					},
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message: 'Address1 wont allow <> [] = % '
					}
				
				}
			},
			address2: {
				validators: {
					
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message: 'Address2 wont allow <> [] = % '
					}
				
				}
			}
			
			
        }
    });
});
</script>

 