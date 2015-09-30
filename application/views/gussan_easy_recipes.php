<div class="header" id="content">
    <div class="container">
        <div class="pull-left">
        <h1><i class="fa fa-th-large"></i> Gussan's Easy Recipes</h1>
        <p>Chief Cook's Recommendation, K-line Gussan's Easy Recipes</p>
        </div>
        <div class="pull-right">
             <br/>
            <img class="img-responsive" src="<?php echo base_url(); ?>smartcook_source/others/klma.jpg" style="width: 300px;">
            </div>
    </div>
</div>


<!-- START CONTAINER -->
<div class="container">
    <br />
    <div class="row">
        <div class="span12">    
            <div class="row text-center">
                 <?php for ($ctr = 1; $ctr <= 53; $ctr++) { ?>
                        <div class="col-xs-2">
                            <div class="thumbnail">
                                    <?php  $filename = base_url() . "smartcook_source/gussan/gussan_easy_recipe_" . $ctr . ".pdf";
                                $handle = @fopen($filename, 'r');
                                if ($handle !== false) { ?>
                                    <img class="img-responsive" rel="tooltip" title="Gussan's Easy Recipes Volume # <?php echo $ctr; ?>" src="<?php echo base_url(); ?>smartcook_source/gussan/gussan_easy_recipe_<?php echo $ctr; ?>.jpg">
                                    <?php } else { ?>   
                                    <img class="img-responsive" rel="tooltip" title="Gussan's Easy Recipes Volume # <?php echo $ctr; ?>" src="<?php echo base_url(); ?>smartcook_source/gussan/recipe_icon1.png">
                                    <?php } ?>
                                <div class="caption">
                                    <h5 style="font-weight:bold;font-size:11px;" ><?php echo "Gussan's Easy Recipes Volume #".$ctr; ?></h5>
                                <?php

                                if ($handle !== false) {
                                    echo "<a class=\"btn btn-danger btn-xs\" href=\"" . base_url() . "smartcook_source/gussan/gussan_easy_recipe_" . $ctr . ".pdf\" target=\"_blank\" rel=\"tooltip\" title=\"View via PDF\"><i class=\"fa fa-file-pdf-o\"></i> View</a>";
                                } else {
                                    echo "<a class=\"btn btn-warning btn-xs\">No Menu</a>";
                                }
                                ?>
                                </div>
                            </div>
                        </div>
                <?php } ?>
            </div>
                    

        </div>
    </div>

</div> <!-- END CONTAINER -->  
<!--
           <table class="table table-condensed table-hover table-striped">
                <thead>
                    <tr>
                        <th style="text-align:center;width:80px;">#</th>
                        <th>Recipes Name</th>
                        <th style="text-align:center;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                </body>
            </table>

                    <?php //for ($ctr = 1; $ctr <= 52; $ctr++) { ?>
                        <tr>
                            <td style="text-align:center;"><?php //echo $ctr; ?></td>
                            <td>
                            <?php
                                // = base_url() . "smartcook_source/gussan/gussan_easy_recipe_" . $ctr . ".pdf";
                                //$handle = @fopen($filename, 'r');
                                //if ($handle !== false) {
                                //    echo "<a href=\"" . base_url() . "smartcook_source/gussan/gussan_easy_recipe_" . $ctr . ".pdf\" target=\"_blank\" >Gussan's Easy Recipes Volume # ".$ctr."</a>";
                                //} else {
                                //    echo '';
                                //}
                                ?>
                            
                            
                            </td>
                            <td style="text-align:center;"><?php
                                //$filename = base_url() . "smartcook_source/gussan/gussan_easy_recipe_" . $ctr . ".pdf";
                                //$handle = @fopen($filename, 'r');
                                //if ($handle !== false) {
                                //    echo "<a class=\"btn btn-danger btn-xs\" href=\"" . base_url() . "smartcook_source/gussan/gussan_easy_recipe_" . $ctr . ".pdf\" target=\"_blank\" ><i class=\"fa fa-file-pdf-o\"></i> View</a>";
                                //} else {
                                //    echo '';
                                //}
                                ?>
                            </td>
                        </tr>
                   <?php //} ?>

-->  





