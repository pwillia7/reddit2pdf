<!DOCTYPE html> 
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>reddit2PDF - Print what's on Reddit right now!</title>
		<link rel="stylesheet" href="css/main.css">
		 <!-- Google Font -->
		<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
		 <!-- Bootstrap -->
		<link href="css/cover.css" rel="stylesheet">
    	<!-- <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet"> -->
    	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

	    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body>
	<div class="container-fluid">
		<h1 class="cover-heading logo">reddit2PDF</h1>
		<div class="site-wrapper">
	        <div class="cover-container">
	          <div class="inner cover">
	            
	            <p class="lead">This page will serve you any subreddit's front page and some articles as a PDF. Click on the button below to get started.</p>
	            <p class="lead">
	            <button class="btn btn-lg btn-default changeScene">
	              Get Started
	            </button>
	            </p>
	          </div>
	        </div>
	    </div>
		<div class="site-wrapper" style="display: none;">
			<div class="container-fluid">
				<form class="form-inline" role="form" action="getReddit.php" method="post">
				
					
							<div class="row">
						
								<div class="form-group">
									<label for="articlenum">How many full articles would you like?</label>
									<select class="form-control input-sm" id="articlenum" name="articlenum" id="select">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									</select>
								</div>
		
				</div>
					
		
				
							<div class="form-group">
								<label for="subreddit">Which Subreddit do you want to use?</label>
								<input id="subreddit" name="subreddit" type="text" value="Front Page"/>
							</div>

		
			
							<div class="form-group">
								<button class="btn btn-default" id="submit" type="submit">Click here to get Reddit</button> <span>   -- This may take a minute</span>
							</div>
	
				
				</form>
			</div>
		</div>
		<div class="mastfoot">
	    	<div class="inner">
	    		<p><a href="http://ptkwilliams.com">ptkwilliams.com</a> - &copy;2014 Patrick Williams</p>
	        </div>
	    </div>
	</div>
	<!-- JS Scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	<script>
	$('.changeScene').click(function(){
		$('.site-wrapper').toggle();
	})
	</script>

	</body>
</html>
