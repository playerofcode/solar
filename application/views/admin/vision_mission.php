<div class="page-wrapper">
			<div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Vision & Mission</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard');?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Vision & Mission</li>
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
       					Update Vision & Mission
       				</div>
       				<div class="card-body">
       					<?php foreach ($content as $key): ?>
       					<form action="<?php echo base_url('admin/updateVisionMission/'.$key->id);?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Content</label>
						<textarea name="content" id="ckeditor"  cols="30" rows="5" class="form-control" placeholder="Blog Description Here...."><?php echo set_value('content',$key->content); ?></textarea>
						<?php echo form_error('content');?>
					</div>
					<div class="form-group">
						<input type="submit" value="Update" class="btn btn-success">
					</div>
				</form>
				<?php endforeach ?>
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