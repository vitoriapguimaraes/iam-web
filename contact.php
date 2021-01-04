<?php
if (isset($_POST['BTEnvia'])) {

	$name = $_POST['name'];
	$email = $_POST['email'];
	$city = $_POST['city'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];


	$email_remetente = "contato@kreathor.com.br";


	$email_destinatario = "email@querecebe";
	$email_reply = "$email";
	$email_assunto = "Contato formmail";

	$email_conteudo = "Nome = $name \n";
	$email_conteudo .= "Email = $email \n";
	$email_conteudo .= "Cidade = $city \n";
	$email_conteudo .= "Assunto = $subject \n";
	$email_conteudo .= "Mensagem = $message \n";


	$email_headers = implode("\n", array("From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente", "MIME-Version: 1.0", "X-Priority: 3", "Content-Type: text/html; charset=UTF-8"));
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Contato - I'm Sustentável</title>
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico" />
	<!-- Font Awesome -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<!-- Slick slider -->
	<link href="assets/css/slick.css" rel="stylesheet">
	<!-- Gallery Lightbox -->
	<link href="assets/css/magnific-popup.css" rel="stylesheet">
	<!-- Skills Circle CSS  -->
	<link rel="stylesheet" type="text/css" href="https://unpkg.com/circlebars@1.0.3/dist/circle.css">


	<!-- Main Style -->
	<link href="style.css" rel="stylesheet">

	<!-- Fonts -->

	<!-- Google Fonts Raleway -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,500i,600,700" rel="stylesheet">
	<!-- Google Fonts Open sans -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700,800" rel="stylesheet">


</head>

<body>



	<!--START SCROLL TOP BUTTON -->
	<a class="scrollToTop" href="#">
		<i class="fa fa-angle-up"></i>
	</a>
	<!-- END SCROLL TOP BUTTON -->

	<!-- Start Header -->
	<header id="mu-hero">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light mu-navbar">
				<!-- Text based logo -->
				<a class="navbar-brand mu-logo" href="index.html"><span>I'M SUSTENTÁVEL</span></a>
				<!-- image based logo -->
				<!-- <a class="navbar-brand mu-logo" href="index.html"><img src="assets/images/logo.png" alt="logo"></a> -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="fa fa-bars"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto mu-navbar-nav">
						<li class="nav-item">
							<a href="index.html">Home</a>
						</li>
						<li class="nav-item dropdown">
							<a class="dropdown-toggle" href="#" role="button" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filiais</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="index.html">Pongaí/SP</a>
								<a class="dropdown-item" href="index-rp.html">Ribeirão Preto/SP</a>
							</div>
						</li>
						<li class="nav-item active"><a href="contact.html">Contato</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</header>
	<!-- End Header -->

	<!-- Start Breadcrumb -->
	<div id="mu-breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav aria-label="breadcrumb" role="navigation">
						<ol class="breadcrumb mu-breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Contato</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumb -->


	<!-- Start main content -->
	<main>
		<!-- Start Contact -->
		<section id="mu-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-contact-area">
							<!-- Title -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-title">
										<h2>Fale com a gente</h2>
									</div>
								</div>
							</div>
							<!-- Start Contact Content -->
							<div class="mu-contact-content">
								<div class="row">

									<div class="col-md-12">
										<div class="mu-contact-form-area">
											<div id="form-messages"></div>
											<form id="ajax-contact" form action="<? $PHP_SELF; ?>" method="POST" class="mu-contact-form">

												<div class="form-group">
													<span class="fa fa-user mu-contact-icon"></span>
													<input type="text" class="form-control" placeholder="Seu nome" id="name" name="name" required>
												</div>

												<div class="form-group">
													<span class="fa fa-envelope mu-contact-icon"></span>
													<input type="email" class="form-control" placeholder="Seu e-mail" id="email" name="email" required>
												</div>

												<div class="form-group">
													<span class="fa fa-map mu-contact-icon"></span>
													<input type="text" class="form-control" placeholder="Sua cidade" id="city" name="city" required>
												</div>

												<div class="form-group">
													<span class="fa fa-folder-open-o mu-contact-icon"></span>
													<input type="text" class="form-control" placeholder="Assunto" id="subject" name="subject" required>
												</div>

												<div class="form-group">
													<span class="fa fa-pencil-square-o mu-contact-icon"></span>
													<textarea class="form-control" placeholder="Sua mensagem" id="message" name="message" required></textarea>
												</div>
												<button type="submit" name="BTEnvia" value="Enviar" class="mu-send-msg-btn"><span>Enviar</span></button>
											</form>
										</div>
									</div>

								</div>
							</div>
							<!-- End Contact Content -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact -->

		<section id="mu-service">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-service-area">
							<div class="row">
								<div class="col-md-12">
									<div class="mu-service-content">
										<div class="row">
											<!-- Start single service -->
											<div class="col-md-4">
												<div class="mu-single-service">
													<div class="mu-single-service-content">
														<h3>Telefone</h3>
														<p>(14) 99678-6623</p>
													</div>
												</div>
											</div>
											<!-- End single service -->
											<!-- Start single service -->
											<div class="col-md-4">
												<div class="mu-single-service">
													<div class="mu-single-service-content">
														<h3>E-mail</h3>
														<p>contato@eusustentavel.com.br</p>
													</div>
												</div>
											</div>
											<!-- End single service -->
											<!-- Start single service -->
											<div class="col-md-4">
												<div class="mu-single-service">
													<div class="mu-single-service-content">
														<h3>Endereço</h3>
														<p>Lorem Ipsum, XX</p>
													</div>
												</div>
											</div>
											<!-- End single service -->
										</div>
									</div>
								</div>
							</div>
							<!-- End Service Content -->
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Google map -->
		<div id="mu-google-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3508.8176744277202!2d-81.47150788457147!3d28.424757900613237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e77e378ec5a9a9%3A0x2feec9271ed22c5b!2sOrange+County+Convention+Center!5e0!3m2!1sen!2sbd!4v1503833952781" width="850" height="400" allowfullscreen></iframe>
		</div>


	</main>

	<!-- End main content -->


	<!-- Start footer -->
	<footer id="mu-footer">
		<div class="mu-footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-footer-bottom-area">
							<p class="mu-copy-right">Desenvolvido por <a href="#">kreathor.dev</a>. Todos os direitos
								reservados. 2020.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</footer>
	<!-- End footer -->

	<!-- JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<!-- Slick slider -->
	<script type="text/javascript" src="assets/js/slick.min.js"></script>
	<!-- Progress Bar -->
	<script src="https://unpkg.com/circlebars@1.0.3/dist/circle.js"></script>
	<!-- Filterable Gallery js -->
	<script type="text/javascript" src="assets/js/jquery.filterizr.min.js"></script>
	<!-- Gallery Lightbox -->
	<script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- Counter js -->
	<script type="text/javascript" src="assets/js/counter.js"></script>
	<!-- Ajax contact form  -->
	<script type="text/javascript" src="assets/js/app.js"></script>


	<!-- Custom js -->
	<script type="text/javascript" src="assets/js/custom.js"></script>

	<!-- About us Skills Circle progress  -->
	<script>
		// First circle
		new Circlebar({
			element: "#circle-1",
			type: "progress",
			maxValue: "90"
		});

		// Second circle
		new Circlebar({
			element: "#circle-2",
			type: "progress",
			maxValue: "84"
		});

		// Third circle
		new Circlebar({
			element: "#circle-3",
			type: "progress",
			maxValue: "60"
		});

		// Fourth circle
		new Circlebar({
			element: "#circle-4",
			type: "progress",
			maxValue: "74"
		});
	</script>

</body>

</html>