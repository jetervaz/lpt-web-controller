
<?php
$fazer=$_GET["set"];
if($fazer){
?>
	<div id=ex class=msg>Executando...<br></div>
<?
	$filename = 'fazer.txt';
	if (is_writable($filename)) {
		if (!$handle = fopen($filename, 'w')) {
			print "Erro abrindo arquivo ($filename)";
			exit;
		}
		if (!fwrite($handle, $fazer)) {
			print "Erro escrevendo no arquivo ($filename)";
			exit;
		}
		fclose($handle);

	} else {
		   print "The file $filename is not writable";
	}
} else {
	echo "<div id=status class='msg'>Enviando comando...<br></div>";
}
$handle = fopen("estado.txt", "r");
while ($estados = fscanf ($handle, "%c%c%c%c%c%c%c%c\n")) {
    list ($st[0], $st[1], $st[2], $st[3], $st[4], $st[5], $st[6], $st[7]) = $estados;
}
 for($i=0;$i<8;$i++){
     if($st[$i]==1){
         echo "<img src='lig.gif' alt='ligado'>";
//		 echo "<input type=button id=est$i value='&nbsp; $i &nbsp;' style='background: #ff9900;' onclick=\"altera($i, 0)\">";
         } else {
         echo "<img src='desl.gif' alt='desligado'>";
//		 echo "<input type=button id=est$i value='&nbsp; $i &nbsp;' style='background: #f0f0f0;' onclick=\"altera($i, 1)\">";
	 }
 }

fclose($handle);
?>
