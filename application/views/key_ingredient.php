<div class="header" id="content">
    <div class="container">
        <h1><i class="fa fa-th-large"></i> Key Ingredient</h1>
        <p>Chief Cook's Recommendation, Sort by Beef, Chicken, Fish, Pork & Pasta</p>
    </div>
</div>


<!-- START CONTAINER -->
<div class="container">
    <br />

    <ul id="myTab" class="nav nav-tabs nav-justified" style="font-weight: bold;">
        <li class="active"><a href="#service-one" data-toggle="tab"><img src="<?php echo base_url(); ?>smartcook_source/others/beef.png" style="width: 15px;height:15px;"> Beef</a>
        </li>
        <li class=""><a href="#service-two" data-toggle="tab"><img src="<?php echo base_url(); ?>smartcook_source/others/chicken.png" style="width: 16px;height:16px;"> Chicken</a>
        </li>
        <li class=""><a href="#service-three" data-toggle="tab"><img src="<?php echo base_url(); ?>smartcook_source/others/fish.png" style="width: 15px;height:15px;"> Fish</a>
        </li>
        <li class=""><a href="#service-four" data-toggle="tab"><img src="<?php echo base_url(); ?>smartcook_source/others/pork.png" style="width: 30px;height:15px;"> Pork</a>
        </li>
        <li class=""><a href="#service-five" data-toggle="tab"><img src="<?php echo base_url(); ?>smartcook_source/others/pasta.png" style="width: 30px;height:15px;"> Pasta</a>
        </li>
        <li class="" style="background-color:#f2f6f0;"><a href="#service-six" data-toggle="tab"><img src="<?php echo base_url(); ?>smartcook_source/others/menu.png" style="width: 15px;height:15px;"> Bulgarian</a>
        </li>
    </ul>

    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade active in" id="service-one">
            <p>&nbsp;</p>
            <div class="row text-center">
                <?php foreach ($recipes_list as $row_recipes_list) { ?>
                    <?php if ($row_recipes_list->key_ingredient == 'beef') { ?>
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
                    <?php if ($row_recipes_list->key_ingredient == 'chicken') { ?>
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
                    <?php if ($row_recipes_list->key_ingredient == 'fish') { ?>
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
                    <?php if ($row_recipes_list->key_ingredient == 'pork') { ?>
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
                             <?php } ?>  </p></div>
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
                    <?php if ($row_recipes_list->key_ingredient == 'pasta') { ?>
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
                <div class="tab-pane fade" id="service-six" style="background-color:#f2f6f0;">
            <p>&nbsp;</p>
            <div class="row text-center">
                <?php foreach ($recipes_list as $row_recipes_list) { ?>
                    <?php if ($row_recipes_list->key_ingredient == 'others' && $row_recipes_list->recipe_nationality == 'BULGARIAN') { ?>
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











