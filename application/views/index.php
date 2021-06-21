<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CRUD - Codeigniter</title>

	<style>
		body {
			margin-top: 1rem;
            font-family: Arial, Helvetica, sans-serif;
            background-size: cover;
            color: white;
            background-color: #5b00ab;
            background-image: url(<?php echo base_url();?>/assets/andromeda.jpg)
		}

		.topnav {
		overflow: hidden;
		background-color: #333;
		}

		.topnav a {
		float: left;
		display: block;
		color: #f2f2f2;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
		font-size: 17px;
		}

		.topnav a:hover {
		background-color: #5b00ab;
		color: white;
		}

		.topnav a.active {
		background-color: #5b00ab;
		color: white;
		}

		.topnav .icon {
		display: none;
		}

		@media screen and (max-width: 600px) {
		.topnav a:not(:first-child) {display: none;}
		.topnav a.icon {
			float: right;
			display: block;
		}
		}

		@media screen and (max-width: 600px) {
		.topnav.responsive {position: relative;}
		.topnav.responsive .icon {
			position: absolute;
			right: 0;
			top: 0;
		}
		.topnav.responsive a {
			float: none;
			display: block;
			text-align: left;
		}
		}
	</style>
</head>
<body>
	<div class="topnav" id="myTopnav">
		<a href="#" class="active">Home</a>
		<a href="<?= base_url('index.php/c_mahasiswa') ?>">Mahasiswa</a>
		<a href="<?= base_url('index.php/C_Report') ?>">Report</a>
	</div>

	<div>
		<h1>Selamat Datang di Website Codeigniter Arya</h1>
		<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta quae atque voluptatibus aut fugit reprehenderit reiciendis ea eum tenetur blanditiis, id culpa optio doloribus nam maxime odit fuga quod! Id reiciendis velit nihil fuga corporis ex pariatur autem sequi nemo tenetur illo, modi aliquid laudantium accusamus maxime iste odio sit!</p>
	</div>
</body>
</html>