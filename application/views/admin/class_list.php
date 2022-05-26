<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('home/dashboard');?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Classes List</li>
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
                        	<div class="card-header">
                        	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">+Add Class</button>
                        	</div>
                            <div class="card-body">
                                <?php if($this->session->flashdata('msg')): ?>
                     <div class="alert alert-success"><?php echo $this->session->flashdata('msg');?></div>
                    <?php endif;?>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Class Name</th>
                                                <th>Fee</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $i=1;
                                            foreach ($class_list as $key): ?>
                                              <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $key->class_name; ?></td>
                                                <td><?php echo $key->fee; ?></td>
                                                <td><a href="<?php echo base_url('admin/editClass/'.$key->id);?>" class="btn btn-sm btn-primary">Edit</a></td>
                                                 <td><a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure want to delete?');"href="<?php echo base_url('admin/deleteClass/');?><?php echo $key->id; ?>">Delete</a></td>
                                            <?php $i++;endforeach ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Class</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('admin/addClass');?>" method="POST">
        	<div class="form-group">
        		<input type="text" name="class_name" class="form-control" placeholder="Class Name">
        	</div>
        	<div class="form-group">
        		<input type="number" name="fee" class="form-control" placeholder="Fee">
        	</div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Class</button>
      </div>
       </form>
    </div>
  </div>
</div>