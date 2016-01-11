<?php
/**
 * CoffeeCup Software's Web Form Builder.
 *
 * Methods on MySQL for accessing saved data.
 *
 *
 * @version $Revision: 2456 $
 * @author Cees de Gruijter
 * @category FB
 * @copyright Copyright (c) 2012 CoffeeCup Software, Inc. (http://www.coffeecup.com/)
 */
// require_once($_SERVER['DOCUMENT_ROOT']."/test_form-builder/fbapp/php/datasave.cls.php");
// require_once($_SERVER['DOCUMENT_ROOT']."/test_form-builder/fbapp/php/datasavemysql.cls.php");


class GetMysqlData extends DataSaveMySQL  {


	function __construct ( $cfg_section ) {
		parent::DataSaveMySQL( $cfg_section );
	}
	function ImHere (){
		echo "I'm here)";
		return true;
	}
	static function sshow ($string = ''){
		echo "</br>";
		echo ($db )?  "Method: ". $string."db: ".$db."</br>"  :  "No db is set</br>";
		echo ($table) ?  "Method: ". $string."table: ".$table."</br>" : "No table is set</br>";
		echo ($fields) ?  "Method: ". $string."fields: ".$fields."</br>" : "No fields is set</br>";
		echo ($outputfields) ?  "Method: ". $string."outputfields: ".$outputfields."</br>" : "No outputfields is set</br>";
		echo ($lastrowid) ?  "Method: ". $string."lastrowid: ".$lastrowid."</br>" : "No lastrowid is set</br>";
		echo ($cfg_section) ?  "Method: ". $string."cfg_section: ".$cfg_section."</br>" : "No cfg_section is set</br>";
		echo "</br>";
	}
}

?>