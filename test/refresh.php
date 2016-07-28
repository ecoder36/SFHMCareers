<?php
if ( isset($_GET['time'])){
    
    if ($_GET['url7'] != NULL){
        	@$url = 'http://'.$_GET['url7'];
    }
      if ($_GET['url8'] != NULL){
        	@$url = 'https://'.$_GET['url8'];
    }
    

	$time = @$_GET['time'];

	echo '<title>auto refresh</title>
		<meta charset="utf-8" />
		<link href="http://icons.iconarchive.com/icons/oxygen-icons.org/oxygen/256/Actions-view-refresh-icon.png" rel="shortcut icon">
		<meta name="viewport" content="width=device-width, initial-scale=1" />';
	echo '<meta http-equiv="refresh" content="'.$time.'">';
	echo '<iframe src="'.$url.'" style="width:100%;height:100%;display:inline-block;position:fixed;margin:-10 0 0 -10" ></iframe>' ;
	die();
}
?>
<!DOCTYPE HTML>

<style type="text/css">
html, body { 
  background: url("http://tabloidcolumn.com/wp-content/uploads/2013/10/black-and-white-abstract3_edited-3.jpg") no-repeat center center fixed; 
  height: 100%;
    background-size: cover;
}
</style>

<html>
	<head>
		<title>auto refresh</title>
		<meta charset="utf-8" />
		<link href="http://icons.iconarchive.com/icons/oxygen-icons.org/oxygen/256/Actions-view-refresh-icon.png" rel="shortcut icon">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>
		<!-- Contact -->
			<div class="wrapper style45">
				<article id="contact" class="container 75%">
					<header>
						<h2>refresh any website automatically.</h2>
						<p>1- enter the url you would like to refresh starting with http://</p>
						<p>2- select how often you would like to refresh.</p>
						<p>3- click “start auto refreshing” </p>
					</header>
					<div>
						<div class="row">
							<div class="12u">
						<!--	<form method="post" action="#">-->
	                            <form action='' method='post' target='_blank'>
									<div>
										<div class="row">
											<div class="12u">
												<input style="color:black;" type="text" name="url" id="subject" placeholder="URL : " > </input>
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<select style="color:black;" name="time1" >
												  <option value="60">60 seconds</option>
												  <option value="5">5 seconds</option>
												  <option value="10">10 seconds</option>
												  <option value="30">30 seconds</option>
												  <option value="120">2 minutes</option>
												  <option value="240">4 minutes</option>
                                                  <option value="600">10 minutes</option>
                                                  <option value="1200">20 minutes</option>
                                                  <option value="2400">40 minutes</option>
												</select>
											</div>
										</div>
										<div class="row 200%">
											<div class="12u">
												<ul class="actions">
													<li><input type="submit" value="start auto refreshing" /></li>
													<li><input type="reset" value="Clear Form" class="alt" /></li>
												</ul>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						
					</div>
					<footer>
						<ul id="copyright">
						<!--	<li>&copy; SULTAN . All rights reserved.</li><li>2016</li>-->
						</ul>
					</footer>
				</article>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>

<?php

if (isset($_POST['url']))
{


	
	$urla = $_POST['url'] ;
	$time = $_POST['time1'] ;
	
$urlc = substr($urla, 0, 7);

if($urlc == 'http://'){
    $url7 = substr($urla, 7);
}
elseif($urlc == 'https:/'){
   $url8 = substr($urla, 8);
}else{
     header("Location: ?done=123");
}

echo '

<form id="myForm" action=""   >
        	    <input type="hidden" name="url7"  value="'.$url7.'"  />
				<input type="hidden" name="url8"  value="'.$url8.'"  />
				<input type="hidden" name="time"  value="'.$time.'"  />
			<input type="submit" value="Submit" />
    </form>
	<script type="text/javascript">
document.getElementById("myForm").submit();
</script>
	 ';

	exit();
}

?>