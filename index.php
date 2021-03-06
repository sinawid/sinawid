<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
	<!-- Standard Meta -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- <link rel="image_src" type="image/jpeg" href="/images/logo.png" /> -->

	<!-- Site Properities -->
	<title>DonorIlmu | Beranda</title>

	<meta name="description" content="DonorIlmu membantu tenaga ajar mencapai Anda dan mereka yang membutuhkan." />
	<meta name="keywords" content="donasi, ilmu, donor, crowdfunding" />

	<script
	src="https://code.jquery.com/jquery-3.1.1.min.js"
	integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" class="ui" href="/semantic/dist/semantic.min.css">

	<link rel="stylesheet" type="text/css" href="/@assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="/@assets/css/home.css">
</head>
<body>


	<?php include('@component/sidebar.php') ?>

	<!-- Page Contents -->
	<div class="pusher">
	  <div class="ui inverted vertical masthead center aligned segment">

			<?php	include('@component/navbar.php') ?>

	    <div class="ui text container">
				<h1 class="ui inverted header">
		       <i>Tidak pernah berhenti belajar.</i>
	      </h1>
				<br>
	      <h2>Bantu tenaga ajar untuk mencapai <b>Anda</b> & mereka yang membutuhkan.</h2>
				<br>

				<a class="ui big primary animated button" href="/<?php
				if (isset($_SESSION['username'])){
					echo "campaign";
				} else {
					echo "register";
				} ?>">
					<div class="visible content">
						Mulai  #DONORILMU
						<i class="right arrow icon"></i>
					</div>
					<div class="hidden content">Daftar sekarang</div>
				</a>

	    </div>

	  </div>

		<div class="ui four tiny statistics yellow raised segment">
			<div class="statistic">
				<div class="value">
					22
				</div>
				<div class="label">
					Saves
				</div>
			</div>
			<div class="statistic">
				<div class="text value">
					Three<br>
					Thousand
				</div>
				<div class="label">
					Signups
				</div>
			</div>
			<div class="statistic">
				<div class="value">
					<i class="plane icon"></i> 5
				</div>
				<div class="label">
					Flights
				</div>
			</div>
			<div class="statistic">
				<div class="value">
					<i class="user icon"></i>
					42
				</div>
				<div class="label">
					Team Members
				</div>
			</div>
		</div>

		<div id="campaign" class="ui vertical segment">

			<div class="ui center aligned header">
				<h1>CAMPAIGN TERBARU</h1>
			</div>
			<br><br>

			<div class="segments">
				<div class="ui link three special cards">
					<div id="card" class="ui card">
						<a class="blurring dimmable image" href="#">
							<div class="ui inverted dimmer">
								<div class="content inverted">
									<div class="center">
										<i class="icon huge eye"></i>
										<h3>Lihat detail</h3>
									</div>
								</div>
							</div>
							<img src="/@assets/img/banner.jpg" alt="">
						</a>
						<div class="content">
							<div class="header">Title</div>
							<div class="meta">
								<a href="" class="group">Meta</a>
							</div>
							<div class="description">
								One or two sentence description that may go to several lines
							</div>
							<br>
							<div class="ui indicating progress active">
								<div class="bar">
									<div class="progress"></div>
								</div>
								<div class="label">IDR out of IDR</div>
							</div>
						</div>
						<div class="extra content">
							<span class="right floated">
								#tag1 #tag2 #tag3
							</span>
							<a href="#">
								<span>
									<i class="user icon"></i>
									username
								</span>
							</a>
						</div>
					</div>

					<div id="card" class="ui card">
						<a class="blurring dimmable image" href="#">
							<div class="ui inverted dimmer">
								<div class="content inverted">
									<div class="center">
										<i class="icon huge eye"></i>
										<h3>Lihat detail</h3>
									</div>
								</div>
							</div>
							<img src="/@assets/img/banner.jpg" alt="">
						</a>
						<div class="content">
							<div class="header">Title</div>
							<div class="meta">
								<a href="" class="group">Meta</a>
							</div>
							<div class="description">
								One or two sentence description that may go to several lines
							</div>
							<br>
							<div class="ui indicating progress active">
								<div class="bar">
									<div class="progress"></div>
								</div>
								<div class="label">IDR out of IDR</div>
							</div>
						</div>
						<div class="extra content">
							<span class="right floated">
								#tag1 #tag2 #tag3
							</span>
							<a href="#">
								<span>
									<i class="user icon"></i>
									username
								</span>
							</a>
						</div>
					</div>

					<div id="card" class="ui card">
						<a class="blurring dimmable image" href="#">
							<div class="ui inverted dimmer">
								<div class="content inverted">
									<div class="center">
										<i class="icon huge eye"></i>
										<h3>Lihat detail</h3>
									</div>
								</div>
							</div>
							<img src="/@assets/img/banner.jpg" alt="">
						</a>
						<div class="content">
							<div class="header">Title</div>
							<div class="meta">
								<a href="" class="group">Meta</a>
							</div>
							<div class="description">
								One or two sentence description that may go to several lines
							</div>
							<br>
							<div class="ui indicating progress active">
								<div class="bar">
									<div class="progress"></div>
								</div>
								<div class="label">IDR out of IDR</div>
							</div>
						</div>
						<div class="extra content">
							<span class="right floated">
								#tag1 #tag2 #tag3
							</span>
							<a href="#">
								<span>
									<i class="user icon"></i>
									username
								</span>
							</a>
						</div>
					</div>

					<div id="card" class="ui card">
						<a class="blurring dimmable image" href="#">
							<div class="ui inverted dimmer">
								<div class="content inverted">
									<div class="center">
										<i class="icon huge eye"></i>
										<h3>Lihat detail</h3>
									</div>
								</div>
							</div>
							<img src="/@assets/img/banner.jpg" alt="">
						</a>
						<div class="content">
							<div class="header">Title</div>
							<div class="meta">
								<a href="" class="group">Meta</a>
							</div>
							<div class="description">
								One or two sentence description that may go to several lines
							</div>
							<br>
							<div class="ui indicating progress active">
								<div class="bar">
									<div class="progress"></div>
								</div>
								<div class="label">IDR out of IDR</div>
							</div>
						</div>
						<div class="extra content">
							<span class="right floated">
								#tag1 #tag2 #tag3
							</span>
							<a href="#">
								<span>
									<i class="user icon"></i>
									username
								</span>
							</a>
						</div>
					</div>

					<div id="card" class="ui card">
						<a class="blurring dimmable image" href="#">
							<div class="ui inverted dimmer">
								<div class="content inverted">
									<div class="center">
										<i class="icon huge eye"></i>
										<h3>Lihat detail</h3>
									</div>
								</div>
							</div>
							<img src="/@assets/img/banner.jpg" alt="">
						</a>
						<div class="content">
							<div class="header">Title</div>
							<div class="meta">
								<a href="" class="group">Meta</a>
							</div>
							<div class="description">
								One or two sentence description that may go to several lines
							</div>
							<br>
							<div class="ui indicating progress active">
								<div class="bar">
									<div class="progress"></div>
								</div>
								<div class="label">IDR out of IDR</div>
							</div>
						</div>
						<div class="extra content">
							<span class="right floated">
								#tag1 #tag2 #tag3
							</span>
							<a href="#">
								<span>
									<i class="user icon"></i>
									username
								</span>
							</a>
						</div>
					</div>

					<div id="card" class="ui card">
						<a class="blurring dimmable image" href="#">
							<div class="ui inverted dimmer">
								<div class="content inverted">
									<div class="center">
										<i class="icon huge eye"></i>
										<h3>Lihat detail</h3>
									</div>
								</div>
							</div>
							<img src="/@assets/img/banner.jpg" alt="">
						</a>
						<div class="content">
							<div class="header">Title</div>
							<div class="meta">
								<a href="" class="group">Meta</a>
							</div>
							<div class="description">
								One or two sentence description that may go to several lines
							</div>
							<br>
							<div class="ui indicating progress active">
								<div class="bar">
									<div class="progress"></div>
								</div>
								<div class="label">IDR out of IDR</div>
							</div>
						</div>
						<div class="extra content">
							<span class="right floated">
								#tag1 #tag2 #tag3
							</span>
							<a href="#">
								<span>
									<i class="user icon"></i>
									username
								</span>
							</a>
						</div>
					</div>
				</div>

				<div class="ui center aligned grid">
					<a href="/campaign" class="ui big basic button">
						<label>Lihat lainnya</label>
					</a>
				</div>

			</div>

		</div>


	  <div class="ui vertical stripe segment">
	    <div class="ui middle aligned stackable grid container">
	      <div class="row">
	        <div class="eight wide column">
	          <h3 class="ui header">We Help Companies and Companions</h3>
	          <p>We can give your company superpowers to do things that they never thought possible. Let us delight your customers and empower your needs...through pure data analytics.</p>
	          <h3 class="ui header">We Make Bananas That Can Dance</h3>
	          <p>Yes that's right, you thought it was the stuff of dreams, but even bananas can be bioengineered.</p>
	        </div>
	        <div class="six wide right floated column">
	          <img src="@assets/img/banner.jpg">
	        </div>
	      </div>
	      <div class="row">
	        <div class="center aligned column">
	          <a class="ui huge button">Check Them Out</a>
	        </div>
	      </div>
	    </div>
	  </div>


	  <div class="ui vertical stripe quote segment">
	    <div class="ui equal width stackable internally celled grid">
	      <div class="center aligned row">
	        <div class="column">
	          <h3>"What a Company"</h3>
	          <p>That is what they all say about us</p>
	        </div>
	        <div class="column">
	          <h3>"I shouldn't have gone with their competitor."</h3>
	          <p>
	            <img src="/@assets/img/banner.jpg" class="ui avatar image"> <b>Nan</b> Chief Fun Officer Acme Toys
	          </p>
	        </div>
	      </div>
	    </div>
	  </div>

	  <div class="ui vertical stripe segment">
	    <div class="ui text container">
	      <h3 class="ui header">Breaking The Grid, Grabs Your Attention</h3>
	      <p>Instead of focusing on content creation and hard work, we have learned how to master the art of doing nothing by providing massive amounts of whitespace and generic content that can seem massive, monolithic and worth your attention.</p>
	      <a class="ui large button">Read More</a>
	      <h4 class="ui horizontal header divider">
	        <a href="#">Case Studies</a>
	      </h4>
	      <h3 class="ui header">Did We Tell You About Our Bananas?</h3>
	      <p>Yes I know you probably disregarded the earlier boasts as non-sequitur filler content, but its really true. It took years of gene splicing and combinatory DNA research, but our bananas can really dance.</p>
	      <a class="ui large button">I'm Still Quite Interested</a>
	    </div>
	  </div>


	  <footer class="ui inverted vertical footer segment">
	    <div class="ui container">
	      <div class="ui stackable inverted divided equal height stackable grid">
	        <div class="three wide column">
	          <h4 class="ui inverted header">About</h4>
	          <div class="ui inverted link list">
	            <a href="#" class="item">Sitemap</a>
	            <a href="#" class="item">Contact Us</a>
	            <a href="#" class="item">Religious Ceremonies</a>
	            <a href="#" class="item">Gazebo Plans</a>
	          </div>
	        </div>
	        <div class="three wide column">
	          <h4 class="ui inverted header">Services</h4>
	          <div class="ui inverted link list">
	            <a href="#" class="item">Banana Pre-Order</a>
	            <a href="#" class="item">DNA FAQ</a>
	            <a href="#" class="item">How To Access</a>
	            <a href="#" class="item">Favorite X-Men</a>
	          </div>
	        </div>
	        <div class="seven wide column">
	          <h4 class="ui inverted header">Footer Header</h4>
	          <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
	        </div>
	      </div>
	    </div>
	  </div>
	</footer>

	<script src="/semantic/dist/semantic.min.js"></script>

	<script src="/@assets/js/script.js"></script>
	<script src="/@assets/js/home.js"></script>
</body>
</html>
