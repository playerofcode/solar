<div class="page-wrapper">
			<div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Update Affliate Link</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard');?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Affliate Link</li>
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
       					Update Affliate Link
       				</div>
       				<div class="card-body">
       					<?php foreach ($affiliate as $key): ?>
       					<form action="<?php echo base_url('admin/updateAffiliateLink/'.$key->id);?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Affiliate Name</label>
						<input type="text" name="name" class="form-control" value="<?php echo set_value('name',$key->name); ?>" placeholder="Affliate Name">
						<?php echo form_error('name');?>
					</div>
					<div class="form-group">
						 <center><img src="<?php echo base_url($key->image); ?>" alt="" style="height: 100px;width:100px;border:1px dashed orange;border-radius: 10px;margin:5px;box-shadow: 0 5px 10px rgba(0,0,0,0.3);"></center>
						<label>Image</label>
						<input type="file" name="image" class="form-control" >
						<?php if(isset($upload_error)){echo $upload_error; } ?>
					</div>
					<div class="form-group">
						<label>Affiliate Link</label>
						<input type="text" name="link" class="form-control" value="<?php echo set_value('link',$key->link); ?>" placeholder="Affliate Link">
						<?php echo form_error('link');?>
					</div>
					<div class="form-group">
						<label>Description</label>
						<textarea name="description" class="form-control" placeholder="About Affiliate Type...."><?php echo set_value('description',$key->description); ?></textarea>
						<?php echo form_error('description');?>
					</div>
					<div class="form-group">
						<input type="submit" name="" class="btn btn-success" value="Update Affiliate Link">
					</div>
				</form>
			<?php endforeach; ?>
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