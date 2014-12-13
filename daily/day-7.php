<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

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
				$img = "/daily/images/hellofood_logo_black.png"; } 
			else { 
				$img = "/daily/images/Logo_png_01.png"; 
			} 
			echo '<img src="'.$img.'"></div>';
		?>
	</div>
	<div class="center">

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
				echo '<img src="/daily/images/'.$ribbon.'.png">';
			?>
				
			</div>
					
			<div class="x-mas-center-text" ><span style="font-size:20px;"><?php echo __("Day 7 Thanks for participating"); ?></span><div class="h10"></div>
				<span style="font-size:26px;"><?php echo __("Today´s gift:"); ?> </span><br/>	<span style="font-size:32px;"><?php echo __("Christmas dinner for you and your friends"); ?></span>  <div style="text-align:center; margin-top:10px;"><img src="/daily/images/Red_hat_03.png"></div>
				<span style="font-size:16px;"><?php echo __("Come back tomorrow to see the next gift"); ?></span>
			</div>
			
		<!--box-->
		
			<div class="x-mas-middle-box"><img src="/daily/images/day-7.png">
						<div class="comment_day4"><div> <?php echo __("mention 5 friends you would like to have Christmas dinner with"); ?></div></div>

			</div>
		<!--end box-->		
			<div class="x-max-share-facebook-box">
						<div><?php echo __("Spread the joy"); ?> :)</div>
						<div class="spreadjoy"><img src="/daily/images/spread-the-joy.png"></div>
						<div class="h20"><!--clearence--></div>
	
						<div class="facebook-share"><a href="javascript:void(0);"><img src="/daily/images/F_share_03.jpg"></a></div>
						<div class="h50"><!--clearence--></div>
						<div class="fb-comments" data-href="https://www.facebook.com/FoodpandaThailand" data-width="100%" data-numposts="5" data-colorscheme="light"></div>
			
			</div>
			</div>
</div>
<script src="/assets/js/common.js" type="text/javascript" ></script>
<script src="/assets/js/daily.js" type="text/javascript" ></script>

</body>

</html>