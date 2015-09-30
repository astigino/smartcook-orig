<div class="header" id="content">
    <div class="container">
        <h1><i class="fa fa-th-large"></i> Add Menu</h1>
        <p>Chief Cook's Recommendation, Add Menu</p>
    </div>
</div>

<!-- START CONTAINER -->
<div class="container">
    <div class="row">
        <div class="col-xs-6 col-xs-offset-3">
            <form role="form" method="post" action="add_menu">
                <h2 class="page-header">
                    <p class="text-primary pull-left"><i class="fa fa-plus-square"></i> Add Menu</p>
                    <div class="clearfix"></div>
                </h2>


                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Menu Name</label>
                    <input type="hidden" name="menuid" class="form-control" id="exampleInputEmail1" value="<?php 
                    
                    if(empty($add_menu->recipe_plan_id)){
                        echo 1;
                    } else {
                        echo $add_menu->recipe_plan_id + 1; 
                    }
                    
                    ?>" >
                    <input type="text" name="menuname" class="form-control" id="exampleInputEmail1" required="required" placeholder="Enter menu name">
                </div>

                <button type="submit" name="addmenu" class="btn btn-danger pull-right">Add Menu</button>
            </form>
        </div>
    </div>

</div> <!-- END CONTAINER -->  











