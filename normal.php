<!-- Start Notifications-->
<?php  if (count($notify) > 0) : ?>
	<div class="notification information png_bg">
		<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
		<div>	
			<?php foreach ($notify as $noti) : ?>
				<!--msg to show in notification-->
				<?php echo "$noti" ?> 
			<?php endforeach ?>
		</div>
	</div><br/>
<?php  endif ?>
<!-- End Notifications -->