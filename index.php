<?php
$root = "";
$subtitle = "";
include $root . 'header.php';
?>
<link rel="stylesheet" href="<?php echo $root; ?>assets/css/index.css" type="text/css">

<body>
	<div id="home-bg" class="img-bg">
		<nav class="img-bg-nav navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="">
				<img src="imForSite/logo.png" height="30" class="d-inline-block align-top" alt="" loading="lazy"> MY V BIKE RENTAL
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<div class="navbar-nav">
					<a class="nav-link active" href="<?php echo $root ?>">Home<span class="sr-only">(current)</span></a>
					<a class="nav-link" href="rent">Rent</a>
					<a class="nav-link" href="<?php echo $root ?>contact.php">Contact Us</a>
				</div>
			</div>
		</nav>
		<div class="img-bg-caption">
			<span class="img-bg-title">MY V BIKE RENTAL</span>
		</div>
	</div>

	<section>
		<div class="container-fluid text-center">
			<div class="row">
				<div id="intro" class="p-5 text-center">
					<div class="mb-4 h5">
						We are here to let people enjoy the freedom of bike riding and at the same time delegate all expenses for bike service to our company. You just get pure emotions! We take care of the rest!
					</div>
					<div class="mb-4 h5">
						Everyone has own reasons to ride a bike: lack of adrenalin in life, feeling of freedom, passion for speed. But all of you have one common feature: feeling of happiness and pure satisfaction when riding a bike! no one can take it from you! So which bike would you choose?
					</div>
					<div class="mb-4 h5">
						If you like long and tiring journeys we are able to advise which bike to take. We have a big amount of motor bikes which provide comfort at long distance rides.
					</div>
					<div class="mb-4 h5">
						Those of you who prefer fast and smooth ride will also find good deals here. No more need to wait in jams and waste your time. Compact and low-cc bikes will work for you at best!
					</div>
					<div class="mb-4 h5">We encourage you to check out our offer!</div>
					<div class="mt-6">
						<a href="rent" class="btn btn-lg btn-warning">Our Offer</a>
					</div>
				</div>
			</div>
		</div>
	</section>
    <?php include $root . 'footer.html' ?> 
</body>

</html>