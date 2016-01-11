<?php
include_once("inc/header.php");
$scriptpath = $_SERVER['DOCUMENT_ROOT'] ;

?>


<div class="row ">
  <div class=" columns">
    <ul class="tabs " id="example-tabs" data-tabs>
      <li class="tabs-title is-active"><a href="#error" aria-selected="true">server error_log</a></li>
      <li class="tabs-title"><a href="#access">server access_log</a></li>
      <li class="tabs-title"><a href="#officina">Officina error</a></li>
    </ul>
    </div>
    <div class=" columns">
    <div class="tabs-content " data-tabs-content="example-tabs">
      <div class="tabs-panel is-active" id="error">
        <?php
	        echo "<table style='color:black; background: #251e8f; ' class='scroll colunms'>";
	        echo "<thead style='color:white; background: #251e8f;'>";
	        echo "<th>date</th>";
	        echo "<th>Type</th>";
	        echo "<th>Client</th>";
	        echo "<th>text</th><thead>";
	$lines = file('/private/var/log/apache2/officina.m32sa.com-error_log');
	if (false === $lines)	die('Не могу прочитать файл');
	
	echo("<tbody>");
	foreach ($lines as $line) {
		if(preg_match("/\[(\w{3} \w{3} \d\d \d\d:\d\d:\d\d).\d\d\d\d\d\d (\d{4})\] \[(.{0,}\:error)] \[pid ([0-9]{3,8})\] \[.{6}( \b(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\b:[0-9]{3,8})\](.{0,})/is", $line, $match)){
		echo ("<tr><td>".$match[1]." ".$match[2]."</td>");
		echo "<td>".$match[3]."</td>";
		echo "<td>".$match[5]."</td>";
		echo "<td>".$match[6]."</td></tr>";
// 		echo("<th><td>". htmlspecialchars($line)."</td>");
}
	}
		echo("</tbody></table>");

        ?>
      </div>
      <div class="tabs-panel" id="access">
        <?php
	        echo "<table style='color:black; background: #251e8f; ' class='columns '>";
	        echo "<thead style='color:white; background: #251e8f;'>";
	        echo "<th>IP</th>";
	        echo "<th>Date</th>";
	        echo "<th>Request</th>";
	        echo "<th>Response</th>";
	        echo "</thead>";
	$lines = file('/private/var/log/apache2/officina.m32sa.com-access_log');
	if (false === $lines)	die('Не могу прочитать файл');
	
	echo("<tbody>");
	foreach (array_slice($lines, -15)  as $line) {
		if(preg_match("/(\d{1,3}.\d{1,3}.\d{1,3}.\d{1,3}).{0,}\[([0-3][0-9][\/][A-Z][a-z][a-z]\/[0-9]{4}[:]\d\d:\d\d:\d\d) (.)(....)\] [\"](.{0,})[\"] (\d\d\d)/is", $line, $match)){
		echo "<tr>";
		echo "<td>".$match[1]."</td>";
		echo "<td>".$match[2]."</td>";
		echo "<td>".$match[5]."</td>";
		echo "<td>".$match[6]."</td>"; 
		echo "</tr>";// <td>".$match[3]."</td><td>".$match[4]."</td> [3]+; [4] 0300 
// 		echo("<th><td>". htmlspecialchars($line)."</td>");
}
	}
		echo("</tbody></table>");

        ?>      </div>
      <div class="tabs-panel" id="officina">
        <?php
	        echo "<table style='color:black; background: #251e8f; ' class=' colunms'>";
	        echo "<thead style='color:white; background: #251e8f;'>";
	        echo "<th>Date</th>";
	        echo "<th>Text</th>";
	        echo "</thead>";
	$lines = file($scriptpath.'officina/storage/fb_error.log.php');
	if (false === $lines)	die('Не могу прочитать файл');
	echo("<tbody>");
	foreach (array_slice($lines, -15) as $line) {
		if(preg_match("/(\d\d [A-Z][a-z][a-z] \d{4} \d\d:\d\d:\d\d) \+....\: (.{0,})/i", $line, $match)){
		echo ("<tr>");
		echo "<td>".$match[1]."</td>";
		echo "<td>".$match[2]."</td></tr>";
// 		echo("<th><td>". htmlspecialchars($line)."</td>");
}
	}
		echo("</tbody></table>");

        ?>      
        </div>
    </div>
  </div>
</div>
<?php
		include_once("inc/footer.php");

?>