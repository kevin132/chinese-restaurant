$(document).ready(function(){
	$('.menu').click(function(){
		$('ul').toggleClass('active')
	})
})

/*
let options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' }
let day= new Date()
let dayNormal= day.toLocaleDateString('fr-FR', options)
document.querySelector("#h-modal-date").value=dayNormal

*/