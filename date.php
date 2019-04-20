<!DOCTYPE html>
<html>
<head>
    <?php
     include 'navbar.php';
    ?>
	<title>Membuat Jam Digital Dengan Javascript - www.malasngoding.com</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body background="gambar/doodles.png">
	<style type="text/css">
 
	h1,h2,p,a{
		font-family: sans-serif;
		font-weight: normal;
	}
 
	.jam_analog_malasngoding {
		background: #e7f2f7;
		position: relative;
		width: 240px;
		height: 240px;
		border: 16px solid #52b6f0;
		border-radius: 50%;
		padding: 20px;
		margin:20px auto;
	}
 
	.xxx {
		height: 100%;
		width: 100%;
		position: relative;
	}
 
	.jarum {
		position: absolute;
		width: 50%;
		background: #232323;
		top: 50%;
		transform: rotate(90deg);
		transform-origin: 100%;
		transition: all 0.05s cubic-bezier(0.1, 2.7, 0.58, 1);
	}
 
	.lingkaran_tengah {
		width: 24px;
		height: 24px;
		background: #232323;
		border: 4px solid #52b6f0;
		position: absolute;
		top: 50%;
		left: 50%;
		margin-left: -14px;
		margin-top: -14px;
		border-radius: 50%;
	}
 
	.jarum_detik {
		height: 2px;
		border-radius: 1px;
		background: #F0C952;
	}
 
	.jarum_menit {
		height: 4px;
		border-radius: 4px;
	}
 
	.jarum_jam {
		height: 8px;
		border-radius: 4px;
		width: 35%;
		left: 15%;
	}
</style>
 
 
<center>
	<h1>APLIKASI CRUD MEMBUAT INPUTAN DATA</h1>
	<h2>WAHYU SAFRIZAL</h2>
</center>
 
<div class="jam_analog_malasngoding">
	<div class="xxx">
		<div class="jarum jarum_detik"></div>
		<div class="jarum jarum_menit"></div>
		<div class="jarum jarum_jam"></div>
		<div class="lingkaran_tengah"></div>
	</div>
    
</div>
 

<script type="text/javascript">
	const secondHand = document.querySelector('.jarum_detik');
	const minuteHand = document.querySelector('.jarum_menit');
	const jarum_jam = document.querySelector('.jarum_jam');
 
	function setDate(){
		const now = new Date();
 
		const seconds = now.getSeconds();
		const secondsDegrees = ((seconds / 60) * 360) + 90;
		secondHand.style.transform = `rotate(${secondsDegrees}deg)`;
		if (secondsDegrees === 90) {
			secondHand.style.transition = 'none';
		} else if (secondsDegrees >= 91) {
			secondHand.style.transition = 'all 0.05s cubic-bezier(0.1, 2.7, 0.58, 1)'
		}
 
		const minutes = now.getMinutes();
		const minutesDegrees = ((minutes / 60) * 360) + 90;
		minuteHand.style.transform = `rotate(${minutesDegrees}deg)`;
 
		const hours = now.getHours();
		const hoursDegrees = ((hours / 12) * 360) + 90;
		jarum_jam.style.transform = `rotate(${hoursDegrees}deg)`;
	}
 
	setInterval(setDate, 1000)
</script>
</body>
</html>



<div id="idx-calendar">
 <div id="calendar-control">
  <div id="monthNow">Januari 2014</div>
  <div id="nextMonth"></div>
  <div id="prevMonth"></div>
 </div>
 <div id="dayNames">
  <ul>
   <li>Minggu</li>
   <li>Senin</li>
   <li>Selasa</li>
   <li>Rabu</li>
   <li>Kamis</li>
   <li>Jum'at</li>
   <li>Sabtu</li>
  </ul>
 </div>
 <div id="daysNum">
 </div>
