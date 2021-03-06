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
	<title>DonorIlmu</title>

	<meta name="description" content="DonorIlmu membantu tenaga ajar mencapai Anda dan mereka yang membutuhkan." />
	<meta name="keywords" content="donasi, ilmu, donor, crowdfunding" />

	<script
	src="https://code.jquery.com/jquery-3.1.1.min.js"
	integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" class="ui" href="/semantic/dist/semantic.min.css">

	<link rel="stylesheet" type="text/css" href="/@assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="/@assets/css/campaign.css">
</head>
<body>

	<?php	include('../@component/sidebar.php') ?>

	<!-- Page Contents -->
	<div class="pusher">
	  <div class="ui inverted vertical masthead center aligned segment">
			
			<?php	include('../@component/navbar.php') ?>

	    <div class="ui text container">
				<h1 class="ui inverted header">
		       <i>Tidak pernah berhenti belajar.</i>
	      </h1>
	      <h2>Bantu tenaga ajar untuk mencapai <b>Anda</b> & mereka yang membutuhkan.</h2>
	    </div>

	  </div>

		<div id="campaign" class="ui vertical segment">


				<div class="ui container">
					<div class="ui container">
						<div class="ui small secondary menu">
							<div class="ui item">
							<div class="ui dropdown item">
								<i class="caret down icon"></i>
							  <span class="text">Urut berdasarkan</span>
						    <div class="ui menu">
						      <a class="item">Terakhir ditambah</a>
						      <a class="item">Paling populer</a>
						      <a class="item">Perkembangan</a>
						    </div>
							</div>
							<div class="ui floating dropdown labeled item">
							  <i class="filter icon"></i>
							  <span class="text">Filter campaign</span>
							  <div class="menu">
							    <div class="ui icon search input">
							      <i class="search icon"></i>
							      <input type="text" placeholder="Search tags...">
							    </div>
							    <div class="divider"></div>
							    <div class="header">
							      <i class="tags icon"></i>
							      Tag Label
							    </div>
							    <div class="scrolling menu">
							      <div class="item">
							        <div class="ui red empty circular label"></div>
							        Important
							      </div>
							      <div class="item">
							        <div class="ui blue empty circular label"></div>
							        Announcement
							      </div>
							      <div class="item">
							        <div class="ui black empty circular label"></div>
							        Cannot Fix
							      </div>
							      <div class="item">
							        <div class="ui purple empty circular label"></div>
							        News
							      </div>
							      <div class="item">
							        <div class="ui orange empty circular label"></div>
							        Enhancement
							      </div>
							      <div class="item">
							        <div class="ui empty circular label"></div>
							        Change Declined
							      </div>
							      <div class="item">
							        <div class="ui yellow empty circular label"></div>
							        Off Topic
							      </div>
							      <div class="item">
							        <div class="ui pink empty circular label"></div>
							        Interesting
							      </div>
							      <div class="item">
							        <div class="ui green empty circular label"></div>
							        Discussion
							      </div>
							    </div>
							  </div>
							</div>

								<div class="right item">
									<div class="ui icon big input">
							      <input type="text" placeholder="Cari...">
							      <i class="search icon"></i>
							    </div>
							  </div>
							</div>
					  </div>


						</div>
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
				</div>

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
				</div>

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
				</div>

				<br><br><br>
				<div class="ui center aligned grid">
					<div class="ui pagination menu">
						<a class="item" href="#campaign">
					    <i class="angle left icon"></i>
					  </a>
					  <div class="item active">
					    1
					  </div>
					  <a class="item" href="#campaign">
					    2
					  </a>
					  <a class="item" href="#campaign">
					    3
					  </a>
						<a class="item" href="#campaign">
					    4
					  </a>
					  <a class=" disabled item">
					    ...
					  </a>
					  <a class="item" href="#campaign">
					    12
					  </a>
						<a class="item" href="#campaign">
					    <i class="angle right icon"></i>
					  </a>
					</div>
				</div>
				</div>
			</div>

			</div>

		</div>

	  <div id="pasang" class="ui vertical stripe segment">
	    <div class="ui text container center aligned">
	      <h4 class="ui horizontal header divider">
	        <a href="#">KAMU ?</a>
	      </h4>
	      <h3 class="ui header">Ingin Memasang Campaign?</h3>
	      <p>Yes I know you probably disregarded the earlier boasts as non-sequitur filler content, but its really true. It took years of gene splicing and combinatory DNA research, but our bananas can really dance.</p>
				<br>
	      <a class="ui huge primary button">PASANG CAMPAIGN</a>
	    </div>
	  </div>


	  <div class="ui inverted vertical footer segment">
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
	</div>

	<script src="/semantic/dist/semantic.min.js"></script>

	<script src="/@assets/js/script.js"></script>
	<script src="/@assets/js/campaign.js"></script>
</body>
</html>
