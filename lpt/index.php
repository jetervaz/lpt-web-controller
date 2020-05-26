<html><head>
<title> LPT Web controller </title>
<link rel=stylesheet type=text/css href=style.css>
<script src='script.js'></script>
</head>
<body>
<!--<h1> LPT Web controller</h1>-->
<h1><img src="lpt2.jpg" alt="lpt"></h1>
<div id=estados>
Carregando...
</div>
<div id=controle>
<b>Controle</b><br>
<select id='sel'>
<option value="15"> Todos os pinos </option>
<option value="0"> Pino 0 </option>
<option value="1"> Pino 1 </option>
<option value="2"> Pino 2 </option>
<option value="3"> Pino 3 </option>
<option value="4"> Pino 4 </option>
<option value="5"> Pino 5 </option>
<option value="6"> Pino 6 </option>
<option value="7"> Pino 7 </option>
</select>
<input type=button value="Ligar" onclick="altera(document.getElementById('sel').value, 1)">
<input type=button value="Desligar" onclick="altera(document.getElementById('sel').value, 0)">
</div>
<span style="float: right; margin-right: 10px;">&copy; 2006 by <a href="http://jetervaz.wordpress.com">J&eacute;ter Vaz</a>.</span>
<img src="lig.gif" alt="ligado"> Ligado &nbsp; 
<img src="desl.gif" alt="desligado"> Desligado 
</body></html>
