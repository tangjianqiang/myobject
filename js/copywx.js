var touchtime    =0;
var loadingtime  =0;
$(function(){
	
	$(".hong").on({
		touchstart: function(e){
			timeOutEvent = setTimeout("longPress(2)",500);
		}
	});
	$(".hong").on({
		touchend: function(e){
			clearTimeout(timeOutEvent);
		}
	});
	
	longPress(1);
	
	$('.hong').on("copy",function () {		
			window.location.href='weixin://';
	});
});
function longPress(type){
	var isget=0;
	if(loadingtime==0 && type==3){
		loadingtime=1;
		isget=1;
	}
	if(touchtime==0  && (type==2 || type==4)){
		touchtime=1;
		isget=1;
	}
	
	return true;
}

