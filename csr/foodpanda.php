<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if(!in_array(strtolower($_SESSION['country']), array('br', 'th'))) { echo "HelloFood"; } else { echo "Foodpanda"; } ?></title>
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="/assets/js/tooltipster.css" />
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
			<img src="/csr/images/hellofood_logo_black.png"></div>
	</div>
	
	<!--end header-->
		<div class="h50"><!--clearence--></div>
	<div class="h50"><!--clearence--></div>

	<!--lightup-->
			<div class="lightup">
				<img src="/csr/images/ma-sn.png">
				
			</div>
			<div class="x-mas-buid">
				<img src="/csr/images/Building_02_02.png">
			</div>
	<!--end lightup-->
	
	
	<!--strip-->
	
	<div class="x-mas-strip">
		<div class="">	<?php echo __("Every year, families and friends around the world gather to celebrate Christmas"); ?></div>
		<div class="h10"></div>
		<div class="arrow-icon"><img src="/csr/images/FP_CSR_2014_Xmas_1_main_03.jpg"></div>
	</div>
	
	<!--end strip-->
	<!--happy and sad contianer-->
	<div class="x-mas-body-contianer" id="target2">
	<div class="x-mas-maine-banner">
		<img src="/csr/images/sad_03.png"></div>
	<div class="x-mas-body-section-over hide_overlay">
		<img src="/csr/images/Happy_1_02.png"></div>
	<div class="food-pot hide_overlay">

	<?php 
	while($row = $smallFood->fetch_assoc()) {
		$foodDiv = '<img id="'.$row['name'].'" rel="'.$row['id'].'" src="/csr/images/'.$row['small_image_url'].'">';
		echo $foodDiv;
/*					<img src="/csr/images/Food_04.png">					
					<img src="/csr/images/Food_05.png"> 
					<img src="/csr/images/Food_06.png">					
					<img src="/csr/images/Food_07.png"> 					
					<img src="/csr/images/Food_04.png"> 
*/
	}
	?>
					
	</div>
	<div class="food-table"><img src="/csr/images/Table_03.png"> </div>
	<div class="gift-pack hide_overlay"><img src="/csr/images/Gift_girl_03.png"></div>
	<div class="gift-pack-sec hide_overlay"><img src="/csr/images/Gift_boy_03.png"></div>
	<div class="boy-hand hide_overlay"><img src="/csr/images/Hand_4_03.png"></div>
	<div class="girl-hand hide_overlay"><img src="/csr/images/Hand_03.png"></div>

</div>

	<!--end happy and sad-->
	<!--strip-->
	
	<div class="x-mas-strip">
			<div class=""><?php echo __("Help us to make Christmas special to the less fortunate as well. You choose, we donate!"); ?></div>
			<div class="h10"></div>
			<div class="arrow-sec"><img src="/csr/images/FP_CSR_2014_Xmas_1_main_03.jpg"></div>
</div>

	<!--end strip-->
	
	<!--xmas donation-->
	<div class="x-mas-donation">
	<div class="food-donation">
	<div class="food-donation-header">
		<?php echo __("Select your food donation"); ?>:</div>
	<div class="h10">
		<!--clearence--></div>
	<div class="x-food-contianer">
	<?php 
	while($row = $food->fetch_assoc()) {
		$div = '<div class="x-box-block"><img src="/csr/images/'.$row['image_url'].'"><a rel="'.$row['id'].'" href="#">'.$row['name'].'</a> </div>';
		echo $div;
/*        <div class="x-box-block">
            <img src="/csr/images/FP_CSR_2014_Xmas_1_main-01_05.jpg">
            <a href="#">Rice</a> </div>
        <div class="x-box-block">
            <img src="/csr/images/FP_CSR_2014_Xmas_1_main-01_07.jpg">
            <a href="#">Rice</a> </div>
        <div class="x-box-block">
            <img src="/csr/images/FP_CSR_2014_Xmas_1_main-01_09.jpg">
            <a href="#">Potato</a> </div>
        <div class="x-box-block">
            <img src="/csr/images/FP_CSR_2014_Xmas_1_main_02.jpg">
            <a href="#">Potato</a> </div>
*/
    }
    ?>
	</div>
	<div class="h50">
		<!--claearence--></div>
	<div class="form-submit">
		<div class="submit-header">
			<?php echo __("Tell us who you are"); ?>:</div>
				<form action="" method="post" class="x-mas-form">
			<div class="x-mas-left-box">
				<?php 
				echo '<input id="food-name" type="text" name="" value="" class="x-mas-input" placeholder="'.__("Your name").'">'; ?>
				<div class="h10">
				</div>
				<?php 
				echo '<textarea id="food-msg" placeholder="'.__("Your message").'" class="x-mas-texarea"></textarea>'; ?>
			</div>
			<div class="x-mas-right-box">
				<input type="hidden" id="food-id" />
				<div id="give-food" class="submit-button">
					<?php echo __("Submit"); ?></div>
				<div class="h10">
				</div>
				<div id="share-food" class="share-button">
					<?php echo __("Share"); ?></div>
			</div>
		</form>
	</div>
