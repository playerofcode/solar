        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Affiliate Link List</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Affiliate Link List</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                       
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Affiliate Link List</h5>
                                 <?php if($responce = $this->session->flashdata('msg')): ?>
                     <div class="alert alert-warning"><?php echo $responce;?></div>
            <?php endif;?>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr class="bg-success text-white">
                                                <th>Image</th>
                                                <th>Affiliate Name</th>
                                                <th>Affiliate Link</th>
                                                <th>Description</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($affiliate as $key):?>
                                           <tr>
                                                <td><img src="<?php echo base_url().$key->image;?>" style="height:50px;width:50px;"/></td>
                                                <td><?php echo $key->name?></td>
                                                <td><?php echo $key->description?></td>
                                                <td><a href="<?php echo $key->link?>" target="_blank" class="btn btn-warning btn-sm text-dark">Open Link</a></td>
                                                  
                                                <td><a href="<?php echo base_url('admin/editAffiliateLink/');?><?php echo $key->id; ?>" class="btn btn-sm btn-primary">Edit</a></td>
                                                <td><a onclick="return confirm('Are you sure want to delete?');"href="<?php echo base_url('admin/deleteAffiliateLink/');?><?php echo $key->id; ?>" class="btn btn-danger btn-sm">Delete</a></td>
                                           </tr>
                                           <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
           