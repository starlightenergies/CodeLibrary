/*
*
* author: 		James Danforth
* created: 		2021-02-24
* last update: 	2021-02-26
* purpose:		draws circle
* todo:			animation, calculate points on circle with trig/calculus
* 				instead of using fixed numbers
*
*/


function draw() {

	var canvas = document.getElementById('circle');
	if (canvas.getContext)	{
		var ctx = canvas.getContext('2d');
		var X = canvas.width / 2;
		var Y = canvas.height / 2;
		var R = 180;
		ctx.beginPath();
		ctx.arc(X, Y, R, 0, 2 * Math.PI, false);
		ctx.lineWidth = 6;
		ctx.strokeStyle = '#41AB1C';
		ctx.fillStyle = '#FFFFFF';
		ctx.fill();
		ctx.stroke();

		var x,y;
		//declare points in circle
		var center = { x: X, y: Y};
		var point1 = { x: 240, y: 60};
		var point2 = { x: 60, y: 240};
		var point3 = { x: 240, y: 420};
		var point4 = { x: 420, y: 240};
		var point5 = { x: 420, y: 240};
		var point6 = { x: 330, y: 150};
		var point7 = { x: 150, y: 150};
		var point8 = { x: 150, y: 330};
		var point9 = { x: 330, y: 330};

		//object of objects next
		var PointsA = { point1,point2,point3,point4,point7,point6,point8,point9};
		var PointsB = { point1,point2,point3,point4};
		var PointsC = { point2,point3,point4,point1};
		ctx.strokeStyle = '0000FF';
		ctx.beginPath();
		ctx.lineWidth = 3;

		var a;
		for (a in PointsA) {
			ctx.moveTo(center.x,center.y);
			ctx.lineTo(PointsA[a].x,PointsA[a].y);
			ctx.stroke();
		}

		var y,z = 0;
		for (z=0; z<5;z+=5){
			for (x in PointsB) {
				ctx.moveTo(PointsB[x].x,PointsB[x].y);
				for (y in PointsC) {
					ctx.lineTo(PointsC[y].x,PointsC[y].y);
				}
				ctx.stroke();
			}
		}

		//fill in a triangle
		//ctx.beginPath();
		//polygon(ctx,3,200,120,200);
		//ctx.lineTo(point1.x,point1.y);
		//ctx.lineTo(point7.x,point7.y);
		ctx.fillStyle = '#FFE24F';
		ctx.fill();
		ctx.stroke();

		//radians: 1° = π/180° = 0.005555556π = 0.01745329252 rad.
		/*
		//var i = 2 * Math.PI;
		//var x = i / 1000;
		//var milliseconds = 1000;
		//const date = Date.now();
		//while (x < 1000) {
	//		currT = Date.now();
	//		var a = Math.cos(i/100) * R;
	//		var b = Math.sin(i/100) * R;
	//		a += X;
	//		b += Y;
	//		ctx.moveTo(center.x,center.y);
	//		ctx.lineTo(a,b);
	//		ctx.stroke();
	//		x -= 1;
	//		while (currT - date < milliseconds);
	//	}
	//
	*/
	}

} //end of func

function sleep(milliseconds) {
  const date = Date.now();
  let currentDate = null;
  do {
    currentDate = Date.now();
  } while (currentDate - date < milliseconds);
}

function polygon(ctx,n,x,y,r,angle,counterclockwise) {
	angle = angle || 0;
	counterclockwise = counterclockwise || false;
	ctx.moveTo(x + r*Math.sin(angle),y - r*Math.cos(angle));
	var delta = 2*Math.PI/n;
	for(var i = 1; i < n; i++) {
		angle += counterclockwise?-delta:delta;
		ctx.lineTo(x + r*Math.sin(angle),y-r*Math.cos(angle));
	}
	ctx.closePath();
}