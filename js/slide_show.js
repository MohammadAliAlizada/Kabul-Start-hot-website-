
var image = document.getElementById("img");
var img   = document.getElementById("top");
var img2 = document.getElementById("bottom");
var pics = [ 'images/1.jpg',  'images/2.jpg',  'images/3.jpg',  'images/4.jpg'];
var top_pic  = ['images/foods/a.JPG', 'images/foods/b.JPG', 'images/foods/c.JPG', 'images/foods/d.JPG', 'images/foods/e.JPG', 'images/foods/f.JPG', 'images/foods/g.JPG' ];
var bot_pic  = ['images/foods/1.jpg', 'images/foods/2.jpg', 'images/foods/3.jpg', 'images/foods/4.jpg', 'images/foods/5.jpg', 'images/foods/6.jpg', 'images/foods/7.jpg'];

var index = 0;
function chang_image() {
	image.setAttribute('src', pics[index]);
	index++;
	
	if(index>=pics.length) {
		index = 0;
	}
}

function rohullah() {
	setInterval(chang_image, 2000);
}
function slide_show() {
	img.setAttribute('src', top_pic[index]);
	img2.setAttribute('src', bot_pic[index]);
	index++;
	
	if(index>=top_pic.length) {
		index = 0;
	}
}
function top_slide() {
	setInterval(slide_show, 2000);
}