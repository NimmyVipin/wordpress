<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body>
	<div id="page">
		<div id="header">
			<div>
				<a class='logo' href="<?php bloginfo('url'); ?>" ><?php bloginfo('name'); ?><img src="images/logo.png" alt=""></a>
				<ul id="navigation">
					<li class="selected">
						<a href="index.html">Home</a>
					</li>
					<li>
						<a href="about.html">About</a>
					</li>
					<li class="menu">
						<a href="projects.html">Projects</a>
						<ul class="primary">
							<li>
								<a href="proj1.html">proj 1</a>
							</li>
						</ul>
					</li>
					<li class="menu">
						<a href="blog.html">Blog</a>
						<ul class="secondary">
							<li>
								<a href="singlepost.html">Single post</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="contact.html">Contact</a>
					</li>
				</ul>
			</div>
		</div>
		<div id="body" class="home">
			<div class="header">
				<div>
					<img src="images/satellite.png" alt="" class="satellite">
					
					<a href="blog.html" class="more">Read More</a>
					<h3>FEATURED PROJECTS</h3>
					<ul>
						<li>
							<a href="projects.html"><img src="images/project-image1.jpg" alt=""></a>
						</li>
						<li>
							<a href="projects.html"><img src="images/project-image2.jpg" alt=""></a>
						</li>
						<li>
							<a href="projects.html"><img src="images/project-image3.jpg" alt=""></a>
						</li>
						<li>
							<a href="projects.html"><img src="images/project-image4.jpg" alt=""></a>
						</li>
					</ul>
				</div>
			</div>
