<!DOCTYPE html>
<?php 
include_once("inc/header.php");
?>

<div class="row">
	<div class="large-12 columns">


		<div class="row">
			<div class="large-3 medium-5 hide-for-small-only columns">
				<div id="mainpic"></div>				
			</div> 
			<div class="large-9 large-uncollapse medium-7 medium-uncollapse small-12   columns">
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
							<a class='reveal-for-medium reveal-for-large large-12 large-uncollapse colunms medium-4 small-2' href='#' data-reveal-id='sayActor'>
								<img class='thumb map-canvas' src='".$dir."/".$file."'  alt='$file'>
							</a>							
							");
					}
				}
				?>



				  <script>
    $(document).foundation();
  </script>
</div>
</div>
</div> 	

</div>









<?php
include_once("inc/footer.php");
?>