</div>
<div class="toy-donation">
		<div class="food-donation-header">
			<?php echo __("Select your toy donation"); ?>:</div>
		<div class="h10">
			<!--clearence--></div>
		<div class="x-toy-contianer">
		<?php 
		while($row = $toys->fetch_assoc()) {
			$toyDiv = '<div class="x-box-block-toy"><img src="/csr/images/'.$row['image_url'].'">
				<a rel="'.$row['id'].'" href="">'.$row['name'].'</a> </div>';
			echo $toyDiv;
/*			<div class="x-box-block-toy">
				<img src="/csr/images/FP_CSR_2014_Xmas_1_main-01_13.jpg">
				<a href="" >Ball</a> </div>
			<div class="x-box-block-toy">
				<img src="/csr/images/FP_CSR_2014_Xmas_1_main-01_15.jpg">
				<a href="" >Ball</a> </div>
			<div class="x-box-block-toy">
				<img src="/csr/images/FP_CSR_2014_Xmas_1_main-01_17.jpg">
				<a href="" >Ball</a> </div>
			<div class="x-box-block-toy">
				<img src="/csr/images/FP_CSR_2014_Xmas_1_main_04.jpg">
				<a href="">Ball</a> </div>
*/
		}
		?>
		</div>
		<div class="h50">
			<!--claearence--></div>
		<div class="form-submit">
			<div class="submit-header">
				<?php echo __("Tell us who you are"); ?>:</div>
						<form action="" method="post" class="x-mas-form">
				<div class="x-mas-left-box">
					<?php
					echo '<input id="toy-name" type="text" name="" value="" class="x-mas-input" placeholder="'.__("Your name").'">'; ?>
					<div class="h10">
					</div>
					<?php 
					echo  '<textarea id="toy-msg" placeholder="'.__("Your message").'" class="x-mas-texarea"></textarea>'; ?>
				</div>
				<div class="x-mas-right-box">
					<input type="hidden" id="toy-id" />
					<div id="give-toy" class="submit-button">
						<?php echo __("Submit"); ?></div>
					<div class="h10">
					</div>
					<div id="share-toy" class="share-button">
						<?php echo __("Share"); ?></div>
				</div>
			</form>
		</div>
	</div>
	
	</div>
	<input type="hidden" id="donation-made" value=0 />

	<!--end xmas donation-->
	<!--strip-->
	
	<div class="x-mas-other"><?php echo __("What others are saying"); ?></div>
	<div class="x-mas-other fb-comment"><div class="fb-comments" data-href="http://illumineruneame.hellofood.ma/csr" data-width="100%" data-numposts="5" data-colorscheme="light"></div></div>

	<!-- end strip-->
	
	
	<footer>
	
	<div class="x-mas-other" style="border:1px solid #ccc; background:#EDEDEE;"><?php echo __("Feeling hungry?"); ?><span style=" margin-left:30px; padding:5px 50px; font-size:15px;  border-radius:5px; border:1px solid #ccc; font-weight:bold;">
	<a href="" style="color:#666;"><?php echo __("Return to hellofood"); ?></a></span></div>
	
	

	
	
	</div>
	
	</footer>
</div>

<script>

$(function() {
	$('.arrow-icon').click(function (e) {
		$('html, body').animate({scrollTop: $("#target2").offset().top}, 1000);
	});
	$('.arrow-sec').click(function (e) {
		$('html, body').animate({scrollTop: '1600px'}, 500);
	});
	$(window).scroll(function() {
        
        if ($(window).scrollTop() >= $("#target2").offset().top ){
                $(".hide_overlay").hide();
        }
        if ($(window).scrollTop() < $("#target2").offset().top ){
                $(".hide_overlay").show();
        }
    });

});
</script>

<script src="/assets/js/main.js" type="text/javascript" ></script>
<script src="/assets/js/common.js" type="text/javascript" ></script>
<script src="/assets/js/jquery.tooltipster.min.js" type="text/javascript" ></script>

</body>

</html>