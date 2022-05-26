<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center"> 
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard');?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Update Team</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <?php if($this->session->flashdata('msg')): ?>
                     <div class="alert alert-success"><?php echo $this->session->flashdata('msg');?></div>
                    <?php endif;?>
                    <?php foreach ($team as $key):?>
                            <form class="form-horizontal"  action="<?php echo base_url('admin/updateTeam/'.$key->id);?>" method="post" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-3 ">Name</label>
                                        <input type="text" name="name" class="form-control col-sm-9" value="<?php echo set_value('name',$key->name); ?>" placeholder="Name Here">
                                        <?php echo form_error('name');?>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 ">Designation</label>
                                        <input type="text" name="designation" class="form-control col-sm-9" value="<?php echo set_value('designation',$key->designation); ?>" placeholder="Designation Here">
                                        <?php echo form_error('designation');?>
                                    </div>
                                    <center>
                                        <?php if(!empty($key->image)): ?>
                                            <img src="<?php echo base_url($key->image);?>" style="height: 100px;width:120px;border-radius:10px;border:1px dashed orange;box-shadow:0 5px 10px rgba(0,0,0,0.4);margin: 10px;">
                                        <?php endif; ?>
                                    </center>
                                    <div class="form-group row">
                                        <label class="col-sm-3  control-label col-form-label">Image</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="image" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Update Team</button>
                                    </div>
                                </div>
                            </form>
                        <?php endforeach?>
                        </div>
                    </div>
                </div>
            </div>
           