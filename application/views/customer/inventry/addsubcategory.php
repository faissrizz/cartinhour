
<div class="content-wrapper">
		<section class="content" style="padding-top:100px;">
		<div class="container">
			<div class="row">
				<?php if($this->session->flashdata('passworderror')): ?>
					<div class="alert dark alert-warning alert-dismissible" id="infoMessage"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button><?php echo $this->session->flashdata('passworderror');?></div>	
					<?php endif; ?>
						<?php if($this->session->flashdata('updatpassword')): ?>
					<div class="alert dark alert-success alert-dismissible" id="infoMessage"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button><?php echo $this->session->flashdata('updatpassword');?></div>	
					<?php endif; ?>
					<?php if(validation_errors()):?>
					<div class="alert dark alert-warning alert-dismissible" id="infoMessage"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button><?php echo validation_errors(); ?></div>	
					<?php  endif;?>
				<form enctype="multipart/form-data" method="post" name="addcategory" id="addcategory"  action="<?php echo base_url('inventory/addsubcategorypost'); ?>" class="well col-md-6 col-md-offset-2" style="background-color:#fff;">
				<div class=""  style="font-size:20px;font-weight:600;border-bottom:1px solid #ddd;margin-bottom:10px;padding-bottom:10px;">Add Subcategory</div>
				
				<div class="form-group">
				<label for="category">Subcategory Name</label>
				<input type="text"  class="form-control" id="categoryname"  name="categoryname"/>
				</div>
				<div class="form-group">
				<label for="category">category Name</label>
				<select class="form-control" name="category_list" id="category_list">
				<option value="">Select</option>
				<?php foreach($category_list as $list){ ?>
				<option value="<?php echo $list['category_id'];?>"><?php echo $list['category_name'];?></option>
				<?php } ?>
				</select>
				</div>
				
				<div class="btn-group-vertical btn-block text-center" role="group">
				<button type="submit" class="btn btn-danger btn-lg">Add</button>
				
				</div>
				</form>
			</div>
		</div>
    
		</section>
 </div>
   
	<script type="text/javascript">

$(document).ready(function() {
    $('#addcategory').bootstrapValidator({
       
        fields: {
            categoryname: {
					validators: {
					notEmpty: {
						message: 'Category Name is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: ' Category Name can only consist of alphanumaric, space and dot'
					}
				}
			}, 
			commission: {
					validators: {
					between: {
                    min: 0,
                    max: 100,
                    message: 'The Commission percentage must be between 0 and 100'
					}
				}
			},
			categoryfile: {
					validators: {
					regexp: {
					regexp: /\.(xlsx|xls)$/i,
					message: 'Uploaded file is not a valid image. Only xl files are allowed'
					}
				}
			}
        }
    });
});
</script>