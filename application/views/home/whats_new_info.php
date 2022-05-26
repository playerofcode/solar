<?php include "marquee.php";?>
        <div class="container py-5">
            <a href="<?php echo base_url();?>">Home</a> > What's New
        </div>
    <div class="container">
        <div class="row" style="padding-top:50px;">
            <div class="col-md-12">
                <h1 style="border-left: 5px solid green;padding-left:5px;"><?php echo $whats_new_list[0]->title; ?></h1>
                <hr>
                <p><?php echo $whats_new_list[0]->description;?></p>
            </div>
        </div>
    </div>