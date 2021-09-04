<?php 

function random_string($length){$key='';$keys=array_merge(range(0,9),range('a','z'));for($i=0;$i<$length;$i++){$key.=$keys[array_rand($keys)];}return $key;}

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
   $filename = random_string(10);
   $data = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $_POST['sketch']));
   $exported_file = "drawings/".$filename.".png";
   file_put_contents("../".$exported_file, $data);
   echo $exported_file;
}
else{ die('0'); }

?>