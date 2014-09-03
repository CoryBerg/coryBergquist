(function () {
	var requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
	window.requestAnimationFrame = requestAnimationFrame;
})();

var canvas = document.getElementById('canvas'),
	ctx = canvas.getContext('2d'),
	width = window.innerWidth-17,
	height = window.innerHeight-125,
	pipeImg = new Image(),
	menuImg = new Image(),
	keys = [],
	friction = 0.9,
	gravity = 0.4,
	boxes = [],
	player = {
		x: 130,
		y: height-125,
		width: 75,
		height: 100,
		speed: 6,
		velX: 0,
		velY: 0,
		jumping: false,
		grounded: false,
		image: new Image()
	},
	pw = player.width,
	ph = player.height,
	freeze = false;

player.image.src = 'images/mario_me.png';
pipeImg.src = 'images/pipe.png';
menuImg.src = 'images/cbMenu.png';

ctx.drawImage(player.image, player.x, player.y);

// Floor
boxes.push({
	x: -5,
	y: height,
	width: width+10,
	height: 10
});

// Pipes
boxes.push({
	x: (width/2)-100,
	y: height-116,
	width: 100,
	height: 116
});
boxes.push({
	x: (width/2)+150,
	y: height-116,
	width: 100,
	height: 116
});
boxes.push({
	x: (width/2)+400,
	y: height-116,
	width: 100,
	height: 116
});
 
canvas.width = width;
canvas.height = height;

ctx.save();

function update() {
	checkKeys();

	player.velX *= friction;

	ctx.clearRect(0, 0, width, height);
	ctx.beginPath();
	
	drawText();
	ctx.drawImage(menuImg, (width/2)-(height/4), 100, (height/2), (height/4));
	ctx.drawImage(player.image, player.x, player.y, pw, ph);
	
	player.grounded = false;
	
	checkBoxes();

	if(player.grounded){
		player.velY = 0;
	}
	else {
		player.velY += gravity;
		player.y += player.velY;
	}
	player.x += player.velX;
	if (player.x >= width-player.width) {
		player.x = width-player.width;
	}
	else if (player.x <= 0) {
		player.x = 0;
	}
	
	requestAnimationFrame(update);
}

function checkKeys() {
	// A
	if (keys[65]) {
		if (player.velX > -player.speed) {
			player.velX -= 1;
		}
	}
	// D
	if (keys[68]) {
		if (player.velX < player.speed) {
			player.velX += 1;
		}
	}
	// W
	if (keys[87]) {
		if (!player.jumping && player.grounded) {
			player.jumping = true;
			player.grounded = false;
			player.velY = -player.speed * 2;
		}
	}
}

function drawText() {
	ctx.fillStyle = '#000';
	ctx.font = 'bold 2.0em sans-serif';
	ctx.textBaseline = 'bottom';
	ctx.fillText('A/D = Left/Right', 75, 100);
	ctx.fillText('W = Jump', 75, 135);
	ctx.fillText('D = Crouch', 75, 170);
	ctx.fillText('Resume', (width/2)-113, height-175);
	ctx.fillText('Portfolio', (width/2)+133, height-175);
	ctx.fillText('Contact', (width/2)+387, height-175);
}

function checkBoxes() {
	for (var i = 0; i < boxes.length; i++) {
		if(i == 0) boxes[i].y = height;
		else boxes[i].y = height-116;
		ctx.drawImage(pipeImg, boxes[i].x, boxes[i].y, boxes[i].width, boxes[i].height);

		var dir = colCheck(player, boxes[i]);

		if (dir === 'l' || dir === 'r') {
			player.velX = 0;
			player.jumping = false;
		}
		else if (dir === 'b') {
			player.grounded = true;
			player.jumping = false;
			
			if(i > 0 && keys[83]) {
				freeze = true;
				goDownPipe(i);
			}
		}
		else if (dir === 't') {
			player.velY *= -1;
		}
	}
}
 
function colCheck(shapeA, shapeB) {
	// get the vectors to check against
	var vX = (shapeA.x + (shapeA.width / 2)) - (shapeB.x + (shapeB.width / 2)),
		vY = (shapeA.y + (shapeA.height / 2)) - (shapeB.y + (shapeB.height / 2)),
		// add the half widths and half heights of the objects
		hWidths = (shapeA.width / 2) + (shapeB.width / 2),
		hHeights = (shapeA.height / 2) + (shapeB.height / 2),
		colDir = null;
 
	// if the x and y vector are less than the half width or half height, they we must be inside the object, causing a collision
	if (Math.abs(vX) < hWidths && Math.abs(vY) < hHeights) {
		// figures out on which side we are colliding (top, bottom, left, or right)
		var oX = hWidths - Math.abs(vX),
			oY = hHeights - Math.abs(vY);
		
		if (oX >= oY) {
			if (vY > 0) {
				colDir = 't';
				shapeA.y += oY;
			}
			else {
				colDir = 'b';
				shapeA.y -= oY;
			}
		}
		else {
			if (vX > 0) {
				colDir = 'l';
				shapeA.x += oX;
			}
			else {
				colDir = 'r';
				shapeA.x -= oX;
			}
		}
	}
	return colDir;
}

function goDownPipe(pipe) {
	var st = setInterval(function() {
			if(player.height >= 0) {
				player.height -= 1;
			}
		}, 10);

	if(pipe == '1') {
		setTimeout(function() {
				clearInterval(st);
				$('#resume').goTo();
			}, 1150);
	}
	if(pipe == '2') {
		setTimeout(function() {
				clearInterval(st);
				$('#portfolio').goTo(); 
			}, 1100);
	}
	if(pipe == '3') {
		setTimeout(function() {
				clearInterval(st);
				$('#contact').goTo(); 
			}, 1100);
	}
}

(function($) {
    $.fn.goTo = function() {
        if($(this).offset().top) {
			$('html, body').animate({
				scrollTop: $(this).offset().top
			}, 800);
		}
        return this;
    }
})(jQuery);
 
document.body.addEventListener('keydown', function (e) {
	if(!freeze) {
		if(e.keyCode == 65 || e.keyCode == 68 || e.keyCode == 83 || e.keyCode == 87) {
			e.preventDefault();
		}
		keys[e.keyCode] = true;
	}
});
 
document.body.addEventListener('keyup', function (e) {
	keys[e.keyCode] = false;
});
 
window.addEventListener('load', function () {
	update();
});

window.addEventListener('resize', function() {
	player.y += window.innerHeight-125 - height;

	width = window.innerWidth-17;
	height = window.innerHeight-125;
		
	canvas.width = width;
	canvas.height = height;	
});