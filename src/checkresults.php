<!DOCTYPE html>
<html>
<head>
	<script src="./x.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SIP - CHECK RESULTS</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<link href="../CSS/SIP-home.css" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/tippy.js@6"></script>
</head>
<body>
	<div id="myModal" class="popup">
		<div class="popup_in">
			 <span id="close">&times;</span>
			 <video width="650" height="340" autoplay muted controls loop>
  				<source src="../img/help.mp4" type="video/mp4">
 
			</video><br><br>
			<span style="padding: 13px;">Click on View Results to review all results for each semester and your cumulative GPA.</span>
			<span style="float: right;margin-top: 45px;margin-right: 28px;">Next</span>
		</div>	
	</div>
	<nav class="topnav">
		<img src="../img/GCTU_logo.png">
		<span class="sub_nav">
			<span id="google_translate_element"></span>
			<!-- <span class="welcome">Welcome,John Nelson</span> -->
			<i id="myBtn" class="bi bi-person"></i>
			<i style="display:block;" id="button" onclick="" class="bi bi-moon"></i>
			
			<i id="myBtn2" class="bi bi-box-arrow-right"></i>
			
		</span>
	</nav>
	<div class="side_nav">
		<span class="side">
		<a  href="SIP-home.php"><i class="bi bi-house-fill"></i>&nbsp&nbsp&nbspHome</a>
  		<a href="#"><i class="bi bi-people-fill"></i>&nbsp&nbsp&nbspProfile</a>

  		<a href="#"><i class="bi bi-briefcase-fill"></i>&nbsp&nbsp&nbspCourses</a>
  		<a id="active" href="#"><i class="bi bi-bookmark-fill"></i>&nbsp&nbsp&nbspCheck results</a>
  		<a href="#"><i class="bi bi-question-circle-fill"></i>&nbsp&nbsp&nbspFAQs</a>
  		<a href="#"><i class="bi bi-envelope-fill"></i>&nbsp&nbsp&nbspContact us</a>
  		<a href="#"><i class="bi bi-folder-fill"></i>&nbsp&nbsp&nbspDocument</a>
  		<a href="#"><i class="bi bi-trophy-fill"></i>&nbsp&nbsp&nbspGraduation</a>
  		<a id="new"  href="#"><i class="bi bi-info-circle-fill"></i> &nbsp&nbsp&nbspHelp<span class="new">NEW</span></a>
  		</span>
	</div>
	<span  id="top"></span>
	<div class="main">
		
		<div class="results">
			<span style="color: #010328;font-size: 20px;font-weight: bold;">2020/2021 First Semester</span><br><br>
			<table>
				<tr class="tr">
					<td>Code </td>
					<td>Course Title</td>
					<td>Mark</td>
					<td>Credits</td>
					<td>Grade</td>
					<td>Grade Points</td>
				</tr>
				<tr class="tr1">
					<td>FREN 171</td>
					<td>BASIC FRENCH</td>
					<td>70</td>
					<td>1</td>
					<td>B+</td>
					<td>3.5</td>


				</tr>
				<tr class="tr">
					<td>ENGL 171</td>
					<td>COMMUNICATION SKILLS</td>
					<td>80</td>
					<td>2</td>
					<td>A</td>
					<td>8</td>
					
				</tr>
				<tr class="tr1">
					<td>CSNS 141</td>
					<td>DIGITAL ELECTRONICS</td>
					<td>82</td>
					<td>3</td>
					<td>A</td>
					<td>12</td>
				
				</tr>
					<tr class="tr">
				
					<td>MATH 103</td>
					<td>DISCRETE MATHEMATICS FOR COMPUTER SCIENCE</td>
					<td>78</td>
					<td>3</td>
					<td>A-</td>
					<td>11.25</td>
				</tr>
					<tr class="tr1">
					
					<td>CSSD 111</td>
					<td>INTRODUCTION TO COMPUTER SYSTEMS</td>
					<td>80</td>
					<td>2</td>
					<td>A</td>
					<td>8</td>
				</tr>
					<tr class="tr">
				
					<td>GTGE 121</td>
					<td>INTRODUCTION TO ELECTRONICS</td>
					<td>80</td>
					<td>2</td>
					<td>A</td>
					<td>8</td>
				</tr>
				<tr class="tr1">
				
					
				
					<td>MATH 105</td>
					<td>LINEAR ALGEBRA</td>
					<td>80</td>
					<td>2</td>
					<td>A</td>
					<td>8</td>
				</tr>

				<tr class="tr">
				
					
				
					<td>CSSD 101</td>
					<td>PROGRAMMING & PROBLEM-SOLVING </td>
					<td>80</td>
					<td>2</td>
					<td>A</td>
					<td>8</td>
				</tr>
					
				
			</table>


			<table style="margin-top: -20px;">
				<tr class="tr">
					<td></td>
					<td>GPCP</td>
					<td>GPA</td>
					<td>Credit Taken</td>
					<td>Credit Passed</td>
					
				</tr>
				<tr class="tr1">
					<td>Current:</td>
					<td>95.25</td>
					<td>3.98</td>
					<td>21</td>
					<td>21</td>
				


				</tr>
			<tr class="tr">
					<td>Current:</td>
					<td>95.25</td>
					<td>3.98</td>
					<td>21</td>
					<td>21</td>
				


				</tr>
	
				
			</table>
			<fieldset id="field" style="width:80%;border-radius: 3px;border: 1px solid darkblue;line-height: 1.6;">
				<legend><i style="font-size: 50px;color: darkblue;" class="bi bi-info-square"></i></legend>
				GPA stands for "Grade Point Average." It is a numerical representation of a student's academic performance in a given period, usually a semester or academic year. GPA is used to evaluate a student's academic achievement and is often used by schools, colleges, and universities to determine academic standing, eligibility for scholarships, and admission to academic programs.

