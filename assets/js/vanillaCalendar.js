const optionsDay = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' }



//var date=new Date;


var lol=new Date;
function formatDate(newDate) {
    var d = new Date(newDate),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2) month = '0' + month;
    if (day.length < 2) day = '0' + day;

    return [year, month, day].join('/');
}

var newFormatDate=formatDate(lol);
alert(newFormatDate);





  
var vanillaCalendar = {
	month: document.querySelectorAll('[data-calendar-area="month"]')[0],
	next: document.querySelectorAll('[data-calendar-toggle="next"]')[0],
	previous: document.querySelectorAll('[data-calendar-toggle="previous"]')[0],
	label: document.querySelectorAll('[data-calendar-label="month"]')[0],
	activeDates: null,
	date: new Date,
	todaysDate: new Date,
    

	init: function (t) {
		this.options = t, this.date.setDate(1), this.createMonth(), this.createListeners()
	},


	// add  month previous and next 
	createListeners: function () {
		var t = this;
		this.next.addEventListener("click", function () {
			t.clearCalendar();
			//next
			var e = t.date.getMonth() + 1;
			t.date.setMonth(e), t.createMonth()
		}), this.previous.addEventListener("click", function () {
			t.clearCalendar();
			var e = t.date.getMonth() - 1;
			t.date.setMonth(e), t.createMonth()
		})
	},


	createDay: function (t, e, a) {
		var n = document.createElement("div"),
			s = document.createElement("span");
		s.innerHTML = t, n.className = "vcal-date",
		 	// french date 
		n.setAttribute("data-calendar-date", this.date.toLocaleDateString('fr-FR', optionsDay)),
		 1 === t && (n.style.marginLeft = 0 === e ? 6 * 14.28 + "%" : 14.28 * (e - 1) + "%"), 
		   this.options.disablePastDays && this.date < this.todaysDate ? n.classList.add("vcal-date--disabled") : (n.classList.add("vcal-date--active"), 
		   	n.setAttribute("data-calendar-status", "active")), 
		   this.date.toString() === this.todaysDate.toString() && n.classList.add("vcal-date--today"),
		 n.appendChild(s), 
		this.month.appendChild(n)
	},

	// a explorer
	dateClicked: function () {
		var t = this;
		this.activeDates = document.querySelectorAll('[data-calendar-status="active"]');
		for (var e = 0; e < this.activeDates.length; e++)  this.activeDates[e].addEventListener("click", function (e) {
			document.querySelector("#h-modal-date").value = this.dataset.calendarDate, t.removeActiveClass(), this.classList.add("vcal-date--selected")
	
		})
	},
	createMonth: function () {
		for (var t = this.date.getMonth(); this.date.getMonth() === t;) this.createDay(this.date.getDate(), this.date.getDay(), this.date.getFullYear()), this.date.setDate(this.date.getDate() + 1);
		this.date.setDate(1), this.date.setMonth(this.date.getMonth() - 1), this.label.innerHTML = this.monthsAsString(this.date.getMonth()) + " " + this.date.getFullYear(), this.dateClicked()
	},
	monthsAsString: function (t) {
		return ["Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Decembre"][t]
	},
	clearCalendar: function () {
		vanillaCalendar.month.innerHTML = ""
	},
	removeActiveClass: function () {
		for (var t = 0; t < this.activeDates.length; t++) this.activeDates[t].classList.remove("vcal-date--selected")
	}
};



