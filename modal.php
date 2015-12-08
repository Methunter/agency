

<?php include_once("inc/header.php") ?>	




<div class="row panel">
	<div class="large-8 columns">
		<div class="row">
			<div class="large-4 medium-4  columns">
				<div class=""><img class='floatout'src="images/personFace_03.png" height="351" width="354" alt="">
					<h2>ОЛЬГА ВИНИЧЕНКО</h2>
				</div>
			</div>
			<div class="large-8 medium-8 columns">
				<span class="icon-webtorso">Дата и место рожения: </span><br>27 августа 1975, Кишинёв<br> <span id='age'>37 </span>лет <br><span class="icon-webgraduation-cap">Образование:</span><br> 1. Московское военно-музыкальное училище<br> 2. Служила в оркестре Штаба МВО<br> 3. Закончил Щукинское училище в 2002г. <br> (худ.рук. профессор Пантелеева М.А.)<br> 4. с 2001г. актёр Театра на Таганке <br> <hr>  <span class="icon-<!-- webbank -->">РАБОТЫ В ТЕАТРЕ</span><br> 2013. «Нет лет» 2013 &nbsp<span id="vert"></span>&nbsp поэтический спектакль на стихи Е.Евтушенко <br>2012. «Венецианские близнецы» &nbsp<span id="vert"></span>&nbsp Тонино, Дзанетто<br> 2012. «Калека с острова Инишман» &nbsp<span id="vert"></span>&nbsp Калека Билли<br> 2012. «Театральный роман» &nbsp<span id="vert"></span>&nbsp Дымок
			</div>
		</div>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">

 	$(document).ready(function(){ 
 		$('#age').html("");
 		console.log('Hello');
 	var get_current_age = function(date) {
 		return new Date().getFullYear() - date;
 	};
 $('#age').text("25 ");
 });
 </script>
 <?php include_once('inc/footer.php') ?>