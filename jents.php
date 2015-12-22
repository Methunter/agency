<?php 
include 'inc/header.php';
?>
<div class="row">
	<div class="large-12 columns">


		<div class="row">
			<div class="large-3 medium-4 small-6 columns">
				<div id="mainpic"></div>				
			</div> 
			<div class="large-9 medium-8 small-6 columns">
				<?php 
				$dir = "images/";
				$folder_list = array();
				find_files_raw($dir, $folder_list);
				$i = 0;
				while ($i++ < count($folder_list)) {
					$file = (string)$folder_list[$i];
					$pos = strpos($file, $filterMen);
					if($pos !== false){
						print(" 
							<a class='large-12 colunms medium-4 small-3' href='#'>
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










<?php
include_once("inc/footer.php");
?>
