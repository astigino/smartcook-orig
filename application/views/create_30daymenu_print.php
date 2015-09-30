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
            <table class="table table-condensed table-hover table-striped">
                <thead>
                    <tr style="font-weight:bold;" class="text-danger">
                        <th style="text-align:center;width:80px;">Day Plan</th>
                        <th style="text-align:center;" colspan="2">Breakfast</th>
                        <th style="text-align:center;" colspan="3">Lunch</th>
                        <th style="text-align:center;" colspan="3">Dinner</th>
                        <th style="text-align:center;" colspan="2">Snacks</th>
                    </tr>
                </thead>
                <tbody>
                    <?php //for ($ctr = 1; $ctr <= 15; $ctr++) { ?>
                    <?php $ctr = 1;foreach ($create_30dayplan as $row_create_30dayplan) { ?>
                        <tr>
                            <td style="text-align:center; font-weight: bold;">Day <?php echo $ctr; $ctr++;?></td>
                            <td style="text-align:center;" colspan="2">
                                <?php if(!empty($row_create_30dayplan->breakfast_recipe_id1)){ ?>
                                    <?php $id = strtoupper($row_create_30dayplan->breakfast_recipe_id1);
                                    $query = mysql_query("SELECT * FROM recipes_list where id ='$id'")or die(mysql_error());
                                    $row_break = mysql_fetch_array($query);
                                    echo $row_break['recipes_name'].','; ?>
                                <?php } ?>    
                                <?php if(!empty($row_create_30dayplan->breakfast_recipe_id2)){ ?>
                                    <?php $id = strtoupper($row_create_30dayplan->breakfast_recipe_id2);
                                    $query = mysql_query("SELECT * FROM recipes_list where id ='$id'")or die(mysql_error());
                                    $row_break = mysql_fetch_array($query);
                                    echo $row_break['recipes_name']; ?>
                                <?php } ?>    
                            </td>
                            <td style="text-align:center;" colspan="3">
                                <?php if(!empty($row_create_30dayplan->lunch_recipe_id1)){ ?>
                                    <?php $id = strtoupper($row_create_30dayplan->lunch_recipe_id1);
                                    $query = mysql_query("SELECT * FROM recipes_list where id ='$id'")or die(mysql_error());
                                    $row_break = mysql_fetch_array($query);
                                    echo $row_break['recipes_name'].','; ?>
                                <?php } ?>    
                                <?php if(!empty($row_create_30dayplan->lunch_recipe_id2)){ ?>
                                    <?php $id = strtoupper($row_create_30dayplan->lunch_recipe_id2);
                                    $query = mysql_query("SELECT * FROM recipes_list where id ='$id'")or die(mysql_error());
                                    $row_break = mysql_fetch_array($query);
                                    echo $row_break['recipes_name'].','; ?>
                                <?php } ?>    
                                <?php if(!empty($row_create_30dayplan->lunch_recipe_id3)){ ?>
                                    <?php $id = strtoupper($row_create_30dayplan->lunch_recipe_id3);
                                    $query = mysql_query("SELECT * FROM recipes_list where id ='$id'")or die(mysql_error());
                                    $row_break = mysql_fetch_array($query);
                                    echo $row_break['recipes_name']; ?>
                                <?php } ?>    
                            </td>
                            <td style="text-align:center;" colspan="3">
                                <?php if(!empty($row_create_30dayplan->dinner_recipe_id1)){ ?>
                                    <?php $id = strtoupper($row_create_30dayplan->dinner_recipe_id1);
                                    $query = mysql_query("SELECT * FROM recipes_list where id ='$id'")or die(mysql_error());
                                    $row_break = mysql_fetch_array($query);
                                    echo $row_break['recipes_name'].','; ?>
                                <?php } ?>    
                                <?php if(!empty($row_create_30dayplan->dinner_recipe_id2)){ ?>
                                    <?php $id = strtoupper($row_create_30dayplan->dinner_recipe_id2);
                                    $query = mysql_query("SELECT * FROM recipes_list where id ='$id'")or die(mysql_error());
                                    $row_break = mysql_fetch_array($query);
                                    echo $row_break['recipes_name'].','; ?>
                                <?php } ?>    
                                <?php if(!empty($row_create_30dayplan->dinner_recipe_id3)){ ?>
                                    <?php $id = strtoupper($row_create_30dayplan->dinner_recipe_id3);
                                    $query = mysql_query("SELECT * FROM recipes_list where id ='$id'")or die(mysql_error());
                                    $row_break = mysql_fetch_array($query);
                                    echo $row_break['recipes_name']; ?>
                                <?php } ?>    
                            </td>
                            <td style="text-align:center;" colspan="2">
                                <?php if(!empty($row_create_30dayplan->snack_recipe_id1)){ ?>
                                    <?php $id = strtoupper($row_create_30dayplan->snack_recipe_id1);
                                    $query = mysql_query("SELECT * FROM recipes_list where id ='$id'")or die(mysql_error());
                                    $row_break = mysql_fetch_array($query);
                                    echo $row_break['recipes_name'].','; ?>
                                <?php } ?>    
                                <?php if(!empty($row_create_30dayplan->snack_recipe_id2)){ ?>
                                    <?php $id = strtoupper($row_create_30dayplan->snack_recipe_id2);
                                    $query = mysql_query("SELECT * FROM recipes_list where id ='$id'")or die(mysql_error());
                                    $row_break = mysql_fetch_array($query);
                                    echo $row_break['recipes_name']; ?>
                                <?php } ?>    
                            </td>
                                  
                        </tr>
                   <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</div> <!-- END CONTAINER -->  











