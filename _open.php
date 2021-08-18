<?
   if (substr(phpversion(),0,1)=="5") {
	if ($WS_error==1) {mysql_close ($connect);}
   } else
   if (substr(phpversion(),0,1)=="7") {
	if ($WS_error==1) {mysqli_close ($connect);}
   }
?>
