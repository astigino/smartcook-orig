<div class="header" id="content">
    <div class="container">
        <h1><i class="fa fa-th-large"></i> Add Lunch</h1>
        <p>Chief Cook's Recommendation, Add Lunch</p>
    </div>
</div>


<!-- START CONTAINER -->
<div class="container">



    <hr />
    <div class="row">
        <div class="row text-center">
            <?php foreach ($recipes_list as $row_recipes_list) { ?>
                <div class="col-xs-2">
                    <div class="thumbnail">
                        <img src="<?php echo base_url(); ?>smartcook_source/recipe_list/picture/RECIPE_<?php echo $row_recipes_list->id; ?>.jpg" alt="" rel="tooltip" title="<?php echo $row_recipes_list->recipes_name; ?>">
                        <div class="caption ">
                            <h5 rel="tooltip" style="font-weight:bold;font-size:11px;" title="<?php echo $row_recipes_list->recipes_name; ?>"><?php echo mb_strimwidth($row_recipes_list->recipes_name, 0, 15, "..."); ?></h5>
                            <p style="font-weight:bold;font-size:9px;">Calories per serving : <?php echo $row_recipes_list->recipe_calorie_cost_per_servings; ?></p>
                            <p><a class="btn btn-primary btn-xs" href="<?php echo base_url('site/update_30daymenu'); ?>/<?php echo $recipe_plan_id; ?>/<?php echo $plan_id; ?>/<?php echo $row_recipes_list->id; ?>/4" role="button" rel="tooltip" title="Add Lunch">Add Lunch</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div> <!-- END CONTAINER -->  











