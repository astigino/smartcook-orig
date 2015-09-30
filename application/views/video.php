
<!-- START CONTAINER -->
<div class="container">

    
    <div class="container">
        <h2 class="page-header">
            <p class="text-primary text-center">HOW TO COOK
                                <?php $id = $recipe_plan_id;
                                $query = mysql_query("SELECT * FROM recipes_list where id ='$id'")or die(mysql_error());
                                $row_break1 = mysql_fetch_array($query);
                                echo ucfirst($row_break1['recipes_name']);
                                ?>
            </p>
        </h2>  
    </div>
    
   <video id="example_video_1" class="video-js vjs-default-skin"  controls autoplay preload="auto" width="940" height="450"
      poster=""
      data-setup='{ "controls": true, "autoplay": false, "preload": "auto" }'...>
    <source src="<?php echo base_url(); ?>smartcook_source/recipe_list/video/recipe_<?php echo $recipe_plan_id;?>.mp4" type='video/mp4' />
    <!--
    <source src="http://video-js.zencoder.com/oceans-clip.webm" type='video/webm' />
    <source src="http://video-js.zencoder.com/oceans-clip.ogv" type='video/ogg' />
    -->  
    <track kind="captions" src="demo.captions.vtt" srclang="en" label="English"></track><!-- Tracks need an ending tag thanks to IE9 -->
    <track kind="subtitles" src="demo.captions.vtt" srclang="en" label="English"></track><!-- Tracks need an ending tag thanks to IE9 -->
    <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
  </video>

</div> <!-- END CONTAINER -->  











