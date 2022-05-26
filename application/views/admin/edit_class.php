<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center"> 
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard');?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Update Class</li>
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
                    <?php foreach ($class_list as $key): ?>
                            <form class="form-horizontal"  action="<?php echo base_url('admin/updateClass/'.$key->id);?>" method="post" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="form-group">
                <input type="text" name="class_name" class="form-control" placeholder="Class Name" value="<?php echo $key->class_name; ?>" required>
            </div>
            <div class="form-group">
                <input type="number" name="fee" class="form-control" placeholder="Fee" value="<?php echo $key->fee; ?>" required>
            </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Update Class</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
           