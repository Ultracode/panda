<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if(!in_array(strtolower($_SESSION['country']), array('br', 'th'))) { echo "HelloFood"; } else { echo "Foodpanda"; } ?></title>
<link rel="stylesheet" type="text/css" href="/daily/main.css" />
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
					<div class="h20"><!--clearence--></div>

			<div class="x-mas-center-text" ><?php echo __("Come Celebrate Christmas with foodpanda and");?><br> <?php echo __("have the chance to win, give and help donate gifts in this merry time of year");?></div>
			
			<div class="h50"><!--clerence--></div>
		<!--box-->
		
			<div class="x-mas-day-box">
			<?php for($i=1;$i<=12;$i++) {
				if($key[$today] > $i) {
				        $href = '/offers/day/'.$i;
					$type = 'open';
					$class = 'open';
				}
				else if($key[$today] == $i) {
				        $type = 'close';
				        $href = '/offers/day/'.$i;
				        $class = 'close';
				}
				else {
					$type = 'close';
					$class = 'close not-open';
					$href = 'javascript:void(0);';
				}
					$content = '<div class="day-block '.$class.'"><a id="day-'.$i.'" href="'.$href.'"><img src="'.$type.'-image/day'.$i.'-'.$type.'.png"></a></div>';
					if($i % 4 != 0) {
						$content .= '<div class="icon-block"><img src="close-image/day'.$i.'-closet.png"></div>';
					}
					else {
						$content .= '<div  style="clear:both"><!--clearence--></div>';
					}
					echo $content;
				}
/*					<div class="day-block"><a id="day-2" href="/offers/day/2"><img src="close-image/day-closet_07.png"></a></div>
					<div class="icon-block"><img src="close-image/day-closet_14.png"></div>
					<div class="day-block"><a id="day-3" href="/offers/day/3"><img src="close-image/day-closet_09.png"></a></div>
					<div class="icon-block"><img src="close-image/day-closet_03.png"></div>
					<div class="day-block"><a id="day-4" href="/offers/day/4"><img src="close-image/day-closet_10.png"></a></div>

					<div  style="clear:both"><!--clearence--></div>
					<div class="day-block"><a id="day-5" href="/offers/day/5"><img src="close-image/day-closet_19.png"></a></div>
					<div class="icon-block"><img src="close-image/day-closet_15.png"></div>
					<div class="day-block"><a id="day-6" href="/offers/day/6"><img src="close-image/day-closet_20.png"></a></div>
					<div class="icon-block"><img src="close-image/day-closet_21.png"></div>
					<div class="day-block"><a id="day-7" href="/offers/day/7"><img src="close-image/day-closet_17.png"></a></div>
					<div class="icon-block"><img src="close-image/day-closet_22.png"></div>
					<div class="day-block"><a id="day-8" href="/offers/day/8"><img src="close-image/day-closet_23.png"></a></div>
					<div  style="clear:both"><!--clearence--></div>

					<div class="day-block"><a id="day-9" href="/offers/day/9"><img src="close-image/day-closet_25.png"></a></div>
					<div class="icon-block"><img src="close-image/day-closet_26.png"></div>
					<div class="day-block"><a id="day-10" href="/offers/day/10"><img src="close-image/day-closet_31.png"></a></div>
					<div class="icon-block"><img src="close-image/day-closet_32.png"></div>
					<div class="day-block"><a id="day-11" href="/offers/day/11"><img src="close-image/day-closet_28.png"></a></div>
					<div class="icon-block"><img src="close-image/day-closet_33.png"></div>
					<div class="day-block"><a id="day-12" href="/offers/day/12"><img src="close-image/day-closet_30.png"></a></div>
*/
?>
			</div>
		<!--end box-->		
			
			<div class="h50"><!--clerence--></div>

			<div class="x-mas-buid">
				<img src="images/build_02.png">
			</div>
	<!--end lightup-->
	<div class="x-max-close-day-footer" align="center">
	<div class="block-box">
				<div class="h60"><!--clerence--></div>
			<img src="close-image/calendar_old_export_41.png">

			<div class="h60"><!--clerence--></div>

		</div>
	</div>

</div>

<script src="/assets/js/common.js" type="text/javascript" ></script>
</body>

</html>