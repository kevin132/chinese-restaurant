$(document).ready(function(){
	$('.menu').click(function(){
		$('ul').toggleClass('active')
	})
})
function myFunction() {
   var element = document.getElementById("v-cal");
   element.classList.add('hidden');
}



let options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' }
let day= new Date()
let dayNormal= day.toLocaleDateString('fr-FR', options)
document.querySelector("#h-modal-date").value=dayNormal
