<?php 
include_once('inc/header.inc');
?>
<div class="row">
	<div class="large-12 columns">
		<div class="row">
			<div class="large-centered large-9 large-uncollapse medium-centered medium-uncollapse small-12 small-uncollapce small-centered columns">
				<?php 
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
							<a class='large-12 large-uncollapsecolunms medium-4 small-3' href='#'>
								<img src='".$dir."/".$file."'  alt='$file'>
							</a>							
							");
					}
				}
				?>
			</div>
		</div>
	</div>     
</div>
<script>


	var doc = document.documentElement;
	doc.setAttribute('data-useragent', navigator.userAgent);
</script>
<?php
include_once("inc/footer.inc");
?>
