<?php
$dir = './your_shortcut';
$files = scandir($dir);
$i = '';
foreach($files as $file) {
    if($file != "." && $file != '..'){
        $f = fopen($dir.'/'.$file, 'r');
        $readfile = fread($f, filesize($dir.'/'.$file));
        $text2 = str_replace('http://', 'http://mywebsite.ma/13784879/', $readfile);
        $x = fopen('new_shortcut/'.'new' . $file, 'w');
        fwrite($x, $text2);
        fclose($f);
        fclose($x);
        $i++;
        echo $i.') '.$file.' - complete'.'<br>';
    }
}
echo '<p style="color:red;">'.'The result is  in the root "new_shortcut" of the website root directory!!!!'.'</p>';


