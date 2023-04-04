<!DOCTYPE html>
<html>
<head>
	<script src="./x.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SIP - STUDENT PROFILE</title>
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
	<nav  class="topnav">
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
		<a id="active" href="SIP-home.php"><i class="bi bi-house-fill"></i>&nbsp&nbsp&nbspHome</a>
  		<a href="error.php"><i class="bi bi-people-fill"></i>&nbsp&nbsp&nbspProfile</a>

  		<a href="error.php"><i class="bi bi-briefcase-fill"></i>&nbsp&nbsp&nbspCourses</a>
  		<a href="checkresults.php"><i class="bi bi-pencil-square"></i>&nbsp&nbsp&nbspCheck results</a>
  		<a href="error.php"><i class="bi bi-question-circle-fill"></i>&nbsp&nbsp&nbspFAQs</a>
  		<a href="error.php"><i class="bi bi-envelope-fill"></i>&nbsp&nbsp&nbspContact us</a>
  		<a href="error.php"><i class="bi bi-folder-fill"></i>&nbsp&nbsp&nbspDocument</a>
  		<a href="error.php"><i class="bi bi-trophy-fill"></i>&nbsp&nbsp&nbspGraduation</a>
  		<a id="new"  href="#"><i class="bi bi-info-circle-fill"></i> &nbsp&nbsp&nbspHelp<span class="new">NEW</span></a>
  		</span>
	</div>

	<div class="main">
		<div class="top">
				<div class="pic">
				<span style="font-size:20px;"><img alt="Profile picture" src="prof.png"><span>
				</div>
				<div>
				<p class="name">Mr John Doe<p>
				</div>
		</div>
		<div id="overlay" class="overlay">
			<div class="main_i">
				<i class="bi bi-person-circle"></i><br>View Profile
			</div>
			<div class="main_i">
				<i class="bi bi-check-square-fill"></i><br>
				Register<br> Course<br>
			</div>
			<div class="main_i">
				<i class="bi bi-pencil-square"></i><br>Check <br>Result
			</div>
			<div class="main_i">
				<i class="bi bi-folder-fill"></i><br>Document <br>Request
			</div>
		</div>
		<div class="table">
			<table>
				<tr class="tr">
					<td>Faculty:</td>
					<td>FACULTY OF COMPUTING AND<br>INFORMATION SYSTEMS</td>
				</tr>
				<tr class="tr1">
					<td>Department:</td>
					<td>COMPUTER SCIENCE</td>
				</tr>
				<tr class="tr">
					<td>Programme:</td>
					<td>BSc. COMPUTER SCIENCE</td>
				</tr>
				<tr class="tr1">
					<td>Level:</td>
					<td>300</td>
				</tr>
				<tr class="tr">
					<td>Session:</td>
					<td>Morning</td>
				</tr>
				<tr class="tr1">
					<td>Index Number:</td>
					<td>4231210090</td>
				</tr>
				<tr class="tr">
					<td>Cohort:</td>
					<td>2020/2021</td>
				</tr>
				<tr class="tr1">
					<td>Credit Required:</td>
					<td> </td>
				</tr>
				<tr class="tr">
					<td>Credit Taken:</td>
					<td>58</td>
				</tr>
			</table>
			<table>
				<tr class="tr">
					<td>Campus:</td>
					<td>Accra</td>
				</tr>
				<tr class="tr1">
					<td>Mobile Number:</td>
					<td>0275096737</td>
				</tr>
				<tr class="tr">
					<td>Personal Email:</td>
					<td>zzorkie@gmail.com</td>
				</tr>
				<tr class="tr1">
					<td>Gender:</td>
					<td>MALE</td>
				</tr>
				<tr class="tr">
					<td>Nationality:</td>
					<td>Ghanaian</td>
				</tr>
				<tr class="tr1">
					<td>GTUC Email:</td>
					<td>4231210090@live.gctu.edu.gh</td>
				</tr>
				<tr class="tr">
					<td>Completed:</td>
					<td>No</td>
				</tr>
				<tr class="trw">
					<td>Graduated:</td>
					<td>No</td>
				</tr>
				<tr class="tr">
					<td>Credit Obtained:</td>
					<td>58</td>
				</tr>
			</table>
			
		</div>
	<span style="border-radius: 40px;color:white;position: absolute;background-color: darkblue;padding: 10px;right: 15%;top: 290%;"><a style="color: white;" href="#top"><i class="bi bi-arrow-up"></i></a></span>
	</div>
	



<script>
const myElement = document.getElementById("button");
const overlay = document.getElementById("overlay");

myElement.addEventListener("click", function() {
  overlay.classList.toggle("overlay2");
});





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