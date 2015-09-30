<div class="header" id="content">
    <div class="container">
        <h1><i class="fa fa-th-large"></i> All Recipes</h1>
        <p>Chief Cook's Recommendation, All Recipes.</p>
    </div>
</div>


<!-- START CONTAINER -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <form class="form-horizontal" role="form" method="post" action="recipes">
                 <h2 class="page-header">
                    <p class="text-primary"><i class="fa fa-search"></i> Search Recipe</p>
                </h2>
            
            
            <div class="form-group">
                <div class="col-xs-2">
                    <select class="form-control" name="cat_keyword">
                        <option value="recipes_name">Recipe Name</option>
                    </select>
                </div>
                <div class="col-xs-9">
                    <input type="text" class="form-control" name="keyword" id="inputEmail3" placeholder="Seach">
                </div>
                <div class="col-xs-1">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Search</button>
                </div>
            </div>
        </form>
    </div>
    <!-- /.row -->
    <!--
    <hr />
    <div class="row">
        <div class="row text-center">
            <?php foreach ($recipes_list as $row_recipes_list) { ?>
                <div class="col-xs-3">
                    <div class="thumbnail">
                        <img src="<?php echo base_url(); ?>smartcook_source/recipe_list/picture/RECIPE_<?php echo $row_recipes_list->id; ?>.jpg" alt="" rel="tooltip" title="<?php echo $row_recipes_list->recipes_name; ?>">
                        <div class="caption ">
                            <h5 rel="tooltip" style="font-weight:bold;" title="<?php echo $row_recipes_list->recipes_name; ?>"><?php echo mb_strimwidth($row_recipes_list->recipes_name, 0, 20, "..."); ?></h5>
                            <p>Calories per serving : <?php echo $row_recipes_list->recipe_calorie_cost_per_servings; ?></p>
                            <p><a class="btn btn-danger" target="_blank" href="<?php echo base_url(); ?>smartcook_source/recipe_list/pdf/RECIPE_<?php echo $row_recipes_list->id; ?>.pdf" role="button" rel="tooltip" title="View via PDF"><i class="fa fa-file-pdf-o"></i> PDF</a>
                                <a class="btn btn-info" target="_blank" href="<?php echo base_url(); ?>smartcook_source/recipe_list/video/RECIPE_<?php echo $row_recipes_list->id; ?>.mp4" role="button" rel="tooltip" title="View via Video"><i class="fa fa-video-camera"></i> Video</a></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    -->
    
    
   
    <hr />
        <div class="row text-center">
            <?php foreach ($recipes_list as $row_recipes_list) { ?>
            <div class="col-xs-2">
                <div class="thumbnail">
                    <img class="img-responsive" src="<?php echo base_url(); ?>smartcook_source/recipe_list/picture/RECIPE_<?php echo $row_recipes_list->id; ?>.jpg" alt="" rel="tooltip" title="<?php echo $row_recipes_list->recipes_name; ?>">
                        
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
        </div>
    
    
</div> <!-- END CONTAINER -->  











