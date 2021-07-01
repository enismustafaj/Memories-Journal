var colors=["white","black","grey","yellow","red","blue","green","violet","purple","orange"];
for(var i=0,n=colors.length;i<n;i++){
	var swatch=document.createElement("div");
swatch.className="swatch";
swatch.style.backgroundColor=colors[i];
swatch.addEventListener("click",setswatch);
document.getElementById("colors").appendChild(swatch);
}
function setcol(color){
context.fillStyle=color;
context.strokeStyle=color;

}
function setswatch(e){
var swatch=e.target;
setcol(swatch.style.backgroundColor);

}