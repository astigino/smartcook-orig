<div class="header" id="content">
    <div class="container">
        <h1><i class="fa fa-th-large"></i> Create Your 30 Day Menu</h1>
        <p>Chief Cook's Recommendation, Create your 30 Day Menu</p>
    </div>
</div>
   

<!-- START CONTAINER -->
<div class="container">

    <div class="row">
        
                <div class="col-xs-2">
                    <br /><br />
                                    <div class="col-xs-12">
                                       <h4 class="breadcrumb text-center text-primary">Breakfast</h4>
                                    </div>
                    
               
                                    <?php if (!empty($row_create_30dayplan->breakfast_recipe_id1)) { ?>
                                    <div class="col-xs-12">
                                        <div class="thumbnail">
                                            <?php
                                            $id = strtoupper($row_create_30dayplan->breakfast_recipe_id1);
                                            $query = mysql_query("SELECT * FROM recipes_list where id ='$id'") or die(mysql_error());
                                            $row_break = mysql_fetch_array($query);
                                            //echo $row_break['recipes_name'].','; 
                                            ?>
                                            <img class="img-responsive" src="<?php echo base_url(); ?>smartcook_source/recipe_list/picture/RECIPE_<?php echo $row_create_30dayplan->breakfast_recipe_id1; ?>.jpg" alt="" rel="tooltip" title="<?php echo $row_break['recipes_name']; ?>">
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <?php if (!empty($row_create_30dayplan->breakfast_recipe_id2)) { ?>
                                    <div class="col-xs-12">
                                        <div class="thumbnail">
                                            <?php
                                            $id = strtoupper($row_create_30dayplan->breakfast_recipe_id2);
                                            $query = mysql_query("SELECT * FROM recipes_list where id ='$id'") or die(mysql_error());
                                            $row_break = mysql_fetch_array($query);
                                            //echo $row_break['recipes_name'].','; 
                                            ?>
                                            <img class="img-responsive" src="<?php echo base_url(); ?>smartcook_source/recipe_list/picture/RECIPE_<?php echo $row_create_30dayplan->breakfast_recipe_id2; ?>.jpg" alt="" rel="tooltip" title="<?php echo $row_break['recipes_name']; ?>">
                                        </div>
                                    </div>
                                    <?php } ?>
                    
                                    <div class="col-xs-12">
                                       <h4 class="breadcrumb text-center text-primary">Lunch</h4>
                                    </div>
                    
                                    <?php if (!empty($row_create_30dayplan->lunch_recipe_id1)) { ?>
                                    <div class="col-xs-12">
                                        <div class="thumbnail">
                                            <?php $id = strtoupper($row_create_30dayplan->lunch_recipe_id1);
                                            $query = mysql_query("SELECT * FROM recipes_list where id ='$id'")or die(mysql_error());
                                            $row_break = mysql_fetch_array($query);
                                            //echo $row_break['recipes_name'].','; ?>   
                                            <img class="img-responsive" src="<?php echo base_url(); ?>smartcook_source/recipe_list/picture/RECIPE_<?php echo $row_create_30dayplan->lunch_recipe_id1; ?>.jpg" alt="" rel="tooltip" title="<?php echo $row_break['recipes_name']; ?>">
                                        </div>
                                    </div>
                                    <?php } ?>   
                    
                    
                                    <?php if (!empty($row_create_30dayplan->lunch_recipe_id2)) { ?>
                                    <div class="col-xs-12">
                                        <div class="thumbnail">
                                            <?php $id = strtoupper($row_create_30dayplan->lunch_recipe_id2);
                                            $query = mysql_query("SELECT * FROM recipes_list where id ='$id'")or die(mysql_error());
                                            $row_break = mysql_fetch_array($query);
                                            //echo $row_break['recipes_name'].','; ?>   
                                            <img class="img-responsive" src="<?php echo base_url(); ?>smartcook_source/recipe_list/picture/RECIPE_<?php echo $row_create_30dayplan->lunch_recipe_id2; ?>.jpg" alt="" rel="tooltip" title="<?php echo $row_break['recipes_name']; ?>">
                                        </div>
                                    </div>
                                    <?php } ?>   
                    
                                    <?php if (!empty($row_create_30dayplan->lunch_recipe_id3)) { ?>
                                    <div class="col-xs-12">
                                        <div class="thumbnail">
                                            <?php $id = strtoupper($row_create_30dayplan->lunch_recipe_id3);
                                            $query = mysql_query("SELECT * FROM recipes_list where id ='$id'")or die(mysql_error());
                                            $row_break = mysql_fetch_array($query);
                                            //echo $row_break['recipes_name'].','; ?>   
                                            <img class="img-responsive" src="<?php echo base_url(); ?>smartcook_source/recipe_list/picture/RECIPE_<?php echo $row_create_30dayplan->lunch_recipe_id3; ?>.jpg" alt="" rel="tooltip" title="<?php echo $row_break['recipes_name']; ?>">
                                        </div>
                                    </div>
                                     <?php } ?>   
                    
                                        <div class="col-xs-12">
                                           <h4 class="breadcrumb text-center text-primary">Dinner</h4>
                                        </div>
                    
                                        <?php if (!empty($row_create_30dayplan->dinner_recipe_id1)) { ?>
                                        <div class="col-xs-12">
                                            <div class="thumbnail">
                                                <?php $id = strtoupper($row_create_30dayplan->dinner_recipe_id1);
                                                $query = mysql_query("SELECT * FROM recipes_list where id ='$id'")or die(mysql_error());
                                                $row_break = mysql_fetch_array($query);
                                                //echo $row_break['recipes_name'].','; ?>   
                                                <img class="img-responsive" src="<?php echo base_url(); ?>smartcook_source/recipe_list/picture/RECIPE_<?php echo $row_create_30dayplan->dinner_recipe_id1; ?>.jpg" alt="" rel="tooltip" title="<?php echo $row_break['recipes_name']; ?>">
                                            </div>
                                        </div>
                                        <?php } ?>   
                                        <?php if (!empty($row_create_30dayplan->dinner_recipe_id2)) { ?>
                                        <div class="col-xs-12">
                                            <div class="thumbnail">
                                                <?php $id = strtoupper($row_create_30dayplan->dinner_recipe_id2);
                                                $query = mysql_query("SELECT * FROM recipes_list where id ='$id'")or die(mysql_error());
                                                $row_break = mysql_fetch_array($query);
                                                //echo $row_break['recipes_name'].','; ?>   
                                                <img class="img-responsive" src="<?php echo base_url(); ?>smartcook_source/recipe_list/picture/RECIPE_<?php echo $row_create_30dayplan->dinner_recipe_id2; ?>.jpg" alt="" rel="tooltip" title="<?php echo $row_break['recipes_name']; ?>">
                                            </div>
                                        </div>
                                        <?php } ?>   
                                        <?php if (!empty($row_create_30dayplan->dinner_recipe_id3)) { ?>
                                        <div class="col-xs-12">
                                            <div class="thumbnail">
                                                <?php $id = strtoupper($row_create_30dayplan->dinner_recipe_id3);
                                                $query = mysql_query("SELECT * FROM recipes_list where id ='$id'")or die(mysql_error());
                                                $row_break = mysql_fetch_array($query);
                                                //echo $row_break['recipes_name'].','; ?>   
                                                <img class="img-responsive" src="<?php echo base_url(); ?>smartcook_source/recipe_list/picture/RECIPE_<?php echo $row_create_30dayplan->dinner_recipe_id3; ?>.jpg" alt="" rel="tooltip" title="<?php echo $row_break['recipes_name']; ?>">
                                            </div>
                                        </div>
                                        <?php } ?>   
                    <!--
                                        <div class="col-xs-12">
                                           <h4 class="breadcrumb text-center text-primary">Snacks</h4>
                                        </div>
                            
                                    <?php //if (!empty($row_create_30dayplan->snack_recipe_id1)) { ?>
                                    <div class="col-xs-12">
                                        <div class="thumbnail">
                                            <?php
                                            //$id = strtoupper($row_create_30dayplan->snack_recipe_id1);
                                            //$query = mysql_query("SELECT * FROM recipes_list where id ='$id'") or die(mysql_error());
                                            //$row_break = mysql_fetch_array($query);
                                            //echo $row_break['recipes_name'].','; 
                                            ?>
                                            <img class="img-responsive" src="<?php //echo base_url(); ?>smartcook_source/recipe_list/picture/RECIPE_<?php //echo $row_create_30dayplan->snack_recipe_id1; ?>.jpg" alt="" rel="tooltip" title="<?php //echo $row_break['recipes_name']; ?>">
                                        </div>
                                    </div>
                                    <?php //} ?>   
                                    <?php //if (!empty($row_create_30dayplan->snack_recipe_id2)) { ?>
                                    <div class="col-xs-12">
                                        <div class="thumbnail">
                                            <?php
                                            //$id = strtoupper($row_create_30dayplan->snack_recipe_id2);
                                            //$query = mysql_query("SELECT * FROM recipes_list where id ='$id'") or die(mysql_error());
                                            //$row_break = mysql_fetch_array($query);
                                            //echo $row_break['recipes_name'].','; 
                                            ?>
                                            <img class="img-responsive" src="<?php //echo base_url(); ?>smartcook_source/recipe_list/picture/RECIPE_<?php //echo $row_create_30dayplan->snack_recipe_id2; ?>.jpg" alt="" rel="tooltip" title="<?php //echo $row_break['recipes_name']; ?>">
                                        </div>
                                    </div>
                                    <?php //} ?>   
                            -->
                                        <!--
                                            <div class="caption ">
                                                <h5 rel="tooltip" style="font-weight:bold;font-size:11px;" title="<?php //echo $row_break['recipes_name']; ?>"><?php //echo mb_strimwidth($row_break['recipes_name'], 0, 15, "..."); ?></h5>
                                                <p style="font-weight:bold;font-size:9px;">Calories per serving : <?php //echo $row_break['recipe_calorie_cost_per_servings']; ?></p>
                                            </div> -->
          
       </div>
        <div class="col-xs-10">
            <h2 class="page-header">
                <p class="text-primary pull-left"><i class="fa fa-search"></i> Search Menu</p>
                <a href="<?php echo base_url('site/add_menu'); ?>" class="btn btn-danger pull-right" rel="tooltip" title="Add Menu"><i class="fa fa-plus"></i> Add Menu</a>
                <a rel="tooltip" data-toggle="modal" data-target="#myModal" title="Set Default Menu" class="btn btn-primary pull-right" href="#"><i class="fa fa-th-large"></i> Set Active Menu</a>
                <div class="clearfix"></div>
            </h2> 
            
            <form class="form-horizontal" role="form" method="post" action="create_30daymenu">

                <div class="form-group">
                    <div class="col-xs-2">
                        <select class="form-control" name="cat_keyword">
                            <option value="recipe_plan_name">Menu Name</option>
                        </select>
                    </div>
                    <div class="col-xs-8">
                        <input type="text" class="form-control" name="keyword" id="inputEmail3" placeholder="Seach">
                    </div>
                    <div class="col-xs-1">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Search</button>
                    </div>
                </div>
            </form>
            
            
            <table class="table table-condensed table-hover table-striped">
                <thead>
                    <tr>
                        <th style="text-align:center;width:80px;">#</th>
                        <th style="width:400px;">Menu Name</th>
                        <th style="text-align:center;">Status</th>
                        <th style="width:250px;text-align:center;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php //for ($ctr = 1; $ctr <= 15; $ctr++) { ?>
                    <?php $ctr = 1;foreach ($own_menu_list as $row_own_menu_list) { ?>
                        <tr>
                            <td style="text-align:center;"><?php echo $ctr; $ctr++;?></td>
                            <td><?php echo ucfirst($row_own_menu_list->recipe_plan_name).'s Menu'; ?></td>
                            <td style="text-align:center;">
                            <?php $recipe_plan_id = $row_own_menu_list->recipe_plan_id;
                                $query_breakfast1 = mysql_query("SELECT * FROM plan where recipe_plan_id = '$recipe_plan_id' and (breakfast_recipe_id1 is null || lunch_recipe_id1 is null || dinner_recipe_id1 is null || breakfast_recipe_id1 = '0' || lunch_recipe_id1 = '0' || dinner_recipe_id1 = '0')")or die(mysql_error());
                                $row_breakfast1 = mysql_fetch_array($query_breakfast1);
                                if(empty($row_breakfast1['id'])){
                                    echo 'Completed';
                                } else { echo 'Inprogress'; }
                            ?>
                            </td>
                            <td style="text-align:center;">
                                <a rel="tooltip" title="Update Menu" class="btn btn-warning btn-xs" href="<?php echo base_url('site/update_30daymenu').'/'.$row_own_menu_list->recipe_plan_id; ?>"><i class="fa fa-edit"></i> Update Menu</a>
                                    &nbsp;<a rel="tooltip" title="Print Menu" class="btn btn-success btn-xs" href="<?php echo base_url('site/create_30daymenu_print').'/'.$row_own_menu_list->recipe_plan_id; ?>" target="_blank" ><i class="fa fa-print"></i> Print</a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a rel="tooltip" title="Delete Menu" class="btn btn-danger btn-xs" href="<?php echo base_url('site/create_30daymenu_delete').'/'.$row_own_menu_list->recipe_plan_id; ?>" onclick="return confirm('Are you sure you want to Delete?')"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                   <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

                                 
<form class="form-inline" role="form" method="post" action="<?php echo base_url('site/create_30daymenu_default').'/'.$row_own_menu_list->recipe_plan_id; ?>">   
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Choose Menu and starting date you using it.</h4>
          </div>
          <div class="modal-body">

            
              <center>
              <select name="recipe_plan_id" class="form-control" style="width:500px;">
                  <?php $ctr = 1;foreach ($own_menu_list as $row_own_menu_list) { ?>
                  <option value="<?php echo $row_own_menu_list->recipe_plan_id; ?>"><?php echo ucfirst($row_own_menu_list->recipe_plan_name).'s Menu'; ?></option>
                  <?php } ?>  
              </select> 
                    <br/><br/>
              <select name="month" class="form-control" style="width:200px;">
                  <option value="<?php echo date('m'); ?>"><?php echo date('F'); ?></option>
                  <option value="01">January</option>
                  <option value="02">February</option>
                  <option value="03">March</option>
                  <option value="04">April</option>
                  <option value="05">May</option>
                  <option value="06">June</option>
                  <option value="07">July</option>
                  <option value="08">August</option>
                  <option value="09">September</option>
                  <option value="10">October</option>
                  <option value="11">November</option>
                  <option value="12">December</option>
              </select>
              <select name="day" class="form-control" style="width:140px;">
                  <option value="<?php echo date('d'); ?>"><?php echo date('d'); ?></option>
                 <?php for($ctr=1;$ctr<=31;$ctr++) {?>
                    <option value="<?php echo sprintf('%02d', $ctr); ?>"><?php echo sprintf('%02d', $ctr); ?></option>
                 <?php } ?>
              </select>
              <select name="year" class="form-control" style="width:150px;">
                  <option value="<?php echo date('Y'); ?>"><?php echo date('Y'); ?></option>
              </select>
              </center>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure you want to change this as Default Menu?')">Save Changes</button>
          </div>
        </div>
      </div>
    </div>   
</form>
    
</div> <!-- END CONTAINER -->  











