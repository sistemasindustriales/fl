<?php
  include "gp.php";

  if($_GET['id']){
    $id = $_GET['id'];
    $gpURL = getURLbyID($id);
    $getGP = getPhotoGoogle($gpURL);
  }

  if($_POST['submit'] != ""){
    $url = $_POST['url'];
    $getGP = getPhotoGoogle($url);
  }
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="robots" content="noindex">
	<title>Get link Google Photos</title>
</head>

<body style="background-color:#000000;">

  <!-- Docs styles -->

	<style>
		.container {
		  max-width: 1px;
		  margin: 0 auto;
		}
	</style>
<div id="myElement"><form action="" method="POST">
			<input type="text" size="1" name="url" value="https://photos.google.com/share/AF1QipMx5mQlzoKqAl-rD09IP6SsBayxp9JPMnkIuvc3X3Wtp9XhwBp630rt3d9-BG7Eug?key=eWQ0dmc0RWJRbGtzMmRPRzJoRG52T0RNbVRwR2Nn"/>
			<input type="submit" value="GET" name="submit" />
		</form></div>
	<div class="container">
 
		
		

		

	
		<div id="myElement"></div> 
	</div>

	<script src="https://ssl.p.jwpcdn.com/player/v/8.13.8/jwplayer.js"></script>
	<script type="text/javascript">jwplayer.key="cLGMn8T20tGvW+0eXPhq4NNmLB57TrscPjd1IyJF84o=";</script>
	<script type="text/javascript">
		jwplayer("myElement").setup({
			playlist: [{
				"sources":<?php echo $getGP?>
			}],
			allowfullscreen: true,
			width: '100%',
			height: '100%',
			aspectratio: '16:9',
      autostart: true,
      preload: true,
		});
	</script>


<script type="text/javascript">
    document.myform.submit('GET');
</script>



</body>
</html>





