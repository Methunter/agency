<div class="row">
<div class="icon-bar five-up">
	</style>
	<?php 
	while ( $i++ < count($topBarContent)) {
		print_r('<a href="'.$pagination[$i].'" class="item line"><label class="">'.$topBarContent[$i].'</label></a>');
	}
	?>
</div>
</div>
	
<script>
	$(".item.line").matter("enlight");
</script>