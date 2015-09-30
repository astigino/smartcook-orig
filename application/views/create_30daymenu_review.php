<!-- START CONTAINER -->
<div class="container">
    <div class="row">
        <div class="col-xs-12">
                <h2 class="page-header">
                    <p class="text-danger pull-left">SmartCook 
                                <?php $id = $recipe_plan_id;
                                $query = mysql_query("SELECT * FROM recipe_plan where recipe_plan_id ='$id'")or die(mysql_error());
                                $row_break1 = mysql_fetch_array($query);
                                echo ucfirst($row_break1['recipe_plan_name']).'s Menu';
                                ?>
                        
                    </p>
                    <span class="pull-right hidden-print"><button type="button" class="btn btn-default" onclick="window.print();">Print</button></span>
                    <div class="clearfix"></div>
                </h2>
           
        </div>
    </div>
        <div class="row text-center">
            <table>
                <?php $ctr = 1; foreach ($create_30dayplan as $row_create_30dayplan) { ?>
                    <thead>
                        <tr>
                            <th colspan="2"><h2 class="">Day <?php echo $ctr; $ctr++; ?></h2> <hr /></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="row">
                                    <div class="col-xs-4">
                                       <h4 class="breadcrumb text-left text-danger">Breakfast</h4>
                                    </div>
                                     <div class="col-xs-6 col-xs-offset-2">
                                                 <h4 class="breadcrumb text-left text-danger">Lunch</h4>
                                     </div>
                                </div>
                                <div class="row">
                                    <?php if (!empty($row_create_30dayplan->breakfast_recipe_id1)) { ?>
                                    <div class="col-xs-2">
                                        <div class="thumbnail">
                                            <?php
                                            $id = strtoupper($row_create_30dayplan->breakfast_recipe_id1);
                                            $query = mysql_query("SELECT * FROM recipes_list where id ='$id'") or die(mysql_error());
                                            $row_break = mysql_fetch_array($query);
                                            //echo $row_break['recipes_name'].','; 
                                            ?>
                                            <img class="img-responsive" src="<?php echo base_url(); ?>smartcook_source/recipe_list/picture/RECIPE_<?php echo $row_create_30dayplan->breakfast_recipe_id1; ?>.jpg" alt="" rel="tooltip" title="<?php echo $row_break['recipes_name']; ?>">

                                            <div class="caption ">
                                                <h5 rel="tooltip" style="font-weight:bold;font-size:11px;" title="<?php echo $row_break['recipes_name']; ?>"><?php echo mb_strimwidth($row_break['recipes_name'], 0, 15, "..."); ?></h5>
                                                <p style="font-weight:bold;font-size:9px;">Calories per serving : <?php echo $row_break['recipe_calorie_cost_per_servings']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } else { ?>   
                                    <div class="col-xs-2">
                                        <div class="thumbnail">
                                            <img class="img-responsive" src="<?php echo base_url(); ?>smartcook_source/others/recipe_icon.png">
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <?php if (!empty($row_create_30dayplan->breakfast_recipe_id2)) { ?>
                                    <div class="col-xs-2">
                                        <div class="thumbnail">
                                            <?php
                                            $id = strtoupper($row_create_30dayplan->breakfast_recipe_id2);
                                            $query = mysql_query("SELECT * FROM recipes_list where id ='$id'") or die(mysql_error());
                                            $row_break = mysql_fetch_array($query);
                                            //echo $row_break['recipes_name'].','; 
                                            ?>
                                            <img class="img-responsive" src="<?php echo base_url(); ?>smartcook_source/recipe_list/picture/RECIPE_<?php echo $row_create_30dayplan->breakfast_recipe_id2; ?>.jpg" alt="" rel="tooltip" title="<?php echo $row_break['recipes_name']; ?>">

                                            <div class="caption ">
                                                <h5 rel="tooltip" style="font-weight:bold;font-size:11px;" title="<?php echo $row_break['recipes_name']; ?>"><?php echo mb_strimwidth($row_break['recipes_name'], 0, 15, "..."); ?></h5>
                                                <p style="font-weight:bold;font-size:9px;">Calories per serving : <?php echo $row_break['recipe_calorie_cost_per_servings']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } else { ?>   
                                    <div class="col-xs-2">
                                        <div class="thumbnail">
                                            <img class="img-responsive" src="<?php echo base_url(); ?>smartcook_source/others/recipe_icon.png">
                                        </div>
                                    </div>
                                    <?php } ?>
                                    
                                    
                                    <?php if (!empty($row_create_30dayplan->lunch_recipe_id1)) { ?>
                                    <div class="col-xs-2 col-xs-offset-2">
                                        <div class="thumbnail">
                                            <?php $id = strtoupper($row_create_30dayplan->lunch_recipe_id1);
                                            $query = mysql_query("SELECT * FROM recipes_list where id ='$id'")or die(mysql_error());
                                            $row_break = mysql_fetch_array($query);
                                            //echo $row_break['recipes_name'].','; ?>   
                                            <img class="img-responsive" src="<?php echo base_url(); ?>smartcook_source/recipe_list/picture/RECIPE_<?php echo $row_create_30dayplan->lunch_recipe_id1; ?>.jpg" alt="" rel="tooltip" title="<?php echo $row_break['recipes_name']; ?>">

                                            <div class="caption ">
                                                <h5 rel="tooltip" style="font-weight:bold;font-size:11px;" title="<?php echo $row_break['recipes_name']; ?>"><?php echo mb_strimwidth($row_break['recipes_name'], 0, 15, "..."); ?></h5>
                                                <p style="font-weight:bold;font-size:9px;">Calories per serving : <?php echo $row_break['recipe_calorie_cost_per_servings']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } else { ?>   
                                    <div class="col-xs-2">
                                        <div class="thumbnail">
                                            <img class="img-responsive" src="<?php echo base_url(); ?>smartcook_source/others/recipe_icon.png">
                                        </div>
                                    </div>
                                    <?php } ?>   
                                    <?php if (!empty($row_create_30dayplan->lunch_recipe_id2)) { ?>
                                    <div class="col-xs-2">
                                        <div class="thumbnail">
                                            <?php $id = strtoupper($row_create_30dayplan->lunch_recipe_id2);
                                            $query = mysql_query("SELECT * FROM recipes_list where id ='$id'")or die(mysql_error());
                                            $row_break = mysql_fetch_array($query);
                                            //echo $row_break['recipes_name'].','; ?>   
                                            <img class="img-responsive" src="<?php echo base_url(); ?>smartcook_source/recipe_list/picture/RECIPE_<?php echo $row_create_30dayplan->lunch_recipe_id2; ?>.jpg" alt="" rel="tooltip" title="<?php echo $row_break['recipes_name']; ?>">

                                            <div class="caption ">
                                                <h5 rel="tooltip" style="font-weight:bold;font-size:11px;" title="<?php echo $row_break['recipes_name']; ?>"><?php echo mb_strimwidth($row_break['recipes_name'], 0, 15, "..."); ?></h5>
                                                <p style="font-weight:bold;font-size:9px;">Calories per serving : <?php echo $row_break['recipe_calorie_cost_per_servings']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } else { ?>   
                                    <div class="col-xs-2">
                                        <div class="thumbnail">
                                            <img class="img-responsive" src="<?php echo base_url(); ?>smartcook_source/others/recipe_icon.png">
                                        </div>
                                    </div>
                                    <?php } ?> 
                                    <?php if (!empty($row_create_30dayplan->lunch_recipe_id3)) { ?>
                                    <div class="col-xs-2">
                                        <div class="thumbnail">
                                            <?php $id = strtoupper($row_create_30dayplan->lunch_recipe_id3);
                                            $query = mysql_query("SELECT * FROM recipes_list where id ='$id'")or die(mysql_error());
                                            $row_break = mysql_fetch_array($query);
                                            //echo $row_break['recipes_name'].','; ?>   
                                            <img class="img-responsive" src="<?php echo base_url(); ?>smartcook_source/recipe_list/picture/RECIPE_<?php echo $row_create_30dayplan->lunch_recipe_id3; ?>.jpg" alt="" rel="tooltip" title="<?php echo $row_break['recipes_name']; ?>">

                                            <div class="caption ">
                                                <h5 rel="tooltip" style="font-weight:bold;font-size:11px;" title="<?php echo $row_break['recipes_name']; ?>"><?php echo mb_strimwidth($row_break['recipes_name'], 0, 15, "..."); ?></h5>
                                                <p style="font-weight:bold;font-size:9px;">Calories per serving : <?php echo $row_break['recipe_calorie_cost_per_servings']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } else { ?>   
                                    <div class="col-xs-2">
                                        <div class="thumbnail">
                                            <img class="img-responsive" src="<?php echo base_url(); ?>smartcook_source/others/recipe_icon.png">
                                        </div>
                                    </div>
                                    <?php } ?>
                                    

                                    <div class="row">
                                        <div class="col-xs-6">
                                           <h4 class="breadcrumb text-left text-danger">Dinner</h4>
                                        </div>
                                        <div class="col-xs-4 col-xs-offset-2">
                                           <h4 class="breadcrumb text-left text-danger">Snacks</h4>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                    <?php if (!empty($row_create_30dayplan->dinner_recipe_id1)) { ?>
                                    <div class="col-xs-2">
                                        <div class="thumbnail">
                                            <?php $id = strtoupper($row_create_30dayplan->dinner_recipe_id1);
                                            $query = mysql_query("SELECT * FROM recipes_list where id ='$id'")or die(mysql_error());
                                            $row_break = mysql_fetch_array($query);
                                            //echo $row_break['recipes_name'].','; ?>   
                                            <img class="img-responsive" src="<?php echo base_url(); ?>smartcook_source/recipe_list/picture/RECIPE_<?php echo $row_create_30dayplan->dinner_recipe_id1; ?>.jpg" alt="" rel="tooltip" title="<?php echo $row_break['recipes_name']; ?>">

                                            <div class="caption ">
                                                <h5 rel="tooltip" style="font-weight:bold;font-size:11px;" title="<?php echo $row_break['recipes_name']; ?>"><?php echo mb_strimwidth($row_break['recipes_name'], 0, 15, "..."); ?></h5>
                                                <p style="font-weight:bold;font-size:9px;">Calories per serving : <?php echo $row_break['recipe_calorie_cost_per_servings']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } else { ?>   
                                    <div class="col-xs-2">
                                        <div class="thumbnail">
                                            <img class="img-responsive" src="<?php echo base_url(); ?>smartcook_source/others/recipe_icon.png">
                                        </div>
                                    </div>
                                    <?php } ?>   
                                    <?php if (!empty($row_create_30dayplan->dinner_recipe_id2)) { ?>
                                    <div class="col-xs-2">
                                        <div class="thumbnail">
                                            <?php $id = strtoupper($row_create_30dayplan->dinner_recipe_id2);
                                            $query = mysql_query("SELECT * FROM recipes_list where id ='$id'")or die(mysql_error());
                                            $row_break = mysql_fetch_array($query);
                                            //echo $row_break['recipes_name'].','; ?>   
                                            <img class="img-responsive" src="<?php echo base_url(); ?>smartcook_source/recipe_list/picture/RECIPE_<?php echo $row_create_30dayplan->dinner_recipe_id2; ?>.jpg" alt="" rel="tooltip" title="<?php echo $row_break['recipes_name']; ?>">

                                            <div class="caption ">
                                                <h5 rel="tooltip" style="font-weight:bold;font-size:11px;" title="<?php echo $row_break['recipes_name']; ?>"><?php echo mb_strimwidth($row_break['recipes_name'], 0, 15, "..."); ?></h5>
                                                <p style="font-weight:bold;font-size:9px;">Calories per serving : <?php echo $row_break['recipe_calorie_cost_per_servings']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } else { ?>   
                                    <div class="col-xs-2">
                                        <div class="thumbnail">
                                            <img class="img-responsive" src="<?php echo base_url(); ?>smartcook_source/others/recipe_icon.png">
                                        </div>
                                    </div>
                                    <?php } ?> 
                                    <?php if (!empty($row_create_30dayplan->dinner_recipe_id3)) { ?>
                                    <div class="col-xs-2">
                                        <div class="thumbnail">
                                            <?php $id = strtoupper($row_create_30dayplan->dinner_recipe_id3);
                                            $query = mysql_query("SELECT * FROM recipes_list where id ='$id'")or die(mysql_error());
                                            $row_break = mysql_fetch_array($query);
                                            //echo $row_break['recipes_name'].','; ?>   
                                            <img class="img-responsive" src="<?php echo base_url(); ?>smartcook_source/recipe_list/picture/RECIPE_<?php echo $row_create_30dayplan->dinner_recipe_id3; ?>.jpg" alt="" rel="tooltip" title="<?php echo $row_break['recipes_name']; ?>">

                                            <div class="caption ">
                                                <h5 rel="tooltip" style="font-weight:bold;font-size:11px;" title="<?php echo $row_break['recipes_name']; ?>"><?php echo mb_strimwidth($row_break['recipes_name'], 0, 15, "..."); ?></h5>
                                                <p style="font-weight:bold;font-size:9px;">Calories per serving : <?php echo $row_break['recipe_calorie_cost_per_servings']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } else { ?>   
                                    <div class="col-xs-2">
                                        <div class="thumbnail">
                                            <img class="img-responsive" src="<?php echo base_url(); ?>smartcook_source/others/recipe_icon.png">
                                        </div>
                                    </div>
                                    <?php } ?> 
                                        
                                        
                                    <?php if (!empty($row_create_30dayplan->snack_recipe_id1)) { ?>
                                    <div class="col-xs-2 col-xs-offset-2">
                                        <div class="thumbnail">
                                            <?php
                                            $id = strtoupper($row_create_30dayplan->snack_recipe_id1);
                                            $query = mysql_query("SELECT * FROM recipes_list where id ='$id'") or die(mysql_error());
                                            $row_break = mysql_fetch_array($query);
                                            //echo $row_break['recipes_name'].','; 
                                            ?>
                                            <img class="img-responsive" src="<?php echo base_url(); ?>smartcook_source/recipe_list/picture/RECIPE_<?php echo $row_create_30dayplan->snack_recipe_id1; ?>.jpg" alt="" rel="tooltip" title="<?php echo $row_break['recipes_name']; ?>">

                                            <div class="caption ">
                                                <h5 rel="tooltip" style="font-weight:bold;font-size:11px;" title="<?php echo $row_break['recipes_name']; ?>"><?php echo mb_strimwidth($row_break['recipes_name'], 0, 15, "..."); ?></h5>
                                                <p style="font-weight:bold;font-size:9px;">Calories per serving : <?php echo $row_break['recipe_calorie_cost_per_servings']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } else { ?>   
                                    <div class="col-xs-2 col-xs-offset-2">
                                        <div class="thumbnail">
                                            <img class="img-responsive" src="<?php echo base_url(); ?>smartcook_source/others/recipe_icon.png">
                                        </div>
                                    </div>
                                    <?php } ?>   
                                    <?php if (!empty($row_create_30dayplan->snack_recipe_id2)) { ?>
                                    <div class="col-xs-2">
                                        <div class="thumbnail">
                                            <?php
                                            $id = strtoupper($row_create_30dayplan->snack_recipe_id2);
                                            $query = mysql_query("SELECT * FROM recipes_list where id ='$id'") or die(mysql_error());
                                            $row_break = mysql_fetch_array($query);
                                            //echo $row_break['recipes_name'].','; 
                                            ?>
                                            <img class="img-responsive" src="<?php echo base_url(); ?>smartcook_source/recipe_list/picture/RECIPE_<?php echo $row_create_30dayplan->snack_recipe_id2; ?>.jpg" alt="" rel="tooltip" title="<?php echo $row_break['recipes_name']; ?>">

                                            <div class="caption ">
                                                <h5 rel="tooltip" style="font-weight:bold;font-size:11px;" title="<?php echo $row_break['recipes_name']; ?>"><?php echo mb_strimwidth($row_break['recipes_name'], 0, 15, "..."); ?></h5>
                                                <p style="font-weight:bold;font-size:9px;">Calories per serving : <?php echo $row_break['recipe_calorie_cost_per_servings']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } else { ?>   
                                    <div class="col-xs-2">
                                        <div class="thumbnail">
                                            <img class="img-responsive" src="<?php echo base_url(); ?>smartcook_source/others/recipe_icon.png">
                                        </div>
                                    </div>
                                    <?php } ?>    
                                        
                                    
                                    </div>
                                    
                                </div>

                                
                                </td>
                            </tr>
                            

                            

                            
                            
                        </tbody>
                     <?php } ?>
                </table>
           
        </div>

 
    


</div> <!-- END CONTAINER -->  











