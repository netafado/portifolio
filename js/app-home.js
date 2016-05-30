var section, nav;
section = document.getElementById('menu-icons');

function getFullHeight(){
	//get full height e add px at the end
	nav = document.getElementById('nav');
	var number = window.innerHeight - nav.offsetHeight;
	var height = number + 'px';
	section.style.height = height;
}



window.addEventListener('resize', getFullHeight);
window.addEventListener('load', getFullHeight);