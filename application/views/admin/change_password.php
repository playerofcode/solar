<div class="page-wrapper">
			<div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Change Password</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard');?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Change Password</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
       		</div>
       		<div class="container-fluid">
       			<div class="row wizard-content">
       				<div class="col-sm-12">
       					 <?php if($responce = $this->session->flashdata('msg')): ?>
                     <div class="alert alert-warning"><?php echo $responce;?></div>
            <?php endif;?>
       			<div class="card ">
       				<div class="card-header bg-success text-white">
       				 Change Password
       				</div>
       				<div class="card-body">
       					<form action="<?php echo base_url('admin/updatePassword');?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Old Password</label>
						<input type="password" name="old_password" class="form-control" value="<?php echo set_value('old_password'); ?>" placeholder="Enter Old Password">
						<?php echo form_error('old_password');?>
					</div>
					<div class="form-group">
						<label>Old Password</label>
						<input type="password" name="new_password" class="form-control" value="<?php echo set_value('new_password'); ?>" placeholder="Create New Password">
						<?php echo form_error('new_password');?>
					</div>
					<div class="form-group">
						<label>Old Password</label>
						<input type="password" name="confirm_password" class="form-control" value="<?php echo set_value('confirm_password'); ?>" placeholder="Confirm New Password">
						<?php echo form_error('confirm_password');?>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-success" value="Change Password">
					</div>
				</form>
       				</div>
       			</div>
       			</div>
       		</div>
       		</div>
</div>
<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
     <script>
         CKEDITOR.replace( 'ckeditor' );
    </script>