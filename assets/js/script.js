	$(document).ready(function(){
	$('.menu').click(function(){
		$('ul').toggleClass('active')
	})
})
function myFunction() {
   var element = document.getElementById("v-cal");
   element.classList.add('hidden');
}


var tableTime=['12:00','12:30','13:00','13:30','14:00','14:30']

var text=""
var i


/* create new div and put date inside */


function Time(){
   var i
   var timeReservation=document.getElementById("timeReservation")
   var timeReservationClass=timeReservation.querySelectorAll('div.mealsReservation')
   
   for(i=0;i<timeReservationClass.length;i++)
   {
   timeReservationClass[i].style.color="red";
  }
}
Time();

/*
function createTimeList{
	var timeReservation=document.querySelector('#timeReservation')
    var timeMealsClass=timeReservation.getElementsByClassName('mealsReservation')
    var createList=document.createElement("li")
     timeMealsClass
    for(i=0;i<tableTime.length;i++){
	text+=tableTime[i]+" "
	
}
timeMealsClass.innerHTML=text
     createList.createTextNode(text)

}
*/