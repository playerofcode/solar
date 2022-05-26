<div class="page-wrapper">
			<div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Edit Source Code</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard');?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Source Code</li>
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
       				<div class="card-header bg-primary text-white">
       					Edit Source Code
       				</div>
       				<div class="card-body">
       					<?php foreach ($code as $key):?>
          <form action="<?php echo base_url('admin/updatecode');?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="<?php echo set_value('title',$key->title); ?>" placeholder="Enter Blog Title">
            <?php echo form_error('title');?>
          </div>
          <div class="form-group">
            <label>Link</label>
            <input type="text" name="link" class="form-control" value="<?php echo set_value('link',$key->link); ?>" placeholder="Enter Source Link">
            <?php echo form_error('link');?>
          </div>
          <div class="form-group">
            <label>Image</label><br>
            <center><img src="<?php echo base_url($key->image); ?>" alt="" style="height: 100px;width:100px;border:1px dashed orange;border-radius: 10px;margin:5px;box-shadow: 0 5px 10px rgba(0,0,0,0.3);"></center>
            <input type="file" name="image" class="form-control" >
            <?php if(isset($upload_error)){echo $upload_error; } ?>
          </div>
          <div class="form-group">
            <label>Description</label>
            <textarea name="description" id="ckeditor" cols="30" rows="5" class="form-control" placeholder="Enter Source Code Description"><?php echo set_value('description',$key->description); ?></textarea>
            <?php echo form_error('description');?>
          </div>
          <input type="hidden" name="id" value="<?php echo $key->id;?>">
          <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Update Source Code">
          </div>
        </form>
      <?php endforeach;?>
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