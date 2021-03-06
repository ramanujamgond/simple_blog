<!DOCTYPE html>
<html>
<head>
	<title>BLOG POST CREATOR</title>
	<link rel="icon" href="blog_icon.ico" type="image/ico" sizes="64x64">
	<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"/>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

	<style type="text/css">
		.body_bg {
			background-color: #cc00ff;
  			padding: 2.25em 1.6870em;
  			background-image: -webkit-repeating-linear-gradient(135deg, rgba(0,0,0,.3), rgba(0,0,0,.3) 1px, transparent 2px, transparent 2px, rgba(0,0,0,.3) 3px);
  			background-image: -moz-repeating-linear-gradient(140deg, rgba(0,0,0,.3), rgba(0,0,0,.3) 1px, transparent 2px, transparent 2px, rgba(0,0,0,.3) 3px);
  			background-image: -o-repeating-linear-gradient(135deg, rgba(0,0,0,.3), rgba(0,0,0,.3) 1px, transparent 2px, transparent 2px, rgba(0,0,0,.3) 3px);
  			background-image: repeating-linear-gradient(140deg, rgba(0,0,0,.3), rgba(0,0,0,.3) 1px, transparent 2px, transparent 2px, rgba(0,0,0,.3) 3px);
  			-webkit-background-size: 4px 4px;
  			-moz-background-size: 4px 4px;
  		}

  		h2, h3 {
  			color: #ffffff;
  			text-align: center;
  			font: bold;
			font-size: 25px;
  			color: grey;
  			text-shadow: 0 1px 0 #ccc,
		                 0 2px 0 #c9c9c9,
		                 0 3px 0 #bbb,
		                 0 4px 0 #b9b9b9,
		                 0 5px 0 #aaa,
		                 0 6px 1px rgba(0,0,0,.1),
		                 0 0 5px rgba(0,0,0,.1),
		                 0 1px 3px rgba(0,0,0,.3),
		                 0 3px 5px rgba(0,0,0,.2),
		                 0 5px 10px rgba(0,0,0,.25),
		                 0 10px 10px rgba(0,0,0,.2),
		                 0 20px 20px rgba(0,0,0,.15);
  		}

  		.form-control {
  			border: 1px solid #7575a3;
    		box-shadow: 0px 0px 8px #7575a3;
    		-moz-box-shadow: 0px 0px 8px #7575a3;
    		-webkit-box-shadow: 0px 0px 8px #7575a3;
  		}

  		.form-control:focus {
    		border-color: #b3b3ff;
    		box-shadow: 0 0 10px #b3b3ff;
		}

		.btn {
  			border-radius: 20px;
  			border: 0;
  			transition: .2s ease-out;
			color: red;
  			color: #fff;
  			margin: 6px;
  			box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
		}

		.btn:hover {
  			color: #fff;
  			box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		}

		.btn:active, .btn:focus, .btn.active {
  			outline: 0;
  			color: blue;
		}

		.btn-default {
  			background: #2BBBAD;
		}

		.btn-default:hover, .btn-default:focus {
  			background-color: #30cfc0 !important;
		}

		.btn-default.active {
  			background-color: #186860 !important;
		}

		.btn-warning {
  			background: #FF8800;
		}

		.btn-warning:hover, .btn-warning:focus {
  			background-color: #ff961f !important;
		}

		.btn-warning.active {
  			background-color: #cc8800 !important;
		}
	</style>
</head>

<body class="body_bg">

<div class="container">
	<div class="row">
	<center>
	<h2> BLOG POST CREATOR </h2>
	<form action="save.php" method="post">
		<h3>Title</h3>
		<p><input type="text" class="form-control" style="width:20%;" name="title" id="title"/></p>
		<h3>Content</h3>
		<textarea name="content" class="form-control" style="width:50%;" rows="15"></textarea>
		<br>
		<p><input type="submit" class="btn btn-info btn-lg btn-default" name="btn_submit" value="Save"/></p>
	</form>
	<a class="btn btn-primary btn-lg btn-warning" href="view.php">View Articles</a>
</center>
</div>
</div>

</body>
</html>
