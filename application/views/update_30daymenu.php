<?php 
    $query_breakfast5 = mysql_query("SELECT * FROM plan")or die(mysql_error());
    $row_breakfast5 = mysql_fetch_array($query_breakfast5);
    //$row_breakfast5['id'];
?>

<div class="header" id="content">
    <div class="container">
        <h1><i class="fa fa-th-large"></i> Plan Your Menu</h1>
        <p>Chief Cook's Recommendation, Plan your 30day Menu</p>
    </div>
</div>


<!-- START CONTAINER -->
<div class="container">
    <div class="row">
        <div class="col-xs-12">
                <h2 class="page-header">
                    <p class="text-danger pull-left">
                                <?php $id = $recipe_plan_id;
                                $query = mysql_query("SELECT * FROM recipe_plan where recipe_plan_id ='$id'")or die(mysql_error());
                                $row_break1 = mysql_fetch_array($query);
                                echo ucfirst($row_break1['recipe_plan_name']).'s Menu';
                                ?>
                    </p>
                    <div class="pull-right">
                    <a rel="tooltip" title="Review Menu" class="btn btn-danger" href="<?php echo base_url('site/create_30daymenu_review').'/'.$recipe_plan_id; ?>" target="_blank" ><i class="fa fa-print"></i> Review Menu</a>
                    <a rel="tooltip" title="Print Menu" class="btn btn-success" href="<?php echo base_url('site/create_30daymenu_print').'/'.$recipe_plan_id; ?>" target="_blank" ><i class="fa fa-print"></i> Print</a>
                    <a rel="tooltip" title="Back" class="btn btn-default" href="<?php echo base_url('site/create_30daymenu'); ?>"><i class="fa fa-arrow-left"></i> Back</a>
                    </div>
                    <div class="clearfix"></div>
                </h2>
            <table class="table table-condensed table-hover table-striped">
                <thead>
                    <tr style="font-weight:bold;" class="text-danger">
                        <th style="text-align:left;width:80px;"></th>
                        <th style="text-align:center;background-color:#fdf2df;" colspan="2">Breakfast</th>
                        <th style="text-align:center;background-color:#dfe6fd;" colspan="3">Lunch</th>
                        <th style="text-align:center;background-color:#e6ffe4;" colspan="3">Dinner</th>
                        <th style="text-align:center;background-color:#daf7ff;" colspan="2">Snacks</th>
                    </tr>
                </thead>
                <tbody>
                    <?php //for ($ctr = 1; $ctr <= 15; $ctr++) { ?>
                    <?php $ctr = 1;foreach ($create_30dayplan as $row_create_30dayplan) { ?>
                        <tr>
                            <td style="text-align:left;font-weight: bold;">Day <?php echo $ctr; $ctr++;?></td>
                            <td style="text-align:center;"><?php if(!empty($row_create_30dayplan->breakfast_recipe_id1)){ ?>
                                <a href="<?php echo site_url('site/add_breakfast1/'); ?>/<?php echo $recipe_plan_id;?>/<?php echo $row_create_30dayplan->id ; ?>" rel="tooltip" title="<?php $id = strtoupper($row_create_30dayplan->breakfast_recipe_id1);
                                $query = mysql_query("SELECT * FROM recipes_list where id ='$id'")or die(mysql_error());
                                $row_break = mysql_fetch_array($query);
                                echo $row_break['recipes_name'].' (Click to Change Recipes)';
                                ?>">
                                <img src="<?php echo base_url(); ?>smartcook_source/recipe_list/picture/RECIPE_<?php echo $row_create_30dayplan->breakfast_recipe_id1; ?>.jpg" style="background-color: #eaeaea; height: 30px;">  
                                </a>
                                <a rel="tooltip" title="Remove Recipes" href="<?php echo site_url('site/delete_breakfast1/'); ?>/<?php echo $recipe_plan_id;?>/<?php echo $row_create_30dayplan->id ; ?>" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i></a>
                            <?php } else {?>    
                                <a rel="tooltip" title="Add Breakfast" href="<?php echo site_url('site/add_breakfast1/'); ?>/<?php echo $recipe_plan_id;?>/<?php echo $row_create_30dayplan->id ; ?>" class="btn btn-warning btn-xs"><i class="fa fa-plus-square"></i> Breakfast</a>
                            <?php } ?>    
                            </td>
                            <td style="text-align:center;"><?php if(!empty($row_create_30dayplan->breakfast_recipe_id2)){ ?>
                                <a href="<?php echo site_url('site/add_breakfast2/'); ?>/<?php echo $recipe_plan_id;?>/<?php echo $row_create_30dayplan->id ; ?>" rel="tooltip" title="<?php $id = strtoupper($row_create_30dayplan->breakfast_recipe_id2);
                                $query = mysql_query("SELECT * FROM recipes_list where id ='$id'")or die(mysql_error());
                                $row_break = mysql_fetch_array($query);
                                echo $row_break['recipes_name'].' (Click to Change Recipes)';
                                ?>">
                                <img src="<?php echo base_url(); ?>smartcook_source/recipe_list/picture/RECIPE_<?php echo $row_create_30dayplan->breakfast_recipe_id2; ?>.jpg" style="background-color: #eaeaea; height: 30px;">  
                                </a>
                                <a rel="tooltip" title="Remove Recipes" href="<?php echo site_url('site/delete_breakfast2/'); ?>/<?php echo $recipe_plan_id;?>/<?php echo $row_create_30dayplan->id ; ?>" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i></a>
                            <?php } else {?>    
                                <a rel="tooltip" title="Add Breakfast" href="<?php echo site_url('site/add_breakfast2/'); ?>/<?php echo $recipe_plan_id;?>/<?php echo $row_create_30dayplan->id ; ?>" class="btn btn-warning btn-xs"><i class="fa fa-plus-square"></i> Breakfast</a>
                            <?php } ?>    
                            </td>
                            <td style="text-align:center;"><?php if(!empty($row_create_30dayplan->lunch_recipe_id1)){ ?>
                                <a href="<?php echo site_url('site/add_lunch1/'); ?>/<?php echo $recipe_plan_id;?>/<?php echo $row_create_30dayplan->id ; ?>" rel="tooltip" title="<?php $id = strtoupper($row_create_30dayplan->lunch_recipe_id1);
                                $query = mysql_query("SELECT * FROM recipes_list where id ='$id'")or die(mysql_error());
                                $row_break = mysql_fetch_array($query);
                                echo $row_break['recipes_name'].' (Click to Change Recipes)';
                                ?>">
                                <img src="<?php echo base_url(); ?>smartcook_source/recipe_list/picture/RECIPE_<?php echo $row_create_30dayplan->lunch_recipe_id1; ?>.jpg" style="background-color: #eaeaea; height: 30px;">  
                                </a>
                                <a rel="tooltip" title="Remove Recipes" href="<?php echo site_url('site/delete_lunch1/'); ?>/<?php echo $recipe_plan_id;?>/<?php echo $row_create_30dayplan->id ; ?>" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i></a>
                            <?php } else {?>    
                                <a rel="tooltip" title="Add Lunch" href="<?php echo site_url('site/add_lunch1/'); ?>/<?php echo $recipe_plan_id;?>/<?php echo $row_create_30dayplan->id ; ?>" class="btn btn-primary btn-xs"><i class="fa fa-plus-square"></i> Lunch</a>
                            <?php } ?>    
                            </td>
                            <td style="text-align:center;"><?php if(!empty($row_create_30dayplan->lunch_recipe_id2)){ ?>
                                <a href="<?php echo site_url('site/add_lunch2/'); ?>/<?php echo $recipe_plan_id;?>/<?php echo $row_create_30dayplan->id ; ?>" rel="tooltip" title="<?php $id = strtoupper($row_create_30dayplan->lunch_recipe_id2);
                                $query = mysql_query("SELECT * FROM recipes_list where id ='$id'")or die(mysql_error());
                                $row_break = mysql_fetch_array($query);
                                echo $row_break['recipes_name'].' (Click to Change Recipes)';
                                ?>">
                                <img src="<?php echo base_url(); ?>smartcook_source/recipe_list/picture/RECIPE_<?php echo $row_create_30dayplan->lunch_recipe_id2; ?>.jpg" style="background-color: #eaeaea; height: 30px;">  
                                </a>
                                <a rel="tooltip" title="Remove Recipes" href="<?php echo site_url('site/delete_lunch2/'); ?>/<?php echo $recipe_plan_id;?>/<?php echo $row_create_30dayplan->id ; ?>" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i></a>
                            <?php } else {?>    
                                <a rel="tooltip" title="Add Lunch" href="<?php echo site_url('site/add_lunch2/'); ?>/<?php echo $recipe_plan_id;?>/<?php echo $row_create_30dayplan->id ; ?>" class="btn btn-primary btn-xs"><i class="fa fa-plus-square"></i> Lunch</a>
                            <?php } ?>    
                            </td>
                            <td style="text-align:center;"><?php if(!empty($row_create_30dayplan->lunch_recipe_id3)){ ?>
                                <a href="<?php echo site_url('site/add_lunch3/'); ?>/<?php echo $recipe_plan_id;?>/<?php echo $row_create_30dayplan->id ; ?>" rel="tooltip" title="<?php $id = strtoupper($row_create_30dayplan->lunch_recipe_id3);
                                $query = mysql_query("SELECT * FROM recipes_list where id ='$id'")or die(mysql_error());
                                $row_break = mysql_fetch_array($query);
                                echo $row_break['recipes_name'].' (Click to Change Recipes)';
                                ?>">
                                <img src="<?php echo base_url(); ?>smartcook_source/recipe_list/picture/RECIPE_<?php echo $row_create_30dayplan->lunch_recipe_id3; ?>.jpg" style="background-color: #eaeaea; height: 30px;">  
                                </a>
                                <a rel="tooltip" title="Remove Recipes" href="<?php echo site_url('site/delete_lunch3/'); ?>/<?php echo $recipe_plan_id;?>/<?php echo $row_create_30dayplan->id ; ?>" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i></a>
                            <?php } else {?>    
                                <a rel="tooltip" title="Add Lunch" href="<?php echo site_url('site/add_lunch3/'); ?>/<?php echo $recipe_plan_id;?>/<?php echo $row_create_30dayplan->id ; ?>" class="btn btn-primary btn-xs"><i class="fa fa-plus-square"></i> Lunch</a>
                            <?php } ?>    
                            </td>
                            <td style="text-align:center;"><?php if(!empty($row_create_30dayplan->dinner_recipe_id1)){ ?>
                                <a href="<?php echo site_url('site/add_dinner1/'); ?>/<?php echo $recipe_plan_id;?>/<?php echo $row_create_30dayplan->id ; ?>" rel="tooltip" title="<?php $id = strtoupper($row_create_30dayplan->dinner_recipe_id1);
                                $query = mysql_query("SELECT * FROM recipes_list where id ='$id'")or die(mysql_error());
                                $row_break = mysql_fetch_array($query);
                                echo $row_break['recipes_name'].' (Click to Change Recipes)';
                                ?>">
                                <img src="<?php echo base_url(); ?>smartcook_source/recipe_list/picture/RECIPE_<?php echo $row_create_30dayplan->dinner_recipe_id1; ?>.jpg" style="background-color: #eaeaea; height: 30px;">  
                                </a>
                                <a rel="tooltip" title="Remove Recipes" href="<?php echo site_url('site/delete_dinner1/'); ?>/<?php echo $recipe_plan_id;?>/<?php echo $row_create_30dayplan->id ; ?>" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i></a>
                            <?php } else {?>    
                                <a rel="tooltip" title="Add Dinner" href="<?php echo site_url('site/add_dinner1/'); ?>/<?php echo $recipe_plan_id;?>/<?php echo $row_create_30dayplan->id ; ?>" class="btn btn-success btn-xs"><i class="fa fa-plus-square"></i> Dinner</a>
                            <?php } ?>    
                            </td>
                            <td style="text-align:center;"><?php if(!empty($row_create_30dayplan->dinner_recipe_id2)){ ?>
                                <a href="<?php echo site_url('site/add_dinner2/'); ?>/<?php echo $recipe_plan_id;?>/<?php echo $row_create_30dayplan->id ; ?>" rel="tooltip" title="<?php $id = strtoupper($row_create_30dayplan->dinner_recipe_id2);
                                $query = mysql_query("SELECT * FROM recipes_list where id ='$id'")or die(mysql_error());
                                $row_break = mysql_fetch_array($query);
                                echo $row_break['recipes_name'].' (Click to Change Recipes)';
                                ?>">
                                <img src="<?php echo base_url(); ?>smartcook_source/recipe_list/picture/RECIPE_<?php echo $row_create_30dayplan->dinner_recipe_id2; ?>.jpg" style="background-color: #eaeaea; height: 30px;">  
                                </a>
                                <a rel="tooltip" title="Remove Recipes" href="<?php echo site_url('site/delete_dinner2/'); ?>/<?php echo $recipe_plan_id;?>/<?php echo $row_create_30dayplan->id ; ?>" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i></a>
                            <?php } else {?>    
                                <a rel="tooltip" title="Add Dinner" href="<?php echo site_url('site/add_dinner2/'); ?>/<?php echo $recipe_plan_id;?>/<?php echo $row_create_30dayplan->id ; ?>" class="btn btn-success btn-xs"><i class="fa fa-plus-square"></i> Dinner</a>
                            <?php } ?>    
                            </td>
                            <td style="text-align:center;"><?php if(!empty($row_create_30dayplan->dinner_recipe_id3)){ ?>
                                <a href="<?php echo site_url('site/add_dinner3/'); ?>/<?php echo $recipe_plan_id;?>/<?php echo $row_create_30dayplan->id ; ?>" rel="tooltip" title="<?php $id = strtoupper($row_create_30dayplan->dinner_recipe_id3);
                                $query = mysql_query("SELECT * FROM recipes_list where id ='$id'")or die(mysql_error());
                                $row_break = mysql_fetch_array($query);
                                echo $row_break['recipes_name'].' (Click to Change Recipes)';
                                ?>">
                                <img src="<?php echo base_url(); ?>smartcook_source/recipe_list/picture/RECIPE_<?php echo $row_create_30dayplan->dinner_recipe_id3; ?>.jpg" style="background-color: #eaeaea; height: 30px;">  
                                </a>
                                <a rel="tooltip" title="Remove Recipes" href="<?php echo site_url('site/delete_dinner3/'); ?>/<?php echo $recipe_plan_id;?>/<?php echo $row_create_30dayplan->id ; ?>" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i></a>
                            <?php } else {?>    
                                <a rel="tooltip" title="Add Dinner" href="<?php echo site_url('site/add_dinner3/'); ?>/<?php echo $recipe_plan_id;?>/<?php echo $row_create_30dayplan->id ; ?>" class="btn btn-success btn-xs"><i class="fa fa-plus-square"></i> Dinner</a>
                            <?php } ?>    
                            </td>
                            <td style="text-align:center;"><?php if(!empty($row_create_30dayplan->snack_recipe_id1)){ ?>
                                <a href="<?php echo site_url('site/add_snacks1/'); ?>/<?php echo $recipe_plan_id;?>/<?php echo $row_create_30dayplan->id ; ?>" rel="tooltip" title="<?php $id = strtoupper($row_create_30dayplan->snack_recipe_id1);
                                $query = mysql_query("SELECT * FROM recipes_list where id ='$id'")or die(mysql_error());
                                $row_break = mysql_fetch_array($query);
                                echo $row_break['recipes_name'].' (Click to Change Recipes)';
                                ?>">
                                <img src="<?php echo base_url(); ?>smartcook_source/recipe_list/picture/RECIPE_<?php echo $row_create_30dayplan->snack_recipe_id1; ?>.jpg" style="background-color: #eaeaea; height: 30px;">  
                                </a>
                                <a rel="tooltip" title="Remove Recipes" href="<?php echo site_url('site/delete_snacks1/'); ?>/<?php echo $recipe_plan_id;?>/<?php echo $row_create_30dayplan->id ; ?>" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i></a>
                            <?php } else {?>    
                                <a rel="tooltip" title="Add Snacks" href="<?php echo site_url('site/add_snacks1/'); ?>/<?php echo $recipe_plan_id;?>/<?php echo $row_create_30dayplan->id ; ?>" class="btn btn-info btn-xs"><i class="fa fa-plus-square"></i> Snack</a>
                            <?php } ?>    
                            </td>
                            <td style="text-align:center;"><?php if(!empty($row_create_30dayplan->snack_recipe_id2)){ ?>
                                <a href="<?php echo site_url('site/add_snacks2/'); ?>/<?php echo $recipe_plan_id;?>/<?php echo $row_create_30dayplan->id ; ?>" rel="tooltip" title="<?php $id = strtoupper($row_create_30dayplan->snack_recipe_id2);
                                $query = mysql_query("SELECT * FROM recipes_list where id ='$id'")or die(mysql_error());
                                $row_break = mysql_fetch_array($query);
                                echo $row_break['recipes_name'].' (Click to Change Recipes)';
                                ?>">
                                <img src="<?php echo base_url(); ?>smartcook_source/recipe_list/picture/RECIPE_<?php echo $row_create_30dayplan->snack_recipe_id2; ?>.jpg" style="background-color: #eaeaea; height: 30px;">  
                                </a>
                                <a rel="tooltip" title="Remove Recipes" href="<?php echo site_url('site/delete_snacks2/'); ?>/<?php echo $recipe_plan_id;?>/<?php echo $row_create_30dayplan->id ; ?>" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i></a>
                            <?php } else {?>    
                                <a rel="tooltip" title="Add Snacks" href="<?php echo site_url('site/add_snacks2/'); ?>/<?php echo $recipe_plan_id;?>/<?php echo $row_create_30dayplan->id ; ?>" class="btn btn-info btn-xs"><i class="fa fa-plus-square"></i> Snack</a>
                            <?php } ?>    
                            </td>
                                  
                        </tr>
                   <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    
<!--  
    <a rel="tooltip" data-toggle="modal" data-target="#myModal" title="Set Default Menu" class="btn btn-primary pull-right" href="#"><i class="fa fa-th-large"></i> Set Default Menu</a>
        
  <form class="form-inline" role="form" method="post" action="<?php //echo base_url('site/create_30daymenu_default').'/'.$row_own_menu_list->recipe_plan_id; ?>">   
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog  modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Choose Menu and starting date you using it.</h4>
          </div>
          <div class="modal-body">

              
                          <iframe style="height: 450px;width: 1020px;border: 0px;" class="container" frameborder="0" src="http://localhost/smartcook/site/add_lunch2/4/363"></iframe>
            
             
          </div>   
        </div>
      </div>
    </div>   
</form>  
    -->
    
    
</div> <!-- END CONTAINER -->  











