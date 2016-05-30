var close, menuBtn;


window.onload = function(){
	close = document.getElementById('close');
	menuBtn = document.getElementById('main-menu');

	function openWindow()
	{
		var frame = document.getElementById('menuPopUp');
		frame.classList.toggle('toggleHide');

		setTimeout(function(){ 
			frame.classList.toggle('toggleObj'); }
		, 50);
	}

	function closeWindow()
	{
		var frame = document.getElementById('menuPopUp');
		
		frame.classList.toggle('toggleObj')

		setTimeout(function(){ 
			frame.classList.toggle('toggleHide'); }
		, 1000);
	}

	menuBtn.addEventListener('click', openWindow);
	close.addEventListener('click', closeWindow);
}





