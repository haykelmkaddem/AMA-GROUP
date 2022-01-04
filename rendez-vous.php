<?php
  session_start();
    if (!isset($_SESSION['user'])) {
     header("location:index.php");
    }
  ?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Calendar</title>
  <meta name="description" content="Calendar">
  
  <link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

<style type="text/css">
	/* Overall body and content */

.content11 {
    overflow: none;
max-width: 730px;
    padding: 0px 0;
    height: 500px;
    position: relative;
    margin: 20px auto;
    background: #6C9ECE !important;
}

/*  Events display */
.events-container1 {
    overflow-y: scroll;
    height: 80%;
    float: right;
    margin: 0px auto; 
    font: 13px Helvetica, Arial, sans-serif; 
    display: inline-block; 
    padding: 0 10px;
    border-bottom-right-radius: 3px;
    border-top-right-radius: 3px;
    width: 376;
}
.events-container-date
{
    height: 20%;
    width: 366px;
    float: right;
    margin: 0px auto; 
    font: 13px Helvetica, Arial, sans-serif; 
    display: inline-block; 
    padding: 0 10px;
    border-bottom-right-radius: 3px;
    border-top-right-radius: 3px;
    text-align: center;
    color: white;
}
.events-container1:after{
    clear:both;
}
.event-card-danger {
    padding: 20px 0;
    width: 350px;
    margin: 20px auto;
    display: block;
    background: #fff;
    border-left: 10px solid #D30B0B;
    border-radius: 3px;
    box-shadow: 3px 8px 16px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
    -moz-box-shadow: 3px 8px 16px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
    -webkit-box-shadow: 3px 8px 16px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
}
.event-card-safe {
    padding: 20px 0;
    width: 350px;
    margin: 20px auto;
    display: block;
    background: #fff;
    border-left: 10px solid #3F6487;
    border-radius: 3px;
    box-shadow: 3px 8px 16px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
    -moz-box-shadow: 3px 8px 16px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
    -webkit-box-shadow: 3px 8px 16px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
}
.event-count, .event-name, .event-cancelled {
    display: inline;
    padding: 0 10px;
    font-size: 1rem;
}
.event-count {
    color: #52A0FD;
    text-align: right;
}
.event-name {
    padding-right:0;
    text-align: left;
}
.event-cancelled {
    color: #FF1744;
    text-align: right;
}

/*  Calendar wrapper */
.calendar-container  { 
    float: left;
    position: relative;
    margin: 0px auto; 
    height: 100%;
    background: #fff;
    font: 13px Helvetica, Arial, san-serif; 
    display: inline-block; 
    border-bottom-left-radius: 3px;
    border-top-left-radius: 3px;
}
.calendar-container:after{
    clear:both;
}
.calendar {
    display: table;
}

