//获取设备宽高，并且在移动端需要配合meta才能有效
		var width = document.documentElement.clientWidth;
		var height = document.documentElement.clientHeight;
		var canvas = document.getElementById('myCanvas');
		var context = canvas.getContext('2d');
		var deg = Math.PI / 180;
		var btns = document.getElementById('btns');
		//将canvas大小设置成全屏
		canvas.width = width;
		canvas.height = height;
		var scaleX = canvas.width/640;
		var scaleY = canvas.height/1136;
		
		function loading(imgArr,fn){
			var length = 0;
			for(var keys in imgArr){
				length++;
			}
			var num = 0;
			var imgObj = {};
			for(var keys in imgArr){
				var img = new Image();
				img.src = imgArr[keys];
				img.onload = (function(key){
					return function(){
						num++;
						imgObj[key] = this;
						var sum = num/length;
						if(fn.progress){
							fn.progress(sum);
						}
						if(num>=length){
							if(fn.complete){
								fn.complete(imgObj);
							}
						}
					}
				})(keys)
			}	
		}
		
		loading({
			"bg":"img/image/背景.png",
			"len":"img/image/len.png",
			"matong":"img/image/matong.png",
			"yun1":"img/image/云1.png",
			"yun2":"img/image/云2.png",
			"yun3":"img/image/云3.png",
			"yun4":"img/image/云4.png",
			"yun5":"img/image/云5.png",
			"dan1":"img/image/dan1.png",
			"dan2":"img/image/dan2.png",
			"suanru":"img/image/乳酸.png",
			"sugar":"img/image/sugar1.png",
			"qtang":"img/image/qtang.png",
			"time":"img/image/30秒.png"
		},{
			complete:main
		})
		
		function main(imgObj){
			function Liwu(img,obj){
				this.img = img;
				this.w = this.img.width*scaleX;
				this.h = this.img.height*scaleY;
				this.x = obj.x + (obj.w - this.w)/2;
				this.y = obj.y + (obj.h - this.h)/2;
				this.speedX = obj.speed;
				this.speedY = 0;
				this.obj = obj;
				this.peng = false;
			}
			Liwu.prototype.draw = function(){
				context.drawImage(this.img,this.x,this.y,this.w,this.h);
				
			}
			Liwu.prototype.move = function(){
				if(!this.peng){
					this.speedX = this.obj.speed;
					this.x += this.speedX;
					this.y += this.speedY;
				}else{
					this.x += this.speedX;
					this.y += this.speedY;
				}
			}
			
			function Yun(obj){
				this.x = obj.x;
				this.y = obj.y;
				this.img = obj.img;
				this.w = this.img.width*scaleX;
				this.h = this.img.height*scaleY;
				this.speed = obj.speed;
//				this.liwu = new Liwu(obj.liwu,this);
			}
			Yun.prototype.draw = function(){
				context.drawImage(this.img,this.x,this.y,this.w,this.h);
//				this.liwu.draw();
			}
			Yun.prototype.move = function(){
				if(this.x<0 || this.x>canvas.width-this.w){
					this.speed *= -1;
				}
				this.x += this.speed;
//				this.liwu.move(this.speed);
			}
	
			function Matong(){
				this.x = 0;
				this.y = 0;
				this.w = imgObj.matong.width*scaleX;
				this.h = imgObj.matong.height*scaleY;
				this.gunlen = canvas.height*0.15;
				this.rotatedeg = 45;
				this.rotatespeed = 1;
				this.gunspeed = 0;
				this.fangxiang = "right";
			}
			Matong.prototype.draw = function(){
				context.save();
				context.translate(canvas.width*0.3828,canvas.height*0.2445);
				context.rotate(this.rotatedeg*deg);
				context.drawImage(imgObj.len,0,0,imgObj.len.width*scaleX,this.gunlen);
				context.drawImage(imgObj.matong,imgObj.len.width*scaleX/2-imgObj.matong.width*scaleX/2,this.gunlen,imgObj.matong.width*scaleX,imgObj.matong.height*scaleY);
				context.restore();
			}
			Matong.prototype.move = function(){
				if(this.rotatedeg>=45){
					this.rotatespeed = -1;
				}else if(this.rotatedeg<=-45){
					this.rotatespeed = 1;
				}
				if(this.gunlen < canvas.height*0.15){
					this.gunlen = canvas.height*0.15;
					this.gunspeed = 0;
					for(var i=0;i<liwuArr.length;i++){
						liwuArr[i].speedX = 0;
						liwuArr[i].speedY = 0;
					}
					if(this.fangxiang == "left"){
						this.rotatespeed = 1;
					}else{
						this.rotatespeed = -1;
					}
				}
				var x = canvas.width*0.3828 - this.gunlen*Math.sin(this.rotatedeg*deg);
				var y = canvas.height*0.2245 + this.gunlen*Math.cos(this.rotatedeg*deg);
				var x1 = x-this.w/2*Math.cos(this.rotatedeg*deg);
				var y1 = y-this.w/2*Math.sin(this.rotatedeg*deg);
				this.x = x1 - this.h*Math.sin(this.rotatedeg*deg);
				this.y = y1 + this.h*Math.cos(this.rotatedeg*deg);
				
				if(this.x<0 || this.x>canvas.width){
					this.gunspeed = -2;
				}
				
				for(var i=0;i<liwuArr.length;i++){
					if(peng(matong,liwuArr[i])){
						liwuArr[i].peng = true;
						this.gunspeed = -2;
						liwuArr[i].speedY = Math.cos(matong.rotatedeg*deg)*matong.gunspeed;
						liwuArr[i].speedX = -Math.sin(matong.rotatedeg*deg)*matong.gunspeed;
//						if(this.gunlen<canvas.height*0.15){
//							this.gunspeed = 0;
//							liwuArr[i].speedX = 0;
//							liwuArr[i].speedY = 0;
//						}
					}
				}
	
//				if(peng(matong,yun1.liwu) || peng(matong,yun2.liwu) || peng(matong,yun3.liwu)){
//					this.gunspeed = -2;
//				}
				
				this.rotatedeg += this.rotatespeed;
				this.gunlen += this.gunspeed;
			}
			
			var matong = new Matong();
			var yunArr = [];
			var imgs = [imgObj.yun1,imgObj.yun2,imgObj.yun3,imgObj.yun4,imgObj.yun5];
			for(var i=0;i<5;i++){
				var img = imgs[i];
				var xArr = [canvas.width*0.2813,canvas.width*0.702,canvas.width*0.345,canvas.width*0.545,canvas.width*0.4038,];
				var yArr = [canvas.height*0.4781,canvas.height*0.6278,canvas.height*0.8278,canvas.height*0.73,canvas.height*0.512];
				var x = xArr[i];
				var y = yArr[i];
				var speed = 2;
				var yun = new Yun({x,y,img,speed});
				yunArr.push(yun);
				console.log(yunArr);
			}
			var liwuArr = [];
			for(var j=0;j<5;j++){
				var liwus = [imgObj.qtang,imgObj.dan1,imgObj.dan2,imgObj.suanru,imgObj.dan1];
				var liwuImg = liwus[j];
				console.log(liwuImg);
				var liwu = new Liwu(liwuImg,yunArr[j]);
				liwuArr.push(liwu);
				console.log(liwuArr);
			}
			
//			var yun1 = new Yun({
//				x:canvas.width*0.2813,
//				y:canvas.height*0.4781,
//				img:imgObj.yun1,
//				speed:2,
//				liwu:imgObj.qtang
//			});
//			var yun2 = new Yun({
//				x:canvas.width*0.345,
//				y:canvas.height*0.6278,
//				img:imgObj.yun2,
//				speed:2,
//				liwu:imgObj.dan1
//			});

			
			function ani(){
				context.clearRect(0,0,canvas.width,canvas.height);
				context.drawImage(imgObj.bg,0,0,canvas.width,canvas.height);
				context.drawImage(imgObj.time,30,100,imgObj.time.width*scaleX,imgObj.time.height*scaleY);
				matong.draw();
				matong.move();
				for(var i=0;i<yunArr.length;i++){
					yunArr[i].draw();
					yunArr[i].move();
				}
				for(var j=0;j<liwuArr.length;j++){
					liwuArr[j].draw();
					liwuArr[j].move();
				}
//				yun1.draw();
//				yun1.move();
//				yun2.draw();
//				yun2.move();
				window.requestAnimationFrame(ani);
			}
			ani();
			
			btns.addEventListener("touchstart",function(e){
				var ev = e || window.event;
				if(matong.rotatespeed>0){
					matong.fangxiang = "left";
				}else{
					matong.fangxiang = "right";
				}
				matong.gunspeed = 2;
				matong.rotatespeed = 0;
				ev.preventDefault();
			},false)
			btns.addEventListener("touchend",function(){
				matong.gunspeed = -2;
				matong.rotatespeed = 0;
			},false)
		}
		
		function peng(obj1,obj2){
			var x1 = obj1.x;
			var l1 = obj1.w + x1;
			var y1 = obj1.y;
			var h1 = obj1.h + y1;
			
			var x2 = obj2.x;
			var l2 = obj2.w + x2;
			var y2 = obj2.y + 15;
			var h2 = obj2.h + y2;
			if(l1>x2&&x1<l2&&h1>y2&&y1<h2){
				return true;
			}else{
				return false;
			}
		}
		
	
		