function loading(imgs,obj){
	var loadedImgs = {};
	var len = 0;
	for (var i in imgs){
		
		len++;
	}
	var num = 0;
	for (var i in imgs){
		var imgObj = new Image();
		imgObj.src = imgs[i];
		imgObj.onload = (function (i){
			
			return function (){
				loadedImgs[i]=this;
				num++;
				var scale = (num/len).toFixed(2)*100;
				if (obj.progress){
					obj.progress(scale);
				}
				if (num>=len){
					if (obj.complete){
						obj.complete(loadedImgs);
					}
				}
			}
		})(i);
	}
}
