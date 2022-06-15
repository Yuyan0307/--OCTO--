var jsimg=new Array("images/0.jpg","images/0.jpg","images/0.jpg","images/0.jpg","images/0.jpg");
var imgLen=jsimg.length;
var i=0;
setInterval("playimg()",2000);
function playimg(){
	document.getElementById("mydiv").innerHTML="<center><img src='"+jsimg[i]+"'</center>>";
	i++;
	if(i>=imgLen) i=0;
}