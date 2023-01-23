<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	<style>
		#topbar {
		  position: fixed;
		  top: 0;
		  left: 0;
		  width: 100%;
		  background-color: #f1f1f1;
		  z-index: 999;
		}

		#topbar .container {
		  max-width: 1200px;
		  margin: 0 auto;
		  padding: 10px;
		}

		#topbar a {
		  color: #333;
		  text-decoration: none;
		  margin-right: 10px;
		}

	</style>
</head>
<body>
<div id="topbar">
  <div class="container">
    <a href="#">Home</a>
    <a href="#">About</a>
    <a href="#">Contact</a>
  </div>
</div>

<script>
$(document).ready(function() {
  $(window).scroll(function() {
    if ($(this).scrollTop() > 20) {
      $('#topbar').fadeIn();
    } else {
      $('#topbar').fadeOut();
    }
  });
});

</script>
</body>
</html>