        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">key List</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Code List</li>
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
                                <h5 class="card-title">Code List</h5>
                                 <?php if($responce = $this->session->flashdata('msg')): ?>
                     <div class="alert alert-warning"><?php echo $responce;?></div>
            <?php endif;?>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr class="bg-success text-white">
                                                <th>S.No</th>
                                                <th>Image</th>
                                                <th>Title</th>
                                                <th>Code</th>
                                                <th>Description</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=1;foreach($code as $key):?>
                                           <tr>
                                           	<td><?php echo $i;?></td>
                                                <td><img src="<?php echo base_url().$key->image;?>" style="height:50px;width:50px;"/></td>
                                                <td><?php echo $key->title?></td>
                                                <td><?php echo $key->link?></td>
                                                <td><?php echo $key->description?></td>  
                                                <td><a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/editcode/');?><?php echo $key->id; ?>">Edit</a></td>
                                                <td><a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure want to delete?');"href="<?php echo base_url('admin/deletecode/');?><?php echo $key->id; ?>">Delete</a></td>
                                           </tr>
                                           <?php $i++;endforeach;?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
           