</div>
<style>
#idx-calendar {
    margin: 0 auto;
    max-width: 500px;
    text-align: center;
    width: 100%;
} 
#idx-calendar div > ul {
    list-style: none ;
    background-color: #333333;
    margin: 0;
    padding: 0 10px;
}
#idx-calendar #dayNames > ul {
    background-color: #232323;
}
#idx-calendar ul li {
    color: #FFFFFF;
    float: left;
    font-family: Tahoma;
    font-weight: inherit;
}
#dayNames ul li {
    font-weight: bold;
    margin: 2% 0;
    padding: 3% 0;
    width: 14.2857%;
}
#daysNum ul li:hover {
    background-color: #232323;
}
#daysNum ul li {
    padding: 2.5% 0;
    width: 14.2857%;
}
#dayNames,#daysNum {
    clear: both;
    width: 100%;
}
#dayNames:after,#daysNum:after,#idx-calendar div > ul:after  {
    content: "";
    display: table;
    clear: both;
}
#idx-calendar div > ul li:first-child {
    color: #F05558;
    font-weight: bold;
}
#idx-calendar li.dayNow {
    color: #0084B4 !important;
    font-weight: bold;
    background-color: #232323;
    position: relative;
    z-index: 2;
}
.monthNow {
    color: #0084B4;
    font-family: arial;
    font-size: 40px;
    text-align: left;
}
#monthNow {
    background-color:#4188D0;
    font-family: verdana;
    font-weight: bold;
    color: #FFFFFF;
    padding: 20px;
    text-transform: uppercase;
}
#calendar-control {
    position: relative;
}
#nextMonth, #prevMonth {
    transition:0.5s;
    background-color: #232323;
    color: #FFFFFF;
    font-family: verdana;
    height: 100%;
    position: absolute;
    right: 0;
    text-transform: uppercase;
    top: 0;
    width: 60px;
}
#prevMonth{
    left: 0;            
}
#prevMonth:before, #nextMonth:before {
    background-color: #4188D0;
    border-radius: 50%;
    transition:0.5s;
    border-right: 1px solid #FFFFFF;
    border-top: 1px solid #FFFFFF;
    content: "";
    display: block;
    height: 20px;
    left: 20px;
    position: relative;
    top: 18px;
    transform: rotate(45deg);
    width: 20px;
}
#prevMonth:before{
    transform: rotate(-135deg);
}
#nextMonth:hover, #prevMonth:hover{
    background-color: transparent;
}
#nextMonth:hover:before, #prevMonth:hover:before{
    border-radius: 0%;
}
</style>

<script>
function displayCalendar(month, year){
    
    var monthNow = new Date().getMonth();
    var yearNow = new Date().getFullYear();;
    var nextMonth = month+1;
    var prevMonth = month-1;
    var day = 0;
    
    if((month == monthNow)&&(year == yearNow)){
        var day = new Date().getDate();
    }
    
    var htmlContent ="";
    var FebNumberOfDays ="";
    var counter = 1;
    var Nameday = 1;
    
    if (month == 1){
        if ( (year%100!=0) && (year%4==0) || (year%400==0)){
            FebNumberOfDays = 29;
            }else{
            FebNumberOfDays = 28;
        }
    }
    
    var monthNames = ["January","February","March","April","May","June","July","August","September","October","November", "December"];
    var monthNum = ["1","2","3","4","5","6","7","8","9","10","11", "12"];
    var dayNames = ["Sunday","Monday","Tuesday","Wednesday","Thrusday","Friday", "Saturday"];
    var dayPerMonth = ["31", ""+FebNumberOfDays+"","31","30","31","30","31","31","30","31","30","31"]
    var nextDate = new Date(nextMonth +' 1 ,'+year);
    var weekdays = nextDate.getDay();
    var weekdays2 = weekdays
    var numOfDays = dayPerMonth[month];
                                    
    while (weekdays>0){
    htmlContent += "<li style='padding:1 0 0;'></li>";
        weekdays--;
    }
    
    while (counter <= numOfDays){
        
        if (weekdays2 > 6){
            weekdays2 = 0;
            htmlContent += "</ul><ul>";
        }
        if (counter == day){
            htmlContent +="<li class='dayNow'>"+counter+"</li>";
            Nameday = counter;
            }else{
            htmlContent +="<li>"+counter+"</li>";
        }
        weekdays2++;
        counter++;
    }
    
    document.getElementById("monthNow").innerHTML= monthNames[month]+" "+ year ;
    document.getElementById("daysNum").innerHTML= "<ul id="+monthNum[month]+" class="+year+">"+htmlContent+"</ul>";
}


(function() {
    var dateNow = new Date();
    var month = dateNow.getMonth();
    var year = dateNow.getFullYear();
    displayCalendar(month,year)
})(window);


document.getElementById("nextMonth").onclick = function(){
    var idmonth = document.getElementById("daysNum");
    var month = idmonth.getElementsByTagName("ul")[0].id;
    var nextYear = idmonth.getElementsByTagName("ul")[0].className;
    var nextMonth = Number(month);
    if(nextMonth == 12){
        nextMonth = 0;
        nextYear = Number(nextYear) + 1
    }
    displayCalendar(nextMonth,nextYear);
}


document.getElementById("prevMonth").onclick = function(){
    var idmonth = document.getElementById("daysNum");
    var month = idmonth.getElementsByTagName("ul")[0].id;
    var prevYear = idmonth.getElementsByTagName("ul")[0].className;
    var prevMonth = Number(month) - 2;
    if(prevMonth < 0 ){
        prevMonth = 11;    
        prevYear = Number(prevYear) - 1
    }
    displayCalendar(prevMonth,prevYear);
}
</script>