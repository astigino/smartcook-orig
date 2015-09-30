<div class="header" id="content">
    <div class="container">
        <h1><i class="fa fa-th-large"></i> Body Mass Index Calculator</h1>
        <p></p>
    </div>
</div>

<!-- START CONTAINER -->
<div class="container">
    <br /><br />

    <!-- Intro Content -->
    <div class="row">
        <div class="col-xs-7">
            <h2><center>BMI Result :  <?php if(!empty($result)) { 
                
                
                //echo $result; 
                  $bmi = round($result);
                  if($bmi == ''){ 
                         echo '';
                  } else if($bmi >= '0' && $bmi <= '18'){ 
                         echo 'Underweight'.'('.$bmi.')';
                  } else if ($bmi >= '19' && $bmi <= '24'){
                         echo 'Normal'.'('.$bmi.')'; 
                  } else if ($bmi >= '25' && $bmi <= '29'){
                         echo 'Overweight'.'('.$bmi.')';   
                  } else if ($bmi >= '30' && $bmi <= '34'){
                         echo 'Obesity - class I'.'('.$bmi.')';   
                  } else if ($bmi >= '35' && $bmi <= '39'){
                         echo 'Obesity - class II'.'('.$bmi.')';
                  } else if ($bmi >= '40'){
                         echo 'Obesity - class III'.'('.$bmi.')';
                  } else {
                         echo '';    
                  }
                
            } ?></center></h2>
            
            
            
            
            <form class="form-horizontal" role="form" method="post">

                          <div class="form-group">
                              <input type="text" name="cent" class="form-control" id="i1" placeholder="cm." required="required">
                            <p class="help-block">Enter Height in Centimeter.</p>
                          </div>
                          
                           <div class="form-group">
                             <input type="text" name="kilo" class="form-control" id="i2" placeholder="kg." required="required">
                            <p class="help-block">Enter Weight in Kilogram.</p>
                          </div>
                          
                        <div class="form-group">
                          <div class="col-xs-12">
                            <button type="submit" name="compute" class="btn btn-default btn-primary btn-block">Compute BMI</button>
                          </div>
                        </div>
                      </form>
        </div>
        <div class="col-xs-4  col-xs-offset-1">
            

            <b>BMI Categories:</b> <br/><br/>
            <b>Underweight</b> = 0 < 18<br/>
            <b>Normal weight</b> = 19 – 24 <br/>
            <b>Overweight</b> = 25 – 29 <br/>
            <b>Obesity class I</b> = 30 - 34<br/>
            <b>Obesity class II</b> = 35 - 39 <br/>
            <b>Obesity class III</b> = BMI of 40 or greater<br/>
                 

        </div>

    </div>
    <!-- /.row -->


</div> <!-- END CONTAINER -->  











