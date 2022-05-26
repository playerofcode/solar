<?php include "marquee.php";?>
        <div class="container py-5">
            <a href="<?php echo base_url();?>">Home</a> > Introduction
        </div>

<style>
    .box{
        height: 50px;
        text-align: center;
        line-height: 50px;
        font-weight: 700;
        display: block;
        border: 2px solid #ccc;
        border-left: 5px solid #084084;
    }
    .box a{
        color: #084084;
        display: block;
        transition: 0.4s;
    }
    .box:hover{
        background-color: #084084;
    }
    .box:hover a{
        color: #fff;
    }
</style>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <?php include "sidebar.php";?>
            </div>
            <div class="col-md-9">
                <h1>Introduction</h1>
               <?php echo $content[0]->content; ?>
            </div>
        </div>
    </div>