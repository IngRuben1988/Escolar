/////////////////////////buscar a alumnos ///////////////////////
function loadXMLDoc()
{
var xmlhttp;
var n=document.getElementById('bus').value;
if(n==''){
document.getElementById("myDiv").innerHTML="";
return;
}
   if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
   xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
   xmlhttp.onreadystatechange=function()
{
   if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
}


}
xmlhttp.open("POST","proc.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("q="+n);
}

function loadXMLDoc_orden()
{
var xmlhttp;

var m=document.getElementById('busorden').value;

if( m==''){
document.getElementById("myorden").innerHTML="";
return;
}

if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("myorden").innerHTML=xmlhttp.responseText;
}


}
xmlhttp.open("POST","proc_orden.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("p="+m);
}