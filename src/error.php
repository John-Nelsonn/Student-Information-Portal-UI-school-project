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
	

	<div class="main_err">
		<div style="display:flex;flex-direction: column;justify-content: center;align-content: center;">

		<div style="font-size: 60px;letter-spacing: 5px; background: -webkit-linear-gradient(blue, gold);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;"><h1>404</h1></div>
		<div style="margin-top: -70px;">Page not available</div>
		<div style="margin-top:20px;">
		<span style="padding:10px;border: 1px solid black;"><a style="color:black;text-decoration: none;" href="SIP-home.php">Go to home page</a></span>
	  <span style="padding:10px;margin: 10px;border: 1px solid black;">Report error</span>
	  </div>
	</div>
			
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