The GPA scale is usually from 0.0 to 4.0, with 4.0 being the highest possible GPA. The GPA is calculated by assigning a point value to each grade earned in a course, and then averaging those points across all the courses taken in a given period. The point values assigned to each grade may vary depending on the institution, but a common scale is:

    A = 4.0 points
    B = 3.0 points
    C = 2.0 points
    D = 1.0 point
    F = 0.0 points

For example, if a student earns an A in a course worth three credits and a B in a course worth four credits, their total points would be:

    A = 4.0 x 3 credits = 12.0 points
    B = 3.0 x 4 credits = 12.0 points

Their total points for the semester would be 24.0. To calculate their GPA, you would divide the total points by the total number of credits taken that semester. So if the student took seven courses worth a total of 21 credits, their GPA for the semester would be:

    GPA = 24.0 total points / 21 total credits = 1.14 (rounded to two decimal places)

In this example, the student's GPA is 1.14, which falls between a C (2.0) and a D (1.0) on the GPA scale.<br>

<table style="margin-top:30px;">
				<tr class="tr">
					<td>GRADE</td>
					<td>MARK(%)</td>
					<td>INTERPRETATION</td>
					<td>GRADE POINT</td>
					
					
				</tr>
				<tr class="tr1">
					<td>A</td>
					<td>80 - 100</td>
					<td>Outstanding</td>
					<td>4.00</td>
					</tr>
			<tr class="tr1">
					<td>A-</td>
					<td>75 - 79</td>
					<td>Excellent</td>
					<td>3.75</td>
					</tr>
					<tr class="tr1">
					<td>B+</td>
					<td>70 - 74</td>
					<td>Very Good</td>
					<td>3.50</td>
					</tr>
					<tr class="tr1">
					<td>B</td>
					<td>65 - 69</td>
					<td>Good</td>
					<td>3.25</td>
					</tr>
					<tr class="tr1">
					<td>B-</td>
					<td>60 - 64</td>
					<td>Fairly Good</td>
					<td>3.00</td>
					</tr>
					<tr class="tr1">
					<td>C+</td>
					<td>55 - 59</td>
					<td>Above Average</td>
					<td>2.75</td>
					</tr>
					<tr class="tr1">
					<td>C</td>
					<td>50 - 54</td>
					<td>Average</td>
					<td>2.50</td>
					</tr>
					<tr class="tr1">
					<td>C-</td>
					<td>45 - 49</td>
					<td>Below average</td>
					<td>2.00</td>
					</tr>
					<tr class="tr1">
					<td>D</td>
					<td>40 - 44</td>
					<td>Pass</td>
					<td>1.50</td>
					</tr>
					<tr class="tr1">
					<td>F</td>
					<td>0 - 39</td>
					<td>Fail</td>
					<td>0</td>
					</tr>
					<tr class="tr1">
					<td>A</td>
					<td>80 - 100</td>
					<td>Outstanding</td>
					<td>4.00</td>
					</tr>
					<tr class="tr1">
					<td>A</td>
					<td>80 - 100</td>
					<td>Outstanding</td>
					<td>4.00</td>
					</tr>
	
				
			</table>
			</fieldset>
			<span style="border-radius: 40px;color:white;position: absolute;background-color: darkblue;padding: 10px;right: 15%;top: 100%;"><a style="color: white;" href="#top"><i class="bi bi-arrow-up"></i></a></span>
		</div>
	</div>
	



<script>
$(document).ready(function(){
  $("#button").click(function(){
    $(".topnav").toggleClass("topnav1");
     var change = document.getElementById("button");
     var light = document.getElementById("light");
    

  });
});
$(document).ready(function(){
  $("#button").click(function(){
    $(".side_nav").toggleClass("side_nav1");
    $("#button").toggleClass('bi bi-sun');
  });
});
$(document).ready(function(){
  $("#button").click(function(){
    $("body").toggleClass("body1");
  });
});
$(document).ready(function(){
  $("#button").click(function(){
    $("table").toggleClass("table1");
  });
});
$(document).ready(function(){
  $("#button").click(function(){
    $("tr").toggleClass("tr3");
  });
  $(document).ready(function(){
  $("#button").click(function(){
    $("tr").toggleClass("tr4");
  });
});
});
$(document).ready(function(){
  $("#button").click(function(){
    $("overlay").toggleClass("overlay2");
  });
});



tippy('#myBtn', {
  content: "Account",

});
tippy('#button', {
  content: "Toggle theme",

});
tippy('#myBtn2', {
  content: "Log out",

});
</script>


<script>
	const myElement = document.getElementById("button");
	const field = document.getElementById("field");

myElement.addEventListener("click", function() {
  info.classList.toggle("info2");
});

  // document.getElementById("demo").innerHTML = "Hello World";
	var modal = document.getElementById("myModal");
	var close = document.getElementById("close");
	var btn = document.getElementById("new");
	btn.onclick = function() {
  modal.style.display = "block";
}
	close.onclick = function() {
  modal.style.display = "none";
		
}

// When the user clicks anywhere outside of the modal, close it


</script>
<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>

</html>