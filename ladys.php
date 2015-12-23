<?php include_once("inc/header.php");?>
<div class="row">
	<div class="large-4 medium-3 hide-for-small-only columns">
		<div id="mainpic"><img src="images/Gothic-ladys-head.jpg" height="1023" width="972" alt="Просто заглушка, в финальной версии будет другая"></div>				
	</div> 
	<div class="large-8 medium-9 small-12 columns">
		<!-- <ul class="  small-up-3 medium-up-5 large-up-7 "> -->
		<ul class="no-bullet large-up-10 medium-up-6 small-up-4  ">
			<?php 
			$dir = "images/"; 
			$folder_list = array();
			find_files_raw($dir, $folder_list);
			$i = 0;
			while ($i++ < count($folder_list)) {
				$file = (string)$folder_list[$i];
				$pos = strpos($file, $filterLadys);
				if($pos !== false){
					print(" 
		<li class='columns' >
			<a id='Modal' href='#' data-open='insertPerson'><img class='thumbnail' src='".$dir."/".$file."'  alt='$file'></a>
		</li>							
						");
				}
			}
			?>
		</ul>
	</div>
</div>
<div class="large reveal" id="insertPerson" data-reveal></div>
<script>
	$("#insertPerson").matterO("inject","new.html");



</script>
<?php include_once("inc/footer.php");?>