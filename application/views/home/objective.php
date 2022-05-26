<?php include "marquee.php";?>
        <div class="container py-5">
            <a href="<?php echo base_url();?>">Home</a> > Introduction
        </div>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <?php include "sidebar.php"; ?>
            </div>
            <div class="col-md-9">
                <h1>Objectives</h1>
                    <?php echo $content[0]->content; ?>
            </div>
        </div>
    </div>