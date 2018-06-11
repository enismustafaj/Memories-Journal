var canvas=document.getElementById("canvas");
var context=canvas.getContext("2d");
var radius=10;

canvas.width=window.innerWidth;
canvas.height=window.innerHeight;
context.lineWidth=2*radius;
var drag=false;
var putShape=function(e){
	if(drag){
		context.lineTo(e.clientX,e.clientY);
		context.stroke();
	context.beginPath();
	context.arc(e.clientX,e.clientY,radius,0,Math.PI *2);
	context.fill();
	context.beginPath();
	context.moveTo(e.clientX,e.clientY);
}
}
var engage=function(e){
	drag=true;
	putShape(e);
}
var disengage=function(e){
	drag=false;
	context.beginPath();
}
canvas.addEventListener("mousedown",engage);
canvas.addEventListener("mousemove",putShape);
canvas.addEventListener("mouseup",disengage);