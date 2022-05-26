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
<div class="box" style="background:orange;color:#fff;">
                    Business
                </div>
                 <div class="box" style="">
                    <a href="<?php echo base_url('home/solar_photovoltaic');?>">Solar Photovoltaic</a>
                </div>
                <div class="box" style="">
                    <a href="<?php echo base_url('home/solar_thermal');?>">Solar Thermal</a>
                </div>
                <div class="box" style="">
                    <a href="<?php echo base_url('home/solarization_of_ports');?>">Solarization of Ports</a>
                </div>
                 <div class="box" style="">
                    <a href="<?php echo base_url('home/consultancy_services');?>">Consultancy Services</a>
                </div>
                <div class="box" style="">
                    <a href="<?php echo base_url('home/r_and_d');?>">R & D</a>
                </div>