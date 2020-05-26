// script retirado de: http://phpbrasil.com/articles/article.php/pagerRow/1/id/992

var req;
var set='';
var pos='';
var estado='';

function loadXMLDoc(url)
{
    req = null;
    // Procura por um objeto nativo (Mozilla/Safari)
    if (window.XMLHttpRequest) {
        req = new XMLHttpRequest();
        req.onreadystatechange = processReqChange;
        req.open("GET", url, true);
        req.send(null);
    // Procura por uma versão ActiveX (IE)
    } else if (window.ActiveXObject) {
        req = new ActiveXObject("Microsoft.XMLHTTP");
        if (req) {
            req.onreadystatechange = processReqChange;
            req.open("GET", url, true);
            req.send();
        }
    }
}

function processReqChange()
{
    // apenas quando o estado for "completado"
    if (req.readyState == 4) {
        // apenas se o servidor retornar "OK"
        if (req.status == 200) {
            // procura pela div id="news" e insere o conteudo 
            // retornado nela, como texto HTML
            document.getElementById('estados').innerHTML = req.responseText;
        } else {
            alert("Houve um problema ao obter os dados:\n" + req.statusText);
        }
    }
}

function mensagem(msg){
document.getElementById('status').style.visibility="visible";
document.getElementById('status').innerHTML=msg;
}

function altera(pos, estado){
mensagem("Enviando...");
set=pos + " " + estado;
}

function atualiza()
{
    loadXMLDoc("control.php?set=" + set);
    set='';
}

// Recarrega a cada 60000 milissegundo (60 segundos)
setInterval("atualiza()", 3000);