/* Calendar Header */
.year-header { 
    background: #E9E9E9 !important;
    background: -moz-linear-gradient(left,  #52A0FD 0%, #00C9FB 80%, #00C9FB 100%);
    background: -webkit-linear-gradient(left,  #52A0FD 0%, #00C9FB 80%, #00C9FB 100%);
    background: linear-gradient(to right,  #52A0FD 0%, #00C9FB 80%, #00C9FB 100%);    
    font-family: Helvetica;
    box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
    -moz-box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
    -webkit-box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
    height: 80px; /*40*/
    text-align: center;
    position: relative; 
    color:#000; 
    border-top-left-radius: 3px;
} 
.year-header span { 
    display:inline-block; 
   /* font-size: 20px;
    line-height:40px; */
    font-size: 53px;
    line-height: 73px;
}
.left-button, .right-button { 
    cursor: pointer;
    width:28px; 
    text-align:center; 
    position:absolute; 
} 
.left-button { 
    left:0; 
    -webkit-border-top-left-radius: 5px; 
    -moz-border-radius-topleft: 5px; 
    border-top-left-radius: 5px; 
} 
.right-button { 
    right:0; 
    top:0; 
    -webkit-border-top-right-radius: 5px; 
    -moz-border-radius-topright: 5px; 
    border-top-right-radius: 5px; 
} 
.left-button:hover {
    background: #3FADFF;
}
.right-button:hover { 
    background: #00C1FF;
}

/* Buttons */
.button{
    cursor: pointer;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    outline: none;
    font-size: 1rem;
    border-radius: 25px;
    padding: 0.65rem 1.9rem;
    transition: .2s ease all;
    color: white;
    border: none;
   
}
#cancel-button {
    box-shadow: -1px 10px 20px #FF7DAE;
    background: #FF1744;
    background: -moz-linear-gradient(left,  #FF1744 0%, #FF5D95 80%, #FF5D95 100%);
    background: -webkit-linear-gradient(left,  #FF1744 0%, #FF5D95 80%, #FF5D95 100%);
    background: linear-gradient(to right,  #FF1744 0%, #FF5D95 80%, #FF5D95 100%);
}
#add-button {
    display: block;
    position: absolute;
    right:20px;
    bottom: 20px;
}
#add-button:hover, #ok-button:hover, #cancel-button:hover {
    transform: scale(1.03);
}
#add-button:active, #ok-button:active, #cancel-button:active {
    transform: translateY(3px) scale(.97);
}

/* Days/months tables */
.days-table, .dates-table, .months-table { 
    border-collapse:separate; 
    text-align: center;
} 
.day { 
    height: 26px;
    width: 26px;
    padding: 0 10px;
    line-height: 26px; 
    border: 2px solid transparent;
    text-transform:uppercase; 
    font-size:90%; 
    color:#9e9e9e; 
} 
.month {
    cursor: default;
    height: 26px;
    width: 26px;
    padding: 0 2px;
    padding-top:10px;
    line-height: 26px; 
    text-transform:uppercase; 
    font-size: 11px; 
    color:#9e9e9e; 
    transition: all 250ms;
}
.active-month {
    font-weight: bold;
    font-size: 14px;
    color: #FF1744;
    text-shadow: 0 1px 4px RGBA(255, 50, 120, .8);
}
.month:hover {
    color: #FF1744;
    text-shadow: 0 1px 4px RGBA(255, 50, 120, .8);
}

/*  Dates table */
.table-date {
    cursor: default;
    color:#2b2b2b; 
    height:26px;
    width: 26px;
    font-size: 15px;
    padding: 10px;
    line-height:26px; 
    text-align:center; 
    border-radius: 50%;
    border: 2px solid transparent;
    transition: all 250ms;
}
.table-date:not(.nil):hover { 
    border-color: #6C9ECE;
    box-shadow: 0 2px 6px rgb(108, 158, 206, .9);
}
.event-date {
    border-color:#52A0FD;
    box-shadow: 0 2px 8px RGBA(130, 180, 255, .9);
}

.active-date {
    background: #E9E9E9;
    box-shadow: 0 2px 8px rgb(233, 233, 233, .9);
    color: #fff;
}
.event-date.active-date {
    background: #52A0FD;
    box-shadow: 0 2px 8px RGBA(130, 180, 255, .9);
}

/* input dialog */
.dialog{
    z-index: 5;
    background: #fff;
    position:absolute;
    width:415px;
    height: 500px;
    left:387px;
    border-top-right-radius:3px;
    border-bottom-right-radius: 3px;
    display:none;
    border-left: 1px #aaa solid;
}
.dialog-header {
    margin: 20px;
    color:#333;
    text-align: center;
}
.form-container {
    margin-top:25%;
}
.form-label {
    color:#333;
}
.input {
    border:none;
    background: none;
    border-bottom: 1px #aaa solid;
    display:block;
    margin-bottom:50px;
    width: 200px;
    height: 20px;
    text-align: center;
    transition: border-color 250ms;
}
.input:focus {
    outline:none;
    border-color: #00C9FB;
}
.error-input {
    border-color: #FF1744;
}

/* Tablets and smaller */
@media only screen and (max-width: 780px) {
    .content11 {
        overflow: visible;
        position:relative;
        max-width: 100%;
        width: 370px;
        height: 100%;
        background: #6C9ECE !important;
       
    }
    .dialog {
        width:370px;
        height: 450px;
        border-radius: 3px;
        top:0;
        left:0;
    }
    .events-container1 {
        float:none;
        overflow: visible;
        margin: 0 auto;
        padding: 0;
        display: block;
        left: 0;
        border-radius: 3px;
    }

    .calendar-container {
        float: none;
        padding: 0;
        margin: 0 auto;
        margin-right: 0;
        display: block;
        left: 0;
        border-radius: 3px;
        box-shadow: 3px 8px 16px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
        -moz-box-shadow: 3px 8px 16px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
        -webkit-box-shadow: 3px 8px 16px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
    }
}

/* Small phone screens */
@media only screen and (max-width: 400px) {
    .content11, .events-container1, .year-header, .calendar-container, .events-container-date {
        width: 320px;
    }
    .dialog {
        width: 320px;
    }
    .months-table {
        display: block;
        margin: 0 auto;
        width: 320px;
    }
    .event-card {
        width: 300px;
    }
    .day {
        padding: 0 7px;
    }
    .month {
        display: inline-block;
        padding: 10px 10px;
        font-size: .8rem;
    }
    .table-date {
        width: 20px;
        height: 20px;
        line-height: 20px;
    }
    .event-name, .event-count, .event-cancelled {
        font-size: .8rem;
    }
    .add-button{
        bottom: 10px;
        right: 10px;
        padding: 0.5rem 1.5rem;
    }
} 

#language-dropdown {

 
  display: none;

  left: 0;
  position: absolute;
  border: 1px solid #ddd;
  background: #fff;
  box-shadow: 0px 3px 3px #b3b3b3;
  width: 329px;
  height: 100px;
  margin-top: 390px; 
border:1px solid #000;
margin-left: 1%;
padding-top:7px;

}
.azerd{
	width: 90px;
}

#style-2::-webkit-scrollbar-track
{
  
    border-radius: 10px;
    background-color: #6C9ECE;
}

#style-2::-webkit-scrollbar
{
    width: 12px;
    background-color: #6C9ECE;
}

#style-2::-webkit-scrollbar-thumb
{
    border-radius: 10px;
    
    background-color: rgba(255, 255, 255,0.7);
}
.dates-table{
        width: 100%;
}
.table-date a{
    color: black !important;
}
</style>
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

<?php
    include_once "includes/header.php";
?>

<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <main class="cd-main-content">
  <div class="content11">
    <div class="calendar-container">
      <div class="calendar"> 
        <div class="year-header"> 
          <span class="left-button" id="prev"> &lang; </span> 
          <span class="year" id="label"></span> 
          <span class="right-button" id="next"> &rang; </span>
        </div> 










        
        <table class="days-table"> 
          <td class="day">Dim</td> 
          <td class="day">Lun</td> 
          <td class="day">Mar</td> 
          <td class="day">Mer</td> 
          <td class="day">Jeu</td> 
          <td class="day">Ven</td> 
          <td class="day">Sam</td>
        </table> 
        <div class="frame"> 
          <table class="dates-table"> 
              <tbody class="tbody">             
              </tbody> 
          </table>
        </div> 
      </div>
    </div>

    <div class="events-container-date">
    	<h3 style="font-size: 50px;" class="jour"></h3>
    	<h1 style="font-size: 20px;" class="date-complet"></h1>
    	<h1 class="date-chiffre" hidden></h1>
 
    </div>
    <div class="events-container1" id="style-2">
        <?php
                   $date="";
                    $soci="";
                    $lieu="";
                    $heure="";
if (isset($_SESSION['user'])){
    $conn=mysqli_connect("localhost","root","1234") or die(mysqli_error());
    $bd=mysqli_select_db($conn,"commercial") or die(mysqli_error());

    $query = "SELECT * FROM rend where user='".$_SESSION['user']."'";  
                $result = mysqli_query($conn,$query);  
                while($row = mysqli_fetch_array($result))  
                {  
                    $curr_date =date('d/m/Y');
                    $date=$row[1];
                    $soci=$row[2];
                    $lieu=$row[3];
                    $heure=$row[4];
        
                      
                   

                  ?>  

        <div class='event-card-safe'>
            <div class='event-name'><span style="font-size: 13px;"><?php echo $soci." le ".$date." à ".$heure; ?> </span> </div>
        </div>
                 
    
                    <?php
                }
             }
          
    ?>
        
    
    </div>
<div id="language-dropdown" tabindex="0">
    
        <form class="form" id="form" action="ajouter_ren.php" method="post">
        	<input type="hidden" name="azert" class="date-chiffre1" >
          	<table align="center" style="width: 329px; padding-top: 10px;">
          		<tr>
          			<td style="text-align: center; padding-bottom: 5px;">Societé:</td>
          			<td style="text-align: center; padding-bottom: 5px;">Lieu:</td>
          			<td style="text-align: center; padding-bottom: 5px;">Heure:</td>
          		</tr>
          		<tr>
          			<td style="text-align: center;"><input class="azerd" type="text" name="soc"></td>
          			<td style="text-align: center;"><input class="azerd" type="text" name="lieu"></td>
          			<td style="text-align: center;"><input class="azerd" type="text" name="heure"></td>
          		</tr>
          		<tr>
          			<td></td>
          			<td></td>
          			<td align="right"><input style="color: white;background: #7A7A7A; border:none; margin-top: 13px; margin-right: 20px !important; padding: 5px;" type="submit" name="submit" value="Enregistrer"></td>

          		</tr>
          	</table>
        </form>
      
</div>
<!--**********************-->
    

  </div>

<div class="nav-buttons-bottom">
    <div class="row">
        <a class="nav-btn"  href="projets.php" title="Rendez-vous">
            <i class="fas fa-caret-left"></i>
        </a>
        <a class="nav-btn-right" href="ingenierie.php" title="innovation">
            <i class="fas fa-caret-right"></i>
        </a>
    </div>
</div>
</main>
  <!-- Dialog Box-->
  <script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous">
  </script>
  <script src="app.js"></script>
  <script >
var monthName="";
	// Setup the calendar with the current date
$(document).ready(function(){
    var date = new Date();
    var today = date.getDate();
    var today1 = date.getDate();
    // Set click handlers for DOM elements
    $(".right-button").click({date: date}, next_year);
    $(".left-button").click({date: date}, prev_year);
    $(".month").click({date: date}, month_click);
    $("#add-button").click({date: date}, new_event);
    // Set current month as active
    $(".months-row").children().eq(date.getMonth()).addClass("active-month");
    init_calendar(date);
    var events = check_events(today, date.getMonth()+1, date.getFullYear());
    show_events(events, months[date.getMonth()], today);
});

// Initialize the calendar by appending the HTML dates
function init_calendar(date) {
    $(".tbody").empty();
    $(".events-container").empty();
    var calendar_days = $(".tbody");
    var month = date.getMonth();
    var year = date.getFullYear();
    var day_count = days_in_month(month, year);
    var row = $("<tr class='table-row'></tr>");
    var today = date.getDate();
    // Set date to 1 to find the first day of the month
    date.setDate(1);
    var first_day = date.getDay();

    // 35+firstDay is the number of date elements to be added to the dates table
    // 35 is from (7 days in a week) * (up to 5 rows of dates in a month)
    for(var i=0; i<35+first_day; i++) {
        // Since some of the elements will be blank, 
        // need to calculate actual date from index
        var day = i-first_day+1;
        // If it is a sunday, make a new row
        if(i%7===0) {
            calendar_days.append(row);
            row = $("<tr class='table-row'></tr>");
        }
        // if current index isn't a day in this month, make it blank
        if(i < first_day || day > day_count) {
            var curr_date = $("<td class='table-date nil'>"+"</td>");
            row.append(curr_date);
           
        }   
        else {
            var curr_date = $("<td class='table-date'><a class='language-icon fr' href='#' alt='choose-your-language' onclick=\"toggle('language-dropdown');\">"+day+"</a></td>");
            var events = check_events(day, month+1, year);
            if(today===day && $(".active-date").length===0) {
                curr_date.addClass("active-date");
                show_events(events, months[month], day);
            }
            // If this date has any events, style it with .event-date
            if(events.length!==0) {
                curr_date.addClass("event-date");
            }
            // Set onClick handler for clicking a date
   /*500072229*/         curr_date.click({events: events, month: months[month], day:day}, date_click);
            row.append(curr_date);
        }
    }
    // Append the last row and set the current year
    calendar_days.append(row);

   switch(month) {
  case 0:
    monthName = "Janvier";
    break;
  case 1:
   monthName = "Fevrier";
    break;
  case 2:
   monthName = "Mars";
    break;
  case 3:
   monthName = "Avril";
    break;
  case 4:
   monthName = "Mai";
    break;
  case 5:
   monthName = "Juin";
    break;
  case 6:
   monthName = "Juillet";
    break;
  case 7:
   monthName = "Aout";
    break;
  case 8:
   monthName = "Septembre";
    break;
  case 9:
   monthName = "Octobre";
    break;
  case 10:
   monthName = "Novembre";
    break;
  case 11:
   monthName = "Décembre";
    break;
  
}
    $(".year").text(monthName);
  $(".jour").text(today);
  var monthch=month +1;
  $(".date-complet").text(today+" "+monthName);
  if (monthch<10) {
     $(".date-chiffre").text(today+"/0"+monthch+"/"+"2019");
  }else{
    $(".date-chiffre").text(today+"/"+monthch+"/"+"2019");
  }
 
}

// Get the number of days in a given month/year
function days_in_month(month, year) {
    var monthStart = new Date(year, month, 1);
    var monthEnd = new Date(year, month + 1, 1);
    return (monthEnd - monthStart) / (1000 * 60 * 60 * 24);    
}

// Event handler for when a date is clicked
function date_click(event) {
var jour = $(".date-complet").text();


    $(".events-container").hide(250);
    $("#dialog").show(250);
    $(".active-date").removeClass("active-date");
    $(this).addClass("active-date");
    var datehid = $(".date-chiffre").text();
    $("#hid").attr("value", datehid);
    show_events(event.data.events, event.data.month, event.data.day);

};

// Event handler for when a month is clicked
function month_click(event) {

    $(".events-container").show(250);
    $("#dialog").hide(250);
    var date = event.data.date;
    $(".active-month").removeClass("active-month");
    $(this).addClass("active-month");
    var new_month = $(".month").index(this);
    date.setMonth(new_month);
    init_calendar(date);
}

// Event handler for when the year right-button is clicked
function next_year(event) {
    /*$("#dialog").hide(250);
    var date = event.data.date;
    var new_year = date.getFullYear()+1;
    $("year").html(new_year);
    date.setFullYear(new_year);
    init_calendar(date);*/
    $(".events-container").show(250);
    $("#dialog").hide(250);
    var date = event.data.date;
    $(".active-month").removeClass("active-month");
    
    var new_month = date.getMonth()+1;
    date.setMonth(new_month);
    $(".year").text(monthName);
   
    $(".month"+new_month).addClass("active-month");

    init_calendar(date);


}

// Event handler for when the year left-button is clicked
function prev_year(event) {
  /*  $("#dialog").hide(250);
    var date = event.data.date;
    var new_year = date.getFullYear()-1;
    $("year").html(new_year);
    date.setFullYear(new_year);
    init_calendar(date);*/
        $(".events-container").show(250);
    $("#dialog").hide(250);
    var date = event.data.date;
    $(".active-month").removeClass("active-month");
    
    var new_month = date.getMonth()-1;
    date.setMonth(new_month);
    $(".year").text(monthName);
    $(".month"+new_month).addClass("active-month");
    init_calendar(date);
}

// Event handler for clicking the new event button
function new_event(event) {
    // if a date isn't selected then do nothing
    if($(".active-date").length===0)
        return;
    // remove red error input on click
    $("input").click(function(){
        $(this).removeClass("error-input");
    })
    // empty inputs and hide events
    $("#dialog input[type=text]").val('');
    $("#dialog input[type=number]").val('');
    $(".events-container").hide(250);
    $("#dialog").show(250);
    // Event handler for cancel button
    $("#cancel-button").click(function() {
        $("#name").removeClass("error-input");
        $("#count").removeClass("error-input");
        $("#dialog").hide(250);
        $(".events-container").show(250);
    });
    // Event handler for ok button
    $("#ok-button").unbind().click({date: event.data.date}, function() {
        var date = event.data.date;
        var name = $("#name").val().trim();
        var count = parseInt($("#count").val().trim());
        var day = parseInt($(".active-date").html());
        // Basic form validation
        if(name.length === 0) {
            $("#name").addClass("error-input");
        }
        else if(isNaN(count)) {
            $("#count").addClass("error-input");
        }
        else {
            $("#dialog").hide(250);
            console.log("new event");
            new_event_json(name, count, date, day);
            date.setDate(day);
            init_calendar(date);
        }
    });
}

// Adds a json event to event_data
function new_event_json(name, count, date, day) {
    var event = {
        "occasion": name,
        "invited_count": count,
        "year": date.getFullYear(),
        "month": date.getMonth()+1,
        "day": day
    };
    event_data["events"].push(event);
}

// Display all events of the selected date in card views
function show_events(events, month, day) {
    // Clear the dates container
    var monthch;
    $(".events-container").empty();
    $(".events-container").show(250);
    console.log(event_data["events"]);
    // If there are no events for this date, notify the user
    if(events.length===0) {
        var event_card = $("<div class='event-card'></div>");
        var event_name = $("<div class='event-name'>There are no events planned for "+month+" "+day+".</div>");
        $(event_card).css({ "border-left": "10px solid #FF1744" });
        $(event_card).append(event_name);
        $(".events-container").append(event_card);
    }
    else {
        // Go through and add each event as a card to the events container
        for(var i=0; i<events.length; i++) {
            var event_card = $("<div class='event-card'></div>");
            var event_name = $("<div class='event-name'>"+events[i]["occasion"]+":</div>");
            var event_count = $("<div class='event-count'>"+events[i]["invited_count"]+" Invited</div>");
            if(events[i]["cancelled"]===true) {
                $(event_card).css({
                    "border-left": "10px solid #FF1744"
                });
                event_count = $("<div class='event-cancelled'>Cancelled</div>");
            }
            $(event_card).append(event_name).append(event_count);
            $(".events-container").append(event_card);
        }
    }
    $(".jour").text(day);
    switch(month){
    	case "January":
    	monthch=1;
    	break;
    	case "February":
    	monthch=2;
    	break;
    	case "March":
    	monthch=3;
    	break;
    	case "April":
    	monthch=4;
    	break;
    	case "May":
    	monthch=5;
    	break;
    	case "June":
    	monthch=6;
    	break;
    	case "July":
    	monthch=7;
    	break;
    	case "August":
    	monthch=8;
    	break;
    	case "September":
    	monthch=9;
    	break;
    	case "October":
    	monthch=10;
    	break;
    	case "November":
    	monthch=11;
    	break;
    	case "December":
    	monthch=12;
    	break;
    }

    
    $(".date-complet").text(day+" "+monthName);

     $(".date-chiffre").text(day+"/"+monthch+"/"+"2019");
     if (monthch<10) {
    $(".date-chiffre1").attr("value",day+"/0"+monthch+"/"+"2019");
  }else{
    $(".date-chiffre1").attr("value",day+"/"+monthch+"/"+"2019");
  }
     

}

// Checks if a specific date has any events
function check_events(day, month, year) {
    var events = [];
    for(var i=0; i<event_data["events"].length; i++) {
        var event = event_data["events"][i];
        if(event["day"]===day &&
            event["month"]===month &&
            event["year"]===year) {
                events.push(event);
            }
    }
    return events;
}

// Given data for events in JSON format
var event_data = {
    "events": [
    {
        "occasion": " Repeated Test Event ",
        "invited_count": 120,
        "year": 2017,
        "month": 5,
        "day": 10,
        "cancelled": true
    },
    {
        "occasion": " Repeated Test Event ",
        "invited_count": 120,
        "year": 2017,
        "month": 5,
        "day": 10,
        "cancelled": true
    },
        {
        "occasion": " Repeated Test Event ",
        "invited_count": 120,
        "year": 2017,
        "month": 5,
        "day": 10,
        "cancelled": true
    },
    {
        "occasion": " Repeated Test Event ",
        "invited_count": 120,
        "year": 2017,
        "month": 5,
        "day": 10
    },
        {
        "occasion": " Repeated Test Event ",
        "invited_count": 120,
        "year": 2017,
        "month": 5,
        "day": 10,
        "cancelled": true
    },
    {
        "occasion": " Repeated Test Event ",
        "invited_count": 120,
        "year": 2017,
        "month": 5,
        "day": 10
    },
        {
        "occasion": " Repeated Test Event ",
        "invited_count": 120,
        "year": 2017,
        "month": 5,
        "day": 10,
        "cancelled": true
    },
    {
        "occasion": " Repeated Test Event ",
        "invited_count": 120,
        "year": 2017,
        "month": 5,
        "day": 10
    },
        {
        "occasion": " Repeated Test Event ",
        "invited_count": 120,
        "year": 2017,
        "month": 5,
        "day": 10,
        "cancelled": true
    },
    {
        "occasion": " Repeated Test Event ",
        "invited_count": 120,
        "year": 2017,
        "month": 5,
        "day": 10
    },
    {
        "occasion": " Test Event",
        "invited_count": 120,
        "year": 2017,
        "month": 5,
        "day": 11
    }
    ]
};

const months = [ 
    "January", 
    "February", 
    "March", 
    "April", 
    "May", 
    "June", 
    "July", 
    "August", 
    "September", 
    "October", 
    "November", 
    "December" 
];
function toggle(el) {
var tag=document.getElementById(el);
  tag.style.display = tag.style.display === 'block' ? 'none' : 'block';
}
  
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script>
    if( !window.jQuery ) document.write('<script src="js/jquery-3.0.0.min.js"><\/script>');
</script>
<script src="js/modernizr-custom.js"></script>
<script src="js/main.js"></script>
</body>
</html>