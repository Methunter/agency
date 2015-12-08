<?php 
include_once("inc/header.inc");
?>
<div class="row">
	<div class="large-12 columns">


		<div class="row">
			<div class="large-3 medium-5 small-12  columns">
				<div id="mainpic"></div>				
			</div> 
			<div class="large-9 large-uncollapse medium-7 medium-uncollapse small-12 small-uncollapce  columns">
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
							<a class='large-12 large-uncollapsecolunms medium-4 small-3' href='#' data-reveal-id='myModal'data-toggle='myModal'>
								<img class='thumb' src='".$dir."/".$file."'  alt='$file'>
							</a>							
							");
					}
				}
				?>
				<!-- Not Mine -->
				<div id="myModal" class="reveal-modal remove-whitespace" data-reveal>

				 <div id="myModal" class="reveal-modal reveal" data-reveal aria-labelledby="about Actor" aria-hidden="true" role="dialog"> 
					<div class="row panel">
						<div class="large-8 columns">
							<div class="row">
								<div class="large-4 medium-4  columns">
									<div class=""><img class='floatout'src="images/personFace_03.png" height="351" width="354" alt="">
									<h3>ОЛЬГА ВИНИЧЕНКО</h3>
									</div>
								</div>
								<div class="large-8 medium-8 columns">
									<span class="icon-webtorso">Дата и место рожения: </span><br>27 августа 1975, Кишинёв<br> <span id='age'>37 </span>лет <br><span class="icon-webgraduation-cap">Образование:</span><br> 1. Московское военно-музыкальное училище<br> 2. Служила в оркестре Штаба МВО<br> 3. Закончил Щукинское училище в 2002г. <br> (худ.рук. профессор Пантелеева М.А.)<br> 4. с 2001г. актёр Театра на Таганке <br> <hr>  <span class="icon-<!-- webbank -->">РАБОТЫ В ТЕАТРЕ</span><br> 2013. «Нет лет» 2013 &nbsp<span id="vert"></span>&nbsp поэтический спектакль на стихи Е.Евтушенко <br>2012. «Венецианские близнецы» &nbsp<span id="vert"></span>&nbsp Тонино, Дзанетто<br> 2012. «Калека с острова Инишман» &nbsp<span id="vert"></span>&nbsp Калека Билли<br> 2012. «Театральный роман» &nbsp<span id="vert"></span>&nbsp Дымок
								</div>
							</div>
						</div>
					</div>
					<a class="close-reveal-modal" aria-label="Close">&#215;</a>
				</div>

				<!-- Not Mine -->
				
<!--
				var $modal = $('#modal');

				$.ajax({'/url'})
					.done(function(resp){
					$modal.html(resp.html).foundation('open');
				});
-->
			</div>
		</div>
	</div> 	

</div>









<?php
include_once("inc/footer.inc");
?>
