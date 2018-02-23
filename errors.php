<!-- Start Notifications-->
<?php  if (count($errors) > 0) : ?>	
	<div class="notification error png_bg">
		<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
		<div>
			<?php foreach ($errors as $error) : ?>
				<!--msg to show in notification-->
				<?php echo "$error" ?> 
			<?php endforeach ?>
		</div>
	</div><br/>
<?php  endif ?>
<!-- End Notifications -->