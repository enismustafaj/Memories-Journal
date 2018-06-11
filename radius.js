var setrad = function(newrad){
	if(newrad<minrad){
		newrad=minrad;
	}
	else if (newrad>maxrad) {newrad=maxrad;}

	radius=newrad;
	context.lineWidth=2*radius;
	radspan.innerHTML=radius;

}
var interval=1;
var minrad=0.5,
maxrad=100,
defaultrad=20,
radspan=document.getElementById("radval");
var decrad=document.getElementById("decrad");
var incrad=document.getElementById("incrad");

decrad.addEventListener("click",function(){
	setrad(radius-interval);
});
incrad.addEventListener("click",function(){
	setrad(radius+interval);
});