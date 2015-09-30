<div class="header" id="content">
    <div class="container">
        <h1><i class="fa fa-th-large"></i> Type of Dish</h1>
        <p>Chief Cook's Recommendation, Sort by Boiled, Fried, Steamed, Grilled, Roasted, Baked & Sauced</p>
    </div>
</div>


<!-- START CONTAINER -->
<div class="container">
    <br />

    <ul id="myTab" class="nav nav-tabs nav-justified" style="font-weight: bold;">
        <li class="active"><a href="#service-one" data-toggle="tab"><i class="fa fa-picture-o"></i> Boiled</a>
        </li>
        <li class=""><a href="#service-two" data-toggle="tab"><i class="fa fa-picture-o"></i> Fried</a>
        </li>
        <li class=""><a href="#service-three" data-toggle="tab"><i class="fa fa-picture-o"></i> Steamed</a>
        </li>
        <li class=""><a href="#service-four" data-toggle="tab"><i class="fa fa-picture-o"></i> Grilled</a>
        </li>
        <li class=""><a href="#service-five" data-toggle="tab"><i class="fa fa-picture-o"></i> Roasted</a>
        </li>
        <li class=""><a href="#service-six" data-toggle="tab"><i class="fa fa-picture-o"></i> Baked</a>
        </li>
        <li class=""><a href="#service-seven" data-toggle="tab"><i class="fa fa-picture-o"></i> Sauced</a>
        </li>
        <li class="" style="background-color:#f2f6f0;"><a href="#service-eight" data-toggle="tab"><i class="fa fa-picture-o"></i> Bulgarian</a>
        </li>
    </ul>

    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade active in" id="service-one">
            <p>&nbsp;</p>
            <div class="row text-center">
                <?php foreach ($recipes_list as $row_recipes_list) { ?>
                   <?php if($row_recipes_list->type_of_dish == 'boiled'){ ?>
                        <div class="col-xs-2">
                            <div class="thumbnail">
                                <img src="<?php echo base_url(); ?>smartcook_source/recipe_list/picture/RECIPE_<?php echo $row_recipes_list->id; ?>.jpg" alt="" rel="tooltip" title="<?php echo $row_recipes_list->recipes_name; ?>">
                                <div class="caption">
                                    <h5 rel="tooltip" style="font-weight:bold;font-size:11px;" title="<?php echo $row_recipes_list->recipes_name; ?>"><?php echo mb_strimwidth($row_recipes_list->recipes_name, 0, 15, "..."); ?></h5>
                                    <p style="font-weight:bold;font-size:9px;">Calories per serving : <?php echo $row_recipes_list->recipe_calorie_cost_per_servings; ?></p>
                                    <p><a class="btn btn-danger btn-xs" target="_blank" href="<?php echo base_url(); ?>smartcook_source/recipe_list/pdf/RECIPE_<?php echo $row_recipes_list->id; ?>.pdf" role="button" rel="tooltip" title="View via PDF"><i class="fa fa-file-pdf-o"></i> PDF</a>
                            <?php  $filename = base_url() . "smartcook_source/recipe_list/video/recipe_" . $row_recipes_list->id . ".mp4";
                                $handle = @fopen($filename, 'r');
                                if ($handle !== false) { ?>    
                                <a class="btn btn-info btn-xs" target="_blank" href="<?php echo base_url(); ?>site/video/<?php echo $row_recipes_list->id; ?>" role="button" rel="tooltip" title="View via Video"><i class="fa fa-video-camera"></i> Video</a>
                             <?php } ?>  </p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
        <div class="tab-pane fade" id="service-two">
            <p>&nbsp;</p>
            <div class="row text-center">
                <?php foreach ($recipes_list as $row_recipes_list) { ?>
                    <?php if($row_recipes_list->type_of_dish == 'fried'){ ?>
                        <div class="col-xs-2">
                            <div class="thumbnail">
                                <img src="<?php echo base_url(); ?>smartcook_source/recipe_list/picture/RECIPE_<?php echo $row_recipes_list->id; ?>.jpg" alt="" rel="tooltip" title="<?php echo $row_recipes_list->recipes_name; ?>">
                                <div class="caption ">
                                    <h5 rel="tooltip" style="font-weight:bold;font-size:11px;" title="<?php echo $row_recipes_list->recipes_name; ?>"><?php echo mb_strimwidth($row_recipes_list->recipes_name, 0, 15, "..."); ?></h5>
                                    <p style="font-weight:bold;font-size:9px;">Calories per serving : <?php echo $row_recipes_list->recipe_calorie_cost_per_servings; ?></p>
                                    <p><a class="btn btn-danger btn-xs" target="_blank" href="<?php echo base_url(); ?>smartcook_source/recipe_list/pdf/RECIPE_<?php echo $row_recipes_list->id; ?>.pdf" role="button" rel="tooltip" title="View via PDF"><i class="fa fa-file-pdf-o"></i> PDF</a>
                            <?php  $filename = base_url() . "smartcook_source/recipe_list/video/recipe_" . $row_recipes_list->id . ".mp4";
                                $handle = @fopen($filename, 'r');
                                if ($handle !== false) { ?>    
                                <a class="btn btn-info btn-xs" target="_blank" href="<?php echo base_url(); ?>site/video/<?php echo $row_recipes_list->id; ?>" role="button" rel="tooltip" title="View via Video"><i class="fa fa-video-camera"></i> Video</a>
                             <?php } ?>  </p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
        <div class="tab-pane fade" id="service-three">
            <p>&nbsp;</p>
            <div class="row text-center">
                <?php foreach ($recipes_list as $row_recipes_list) { ?>
                    <?php if($row_recipes_list->type_of_dish == 'steamed'){ ?>
                        <div class="col-xs-2">
                            <div class="thumbnail">
                                <img src="<?php echo base_url(); ?>smartcook_source/recipe_list/picture/RECIPE_<?php echo $row_recipes_list->id; ?>.jpg" alt="" rel="tooltip" title="<?php echo $row_recipes_list->recipes_name; ?>">
                                <div class="caption ">
                                    <h5 rel="tooltip" style="font-weight:bold;font-size:11px;" title="<?php echo $row_recipes_list->recipes_name; ?>"><?php echo mb_strimwidth($row_recipes_list->recipes_name, 0, 15, "..."); ?></h5>
                                    <p style="font-weight:bold;font-size:9px;">Calories per serving : <?php echo $row_recipes_list->recipe_calorie_cost_per_servings; ?></p>
                                    <p><a class="btn btn-danger btn-xs" target="_blank" href="<?php echo base_url(); ?>smartcook_source/recipe_list/pdf/RECIPE_<?php echo $row_recipes_list->id; ?>.pdf" role="button" rel="tooltip" title="View via PDF"><i class="fa fa-file-pdf-o"></i> PDF</a>
                            <?php  $filename = base_url() . "smartcook_source/recipe_list/video/recipe_" . $row_recipes_list->id . ".mp4";
                                $handle = @fopen($filename, 'r');
                                if ($handle !== false) { ?>    
                                <a class="btn btn-info btn-xs" target="_blank" href="<?php echo base_url(); ?>site/video/<?php echo $row_recipes_list->id; ?>" role="button" rel="tooltip" title="View via Video"><i class="fa fa-video-camera"></i> Video</a>
                             <?php } ?>  </p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
        <div class="tab-pane fade" id="service-four">
            <p>&nbsp;</p>
            <div class="row text-center">
                <?php foreach ($recipes_list as $row_recipes_list) { ?>
                    <?php if($row_recipes_list->type_of_dish == 'grilled'){ ?>
                        <div class="col-xs-2">
                            <div class="thumbnail">
                                <img src="<?php echo base_url(); ?>smartcook_source/recipe_list/picture/RECIPE_<?php echo $row_recipes_list->id; ?>.jpg" alt="" rel="tooltip" title="<?php echo $row_recipes_list->recipes_name; ?>">
                                <div class="caption ">
                                    <h5 rel="tooltip" style="font-weight:bold;font-size:11px;" title="<?php echo $row_recipes_list->recipes_name; ?>"><?php echo mb_strimwidth($row_recipes_list->recipes_name, 0, 15, "..."); ?></h5>
                                    <p style="font-weight:bold;font-size:9px;">Calories per serving : <?php echo $row_recipes_list->recipe_calorie_cost_per_servings; ?></p>
                                    <p><a class="btn btn-danger btn-xs" target="_blank" href="<?php echo base_url(); ?>smartcook_source/recipe_list/pdf/RECIPE_<?php echo $row_recipes_list->id; ?>.pdf" role="button" rel="tooltip" title="View via PDF"><i class="fa fa-file-pdf-o"></i> PDF</a>
                            <?php  $filename = base_url() . "smartcook_source/recipe_list/video/recipe_" . $row_recipes_list->id . ".mp4";
                                $handle = @fopen($filename, 'r');
                                if ($handle !== false) { ?>    
                                <a class="btn btn-info btn-xs" target="_blank" href="<?php echo base_url(); ?>site/video/<?php echo $row_recipes_list->id; ?>" role="button" rel="tooltip" title="View via Video"><i class="fa fa-video-camera"></i> Video</a>
                             <?php } ?>  </p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
        <div class="tab-pane fade" id="service-five">
            <p>&nbsp;</p>
            <div class="row text-center">
                <?php foreach ($recipes_list as $row_recipes_list) { ?>
                   <?php if($row_recipes_list->type_of_dish == 'roasted'){ ?>
                        <div class="col-xs-2">
                            <div class="thumbnail">
                                <img src="<?php echo base_url(); ?>smartcook_source/recipe_list/picture/RECIPE_<?php echo $row_recipes_list->id; ?>.jpg" alt="" rel="tooltip" title="<?php echo $row_recipes_list->recipes_name; ?>">
                                <div class="caption ">
                                    <h5 rel="tooltip" style="font-weight:bold;font-size:11px;"" title="<?php echo $row_recipes_list->recipes_name; ?>"><?php echo mb_strimwidth($row_recipes_list->recipes_name, 0, 15, "..."); ?></h5>
                                    <p style="font-weight:bold;font-size:9px;">Calories per serving : <?php echo $row_recipes_list->recipe_calorie_cost_per_servings; ?></p>
                                    <p><a class="btn btn-danger btn-xs" target="_blank" href="<?php echo base_url(); ?>smartcook_source/recipe_list/pdf/RECIPE_<?php echo $row_recipes_list->id; ?>.pdf" role="button" rel="tooltip" title="View via PDF"><i class="fa fa-file-pdf-o"></i> PDF</a>
                            <?php  $filename = base_url() . "smartcook_source/recipe_list/video/recipe_" . $row_recipes_list->id . ".mp4";
                                $handle = @fopen($filename, 'r');
                                if ($handle !== false) { ?>    
                                <a class="btn btn-info btn-xs" target="_blank" href="<?php echo base_url(); ?>site/video/<?php echo $row_recipes_list->id; ?>" role="button" rel="tooltip" title="View via Video"><i class="fa fa-video-camera"></i> Video</a>
                             <?php } ?>  </p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
        <div class="tab-pane fade" id="service-six">
            <p>&nbsp;</p>
            <div class="row text-center">
                <?php foreach ($recipes_list as $row_recipes_list) { ?>
                   <?php if($row_recipes_list->type_of_dish == 'baked'){ ?>
                        <div class="col-xs-2">
                            <div class="thumbnail">
                                <img src="<?php echo base_url(); ?>smartcook_source/recipe_list/picture/RECIPE_<?php echo $row_recipes_list->id; ?>.jpg" alt="" rel="tooltip" title="<?php echo $row_recipes_list->recipes_name; ?>">
                                <div class="caption ">
                                    <h5 rel="tooltip" style="font-weight:bold;font-size:11px;" title="<?php echo $row_recipes_list->recipes_name; ?>"><?php echo mb_strimwidth($row_recipes_list->recipes_name, 0, 15, "..."); ?></h5>
                                    <p style="font-weight:bold;font-size:9px;">Calories per serving : <?php echo $row_recipes_list->recipe_calorie_cost_per_servings; ?></p>
                                    <p><a class="btn btn-danger btn-xs" target="_blank" href="<?php echo base_url(); ?>smartcook_source/recipe_list/pdf/RECIPE_<?php echo $row_recipes_list->id; ?>.pdf" role="button" rel="tooltip" title="View via PDF"><i class="fa fa-file-pdf-o"></i> PDF</a>
                            <?php  $filename = base_url() . "smartcook_source/recipe_list/video/recipe_" . $row_recipes_list->id . ".mp4";
                                $handle = @fopen($filename, 'r');
                                if ($handle !== false) { ?>    
                                <a class="btn btn-info btn-xs" target="_blank" href="<?php echo base_url(); ?>site/video/<?php echo $row_recipes_list->id; ?>" role="button" rel="tooltip" title="View via Video"><i class="fa fa-video-camera"></i> Video</a>
                             <?php } ?>  </p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
        <div class="tab-pane fade" id="service-seven">
            <p>&nbsp;</p>
            <div class="row text-center">
                <?php foreach ($recipes_list as $row_recipes_list) { ?>
                   <?php if($row_recipes_list->type_of_dish == 'sauced'){ ?>
                        <div class="col-xs-2">
                            <div class="thumbnail">
                                <img src="<?php echo base_url(); ?>smartcook_source/recipe_list/picture/RECIPE_<?php echo $row_recipes_list->id; ?>.jpg" alt="" rel="tooltip" title="<?php echo $row_recipes_list->recipes_name; ?>">
                                <div class="caption ">
                                    <h5 rel="tooltip" style="font-weight:bold;font-size:11px;" title="<?php echo $row_recipes_list->recipes_name; ?>"><?php echo mb_strimwidth($row_recipes_list->recipes_name, 0, 15, "..."); ?></h5>
                                    <p style="font-weight:bold;font-size:9px;">Calories per serving : <?php echo $row_recipes_list->recipe_calorie_cost_per_servings; ?></p>
                                    <p><a class="btn btn-danger btn-xs" target="_blank" href="<?php echo base_url(); ?>smartcook_source/recipe_list/pdf/RECIPE_<?php echo $row_recipes_list->id; ?>.pdf" role="button" rel="tooltip" title="View via PDF"><i class="fa fa-file-pdf-o"></i> PDF</a>
                            <?php  $filename = base_url() . "smartcook_source/recipe_list/video/recipe_" . $row_recipes_list->id . ".mp4";
                                $handle = @fopen($filename, 'r');
                                if ($handle !== false) { ?>    
                                <a class="btn btn-info btn-xs" target="_blank" href="<?php echo base_url(); ?>site/video/<?php echo $row_recipes_list->id; ?>" role="button" rel="tooltip" title="View via Video"><i class="fa fa-video-camera"></i> Video</a>
                             <?php } ?>  </p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
                <div class="tab-pane fade" id="service-eight" style="background-color:#f2f6f0;">
            <p>&nbsp;</p>
            <div class="row text-center">
                <?php foreach ($recipes_list as $row_recipes_list) { ?>
                   <?php if($row_recipes_list->type_of_dish == 'others' && $row_recipes_list->recipe_nationality == 'BULGARIAN'){ ?>
                        <div class="col-xs-2">
                            <div class="thumbnail">
                                <img src="<?php echo base_url(); ?>smartcook_source/recipe_list/picture/RECIPE_<?php echo $row_recipes_list->id; ?>.jpg" alt="" rel="tooltip" title="<?php echo $row_recipes_list->recipes_name; ?>">
                                <div class="caption ">
                                    <h5 rel="tooltip" style="font-weight:bold;font-size:11px;" title="<?php echo $row_recipes_list->recipes_name; ?>"><?php echo mb_strimwidth($row_recipes_list->recipes_name, 0, 15, "..."); ?></h5>
                                    <p style="font-weight:bold;font-size:9px;">Calories per serving : <?php echo $row_recipes_list->recipe_calorie_cost_per_servings; ?></p>
                                    <p><a class="btn btn-danger btn-xs" target="_blank" href="<?php echo base_url(); ?>smartcook_source/recipe_list/pdf/RECIPE_<?php echo $row_recipes_list->id; ?>.pdf" role="button" rel="tooltip" title="View via PDF"><i class="fa fa-file-pdf-o"></i> PDF</a>
                            <?php  $filename = base_url() . "smartcook_source/recipe_list/video/recipe_" . $row_recipes_list->id . ".mp4";
                                $handle = @fopen($filename, 'r');
                                if ($handle !== false) { ?>    
                                <a class="btn btn-info btn-xs" target="_blank" href="<?php echo base_url(); ?>site/video/<?php echo $row_recipes_list->id; ?>" role="button" rel="tooltip" title="View via Video"><i class="fa fa-video-camera"></i> Video</a>
                             <?php } ?>  </p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>


</div> <!-- END CONTAINER -->  











