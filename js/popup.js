var popup = document.getElementById('popup');
var btn = document.getElementById('myBoton');
var cerrar = document.getElementById('close');

btn.onclick = function(){
	popup.style.display = "block";
}

window.onclick = function(){
	if (event.target == popup) {
		popup.style.display = "none";
	};
}

cerrar.onclick = function(){
	popup.style.display = "none";
}