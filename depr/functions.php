<?php	

$filterLadys="ladysThumbs";
$filterMen="menThumbs";

function find_files_raw($dir, &$dir_array)
{
    // Create array of current directory
    $files = scandir($dir);
    
    if(is_array($files)){
        foreach($files as $val){
            // Skip home and previous listings
            if($val == '.' || $val == '..')
                continue;
            
            // If directory then dive deeper, else add file to directory key
            // if(is_dir($dir.'/'.$val)){
            //     // Add value to current array, dir or file
            //     $dir_array[$dir][] = $val;
                
            //     find_files($dir.'/'.$val, $dir_array);
            // }
            // else{
                $dir_array[] = $val;
            // }
        }
    }
    ksort($dir_array);
}
function find_files_with_dir($dir, &$dir_array)
{
    // Create array of current directory
    $files = scandir($dir);
    
    if(is_array($files))
    {
        foreach($files as $val)
        {
            // Skip home and previous listings
            if($val == '.' || $val == '..')
                continue;
            
            // If directory then dive deeper, else add file to directory key
            if(is_dir($dir.'/'.$val))
            {
                // Add value to current array, dir or file
                $dir_array[$dir][] = $val;
                
                find_files($dir.'/'.$val, $dir_array);
            }
            else
            {
                $dir_array[$dir][] = $val;
            }
        }
    }
    ksort($dir_array);
}

?>
<?php 
$topBarContent = array(	1 => 'АКТЁРСКОЕ АГЕНТСТВО' ,
						2 => 'МУЖЧИНЫ' ,
						3 => 'ЖЕНЩИНЫ'  ,
						4 => 'КОНТАКТЫ'  );
$pagination = array (	1 => 'index.php' ,
						2 => 'male.php' ,
						3 => 'female.php'  ,
						4 => 'contacts.php'  );
 ?>