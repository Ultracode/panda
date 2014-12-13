<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if(!in_array(strtolower($_SESSION['country']), array('br', 'th'))) { echo "HelloFood"; } else { echo "Foodpanda"; } ?></title>
<link rel="stylesheet" type="text/css" href="/daily/style.css" />
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700" rel="stylesheet" type="text/css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body>

<canvas id="canvas">


</canvas>

<div class="x-mas-food-container">
	<!--header-->
	
	<div class="x-mas-header">
		<div class="x-mas-logo">
		<?php if(!in_array(strtolower($_SESSION['country']), array('br', 'th'))) { 
				$img = "images/hellofood_logo_black.png"; } 
			else { 
				$img = "images/Logo_png_01.png"; 
			} 
			echo '<img src="'.$img.'"></div>';
		?>
	</div>
	
	<!--end header-->
		<div class="h50"><!--clearence--></div>

	<!--lightup-->
			<div class="lightup">
			<?php if(in_array(strtolower($_SESSION['country']), array('br', 'th', 'mx', 'bg'))) {
				$ribbon = 'ribbon_'. $_SESSION['country'];
			}
			else {
				$ribbon = 'ribbon_all';
			}
				echo '<img src="images/'.$ribbon.'.png">';
			?>
				
			</div>
		<div class="h10"><!--clearence--></div>
			<div class="x-mas-center-text" ><?php echo __("Come Celebrate Christmas with foodpanda and");?><br> <?php echo __("have the chance to win, give and help donate gifts in this merry time of year");?></div>
					<div class="h60"><!--clearence--></div>

		<!--box-->
		
			<div class="x-mas-middle-box"><img src="/daily/images/fb-login.png">
			
						<div class="x-mas-prize"><span style="font-size:26px;color:#404041;"><?php echo __("Check back everyday for new and exciting prizes"); ?></span>
						<div class="h60"><!--clearence--></div>
						<span style="font-size:26px;color:#404041;"><?php echo __("To participate"); ?>:</span>
						<div class="h30"><!--clearence--></div>
						<div class="facebook-button-fb"><a href="javascript:void(0);"><img id="fb-login" src="/daily/images/calendar_03.jpg"></a></div>
						<div class="x-mas-facebook-fb"><img src="/daily/images/calendar_06.png"></div>
						<div class="h50"><!--clearence--></div>

						<span style="font-size:16px;">&nbsp;&nbsp; <?php echo __("Click on the day's post"); ?></span>
												<div class="h50"><!--clearence--></div>
						<div class="inreract">&nbsp;&nbsp;<img src="/daily/images/calendar_03.png">&nbsp;&nbsp;<?php echo __("Interact as requested by the post"); ?></div>

						</div>

			
			</div>


								<div class="h50"><!--clearence--></div>

		<!--end box-->	
		<div class="x-mas-buid">
				<img src="/daily/images/build_02.png">
			</div>
	
</div>
<script src="/assets/js/common.js" type="text/javascript" ></script>
<script src="/assets/js/daily.js" type="text/javascript" ></script>
</body>

</html>