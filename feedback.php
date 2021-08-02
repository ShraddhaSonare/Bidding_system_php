<?php
	session_start();
	require("functions.php");
	require("htmls.php");
include("header.php");
?>
  <div id="main_content">
    <div id="menu_tab">
      <div class="left_menu_corner"></div>
      <ul class="menu">
        <li><a href="home.php" class="nav2">Home</a></li>
        <li class="divider" ></li>
        <li><a href="prodcateg.php" class="nav1">Products</a></li>
        <li class="divider"></li>
        <li><a href="feedback.php" class="nav2">Feedback/Suggession</a></li>
        <li class="divider"></li>
        <li><a href="contact.php" class="nav2">About Us</a></li>
        <li class="divider"></li>
		<?php account(); ?>
      </ul>
<script type='text/javascript'>
	jQuery(document).ready( function() {
		jQuery('.nav3').hide();
		jQuery('.nav4').click( function() {
			jQuery('.nav3').toggle('fade');	
		});
	});
</script>
      <div class="right_menu_corner"></div>
    </div>
    <!-- end of menu tab -->
    
    <div class="crumb_navigation"> Navigation: <span class="current">Home</span> </div>
   	<div class="left_content">   
    <?php
	include("leftitem.php");
		logform(); 
	?>
      
      
      
    </div>
    <!-- end of left content -->
    <div class="center_content">
      <div class="center_title_bar">Feedback/Suggesion</div>
     	<form class="form-horizontal reg-form" method="POST" action="addfeedback.php">
    <div class="row" style="font-size:16px; margin-left:50px">
      
      
      
      <div class="col-sm-12 fm-lft-part">
       <!-- <h2>Request Info</h2>-->
        <div class="form-group">
          <label for="inputname" class="col-sm-4 control-label">Name:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="name" name="name" required="" placeholder="Name">
          </div>
        </div>
        
        <div class="form-group">
          <label for="btchnum" class="col-sm-4 control-label">Email:</label>
          <div class="col-sm-8 frm-num">
            <input type="email" required placeholder="Email" name="email" id="email" class="form-control">
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-sm-4 control-label" for="mob">Mobile Number:</label>
          <div class="col-sm-8">
            <input type="text" pattern="[7-9]{1}[0-9]{9}" required="" placeholder="Mobile Number" name="mobileno" id="mobileno" class="form-control">
          </div>
        </div>
        
        
        
        
        
        
        
        
        <div class="form-group">
          <label class="col-sm-4 control-label" for="inputname">Feedback:</label>
          <div class="col-sm-8">
            <textarea required="" name="feedback" id="feedback" placeholder="
Feedback" rows="3" class="form-control"></textarea>
          </div>
        </div>
        
        
          
          <div class="row">
      <div class="col-sm-6 col-sm-offset-4 mar-t-20 mar-b-40">
          <button class="btn btn-primary" type="submit">Submit</button>
      </div>
    </div>
        
      </div>
      
    </div>
    
  </form>
        
        
    </div>
    <!-- end of center content -->
    <!-- end of right content -->
  </div>
  <!-- end of main content -->
<?php foothtml(); ?>
