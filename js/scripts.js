var slidecnt=0;
var slides=document.getElementsByClassName('slide');

var changeSlide=function(value){
	for(var i=0;i<slides.length;i++){
		slides[i].className=slides[i].className.replace("visible_slide","");
		console.log(slides[i].className+"");
	}
	slides[value-1].className+=" visible_slide";
	console.log(slides.length);
}