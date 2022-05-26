<?php include "marquee.php";?>
        <div class="container py-5">
            <a href="<?php echo base_url();?>">Home</a> > What's New
        </div>
    <div class="container">
        <div class="row" style="padding-top:50px;">
            <div class="col-md-12">
                <h1 style="border-left: 5px solid green;padding-left:5px;">What's New</h1>
              <table class="table table-bordered" style="color:#000;">
              	<tr class="bg-primary text-white text-center">
              		<th>S.No.</th>
              		<th>Title</th>
              		<th>Published Date</th>
              	</tr>
              	<?php $i=1;foreach ($whats_new_list as $key): ?>
              		<tr>
              			<td><?php echo $i;?></td>
              			<td><a href="<?php echo base_url('home/whats_new_info/'.$key->id);?>" style="font-weight: bold;"><?php echo $key->title;?></a></td>
              			<td><?php echo date('d/m/Y',strtotime($key->created_at));?></td>
              		</tr>
              	<?php $i++;endforeach ?>
              </table>
            </div>
        </div>
    </div>