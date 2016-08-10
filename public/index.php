<?php

$version = '1.0.4';

$translations = [
	'sv' => []
];

$uri = explode('/', $_SERVER['REQUEST_URI']);
$isTack = (end($uri) === 'tack') ? TRUE : FALSE;
$isThankYou = (end($uri) === 'thank-you') ? TRUE : FALSE;

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<title>IT For Children</title>
	<meta name="description" content="IT for Children is a Swedish non-profit organization targeted towards Ghana, West Africa. Here we provide the necessary tools for children and youth to gain knowledge, education and confidence." />
	
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="IT For Children" />
	<meta property="og:description" content="IT for Children is a Swedish non-profit organization targeted towards Ghana, West Africa. Here we provide the necessary tools for children and youth to gain knowledge, education and confidence." />
	<meta property="og:url" content="https://itforchildren.org" />
	<meta property="og:site_name" content="IT For Children" />
	<meta property="og:image" content="http://itforchildren.org/img/og-image.png" />
	
	<link rel="shortcut icon" href="/favicon.ico" />
	<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<link href="https://fonts.googleapis.com/css?family=Material+Icons|Open+Sans:400,600,600italic,400italic,700,700italic" rel="stylesheet" />
	<link href="css/styles.min.css?v=<?php echo $version; ?>" rel="stylesheet" />
</head>
<body ontouchstart="">
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-66888805-1', 'auto');
		ga('send', 'pageview');
	</script>
	<article class="page">
		
<?php

include('section/home.php');
include('section/what.php');

?>

		<div class="section section--photo3 section--image"></div>

<?php

include('section/who.php');

?>

		<div class="section section--photo5 section--image"></div>

<?php

include('section/partners.php');
include('section/donate-money.php');

?>

		<footer class="section section--footer footer">
			<div class="wrap footer__wrap">
				<div class="footer__top">
					<a href="http://itforchildren.org" class="footer__logo">
						<img src="img/logo.png" alt="IT For Children" class="footer__logo__img" />
					</a>
					<div class="footer__ninetyaccount">
						<img src="img/90konto.png" alt="90-konto Svensk Insamlingskontroll" class="footer__ninetyaccount__img" />
					</div>
					<div class="footer__social">
						<a href="https://www.facebook.com/itforchildren" class="footer__share footer__share--facebook" target="_blank"><img src="img/facebook.png" alt="" class="footer__share__icon" /> <span>Facebook</span></a>
						<a href="https://twitter.com/IT_For_Children" class="footer__share footer__share--twitter" targe="_blank"><img src="img/twitter.png" alt="" class="footer__share__icon" /> <span>Twitter</span></a>
					</div>
				</div>
				<div class="footer__items grid">
					<div class="grid__item tab--one-half desk--one-quarter footer__item footer__item--address">
						<div class="footer__item__inner">
							<h3 class="footer__title">Address</h3>
							<p class="footer__text">
								<span class="icon footer__icon footer__icon--location">location_on</span> Vindragarvägen 10<br />
								117 50 Stockholm
							</p>
						</div>
					</div><!--
					--><div class="grid__item tab--one-half desk--one-quarter footer__item footer__item--phone">
						<div class="footer__item__inner">
							<h3 class="footer__title">Phone number</h3>
							<p class="footer__text"><a href="tel:+46703720094" class="footer__link"><span class="icon icon--16">local_phone</span> +46 (0) 703 72 00 94</a></p>
						</div>
					</div><!--
					--><div class="grid__item tab--one-half desk--one-quarter footer__item footer__item--email">
						<div class="footer__item__inner">
							<h3 class="footer__title">E-mail</h3>
							<p class="footer__text"><a href="info@itforchildren.org" class="footer__link"><span class="icon icon--16">email</span> info@itforchildren.org</a></p>
						</div>
					</div><!--
					--><div class="grid__item tab--one-half desk--one-quarter footer__item footer__item--organisation">
						<div class="footer__item__inner">
							<h3 class="footer__title">Organization number</h3>
							<p class="footer__text"><span class="footer__link">802493-7735</span></p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</article>

	<nav class="menu">
		<div class="wrap">
			<a href="#home" class="logo">
				<img src="img/logo.png" alt="IT For Children" class="logo__img logo__img--vertical" />
				<img src="img/logo-horizontal.png" alt="" class="logo__img logo__img--horizontal" />
			</a>
			<div class="ninetyaccount">
				<img src="img/90konto.png" alt="90-konto Svensk Insamlingskontroll" class="ninetyaccount__img" />
			</div>
			<ul class="menu__items">
				<a href="#what" class="button button--small button--transparent menu__item menu__item--first">What we do</a>
				<a href="#who" class="button button--small button--transparent menu__item">Who we are</a>
				<a href="#partners" class="button button--small button--transparent menu__item">Partners</a>
				<a href="#donate" class="button button--small button--border menu__item menu__item--last menu__item--donate">Donate</a>
			</ul>
			<a href="#menu" class="menu__pull" data-label="Menu"><span class="burger"></span></a>
		</div>
	</nav>

	<div class="modal">
		<div class="lightbox">
			<div class="lightbox__inner">
				<div class="lightbox__content"></div>
				<span class="lightbox__close lightbox__close--desktop icon icon--36"></span>
			</div>
			<span class="lightbox__close icon icon--36"></span>
		</div>
	</div>

	<script>
		window._translations = <?php echo json_encode($translations); ?>;
	</script>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script> window.jQuery || document.write('<script src="js/jquery.min.js?v=2.1.4"><\/script>'); </script>
	<script src="js/scripts.min.js?v=<?php echo $version; ?>"></script>
	<script>
		<?php if($isThankYou or $isTack): ?>
		$(window).load(function() {
			window.location.hash = '#donate';
		});
		<?php endif; ?>
	</script>
</body>
</html>