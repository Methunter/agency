<?php 
include_once('inc/header.php');
?>
<div class="row push-down-1">

		<div class="row">
			<ul class="large-centered large-10 large-up-6 large-uncollapse medium-12 medium-up-5 medium-uncollapse  medium-centered small-12 small-up-4   columns no-bullet">
				<?php 
// 					large-centered large-9 large-uncollapse medium-centered medium-uncollapse small-12 small-uncollapce small-centered columns
				$dir = "images/";
				$folder_list = array();
				find_files_raw($dir, $folder_list);
				$i = 0;
				while ($i++ < count($folder_list)) {
					$file = (string)$folder_list[$i];
					$filter="ladys";
					$pos = strpos($file, $filter);
					if($pos !== false){
						print(" 
							<li class='column'><a href='#'>
								<img class='thumbnail' src='".$dir."/".$file."'  alt='$file'>
							</a></li>							
							");
					}
				}
				?>
			</ul>
		</div>
    
</div>
<script>


	var doc = document.documentElement;
	doc.setAttribute('data-useragent', navigator.userAgent);
</script>
<?php
include_once("inc/footer.php");
?>
