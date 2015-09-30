<nav class="navbar navbar-default navbar-inverse" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <img src="<?php echo base_url(); ?>assets/ico/logo.png" style="width:200px; height:45px; padding-top: 5px; z-index: 10;" class="pull-left">
        <a class="navbar-brand" href="<?php echo site_url('site/'); ?>"><span style="color:#fff;font-family:rage italic;"></span></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

     
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo site_url('site/'); ?>"><span class="fa fa-home"></span> Home</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-book"></span> 30 Day Menu <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
              <li><a href="<?php echo site_url('site/create_30daymenu/'); ?>">Create a 30 Day Menu Plan</a></li>
              <li><a href="<?php echo site_url('site/fix_30daymenu/'); ?>">Fixed 30 Day Menu Plan</a></li>
            
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-book"></span> Cookbook <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo site_url('site/recipes/'); ?>">Recipes</a></li>
            <li><a href="<?php echo site_url('site/key_ingredient/'); ?>">Key Ingredient</a></li>
            <li><a href="<?php echo site_url('site/type_of_dish/'); ?>">Type Of Dish</a></li>
            <li><a href="<?php echo site_url('site/gussan_easy_recipes/'); ?>">K-line Gussan's Easy Recipes</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-info"></span> Help <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo site_url('site/calories_meter/'); ?>">Calorie Chart</a></li>
            <li><a href="<?php echo site_url('site/bmi_calculator/'); ?>">BMI Calculator</a></li>
            <li><a href="<?php echo base_url(); ?>smartcook_source/terms_and_definitions.pdf" target="_blank">Terms & Definitions</a></li>
            <li><a href="<?php echo base_url(); ?>smartcook_source/user_manual.pdf" target="_blank">SmartCook System User's Manual</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>