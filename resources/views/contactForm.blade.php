<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

    <title>Classroom Clone</title>
    <link rel="icon" href="ClassRoomClone-Icon.ico" type="image/x-icon">

<!--
Snapshot Template
http://www.templatemo.com/tm-493-snapshot

Zoom Slider
https://vegas.jaysalvat.com/

Caption Hover Effects
http://tympanus.net/codrops/2013/06/18/caption-hover-effects/
-->
    <link rel="stylesheet" href="landingAssets/css/bootstrap.min.css">
    <link rel="stylesheet" href="landingAssets/css/bootstrap.min.css">
	<link rel="stylesheet" href="landingAssets/css/animate.min.css">
	<link rel="stylesheet" href="landingAssets/css/font-awesome.min.css">
    <link rel="stylesheet" href="landingAssets/css/component.css">

    <link rel="stylesheet" href="landingAssets/css/owl.theme.css">
	<link rel="stylesheet" href="landingAssets/css/owl.carousel.css">
	<link rel="stylesheet" href="landingAssets/css/vegas.min.css">
	<link rel="stylesheet" href="landingAssets/css/style.css">

	<!-- Google web font  -->
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>

</head>
<body id="top" data-spy="scroll" data-offset="50" data-target=".navbar-collapse">

    <!-- Preloader section -->

    <div class="preloader">
        <div class="sk-spinner sk-spinner-pulse"></div>
    </div>


    <!-- Navigation section  -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon icon-bar"></span>
            <span class="icon icon-bar"></span>
            <span class="icon icon-bar"></span>
            </button>
            <a href="#top" class="navbar-brand smoothScroll">ClassRoomClone</a>
        </div>
            <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/" class="smoothScroll"><span>Inicio</span></a></li>
                <li><a href="contactForm" class="smoothScroll"><span>Contacto</span></a></li>
            </ul>
        </div>

        </div>
    </div>


<!-- Contact section -->
    <section id="contact">
        <div class="container">
            <div class="row">

                <div class="col-md-offset-1 col-md-10 col-sm-12">

                    <div class="col-lg-offset-1 col-lg-10 section-title wow fadeInUp" data-wow-delay="0.4s">
                        <h1>¿Cómo podemos ayudarte?</h1>
                        <p>Si tienes algunna duda, comentario o sugerencia, puedes contactarnos y nos comunicaremos contigo lo antes posible.</p>
                    </div>

                    <form action="#" method="post" class="wow fadeInUp" data-wow-delay="0.8s">
                        <div class="col-md-6 col-sm-6">
                            <input name="name" type="text" class="form-control" id="name" placeholder="Nombre" value="{{ $name }}">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <input name="email" type="email" class="form-control" id="email" placeholder="Correo" value="{{ $email }}">
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <textarea name="message" rows="6" class="form-control" id="message" placeholder="Mensaje"></textarea>
                        </div>
                        <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
                            <input type="submit" class="form-control" value="Enviar Mensaje">
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </section>


<!-- Footer section -->

<footer>
	<div class="container">

		<div class="row">

			<div class="col-md-12 col-sm-12">

                <ul class="social-icon">
                    <li><a href="https://www.linkedin.com/in/ismael-avila1/" class="fa fa-linkedin wow fadeInUp" data-wow-delay="0.6s"></a></li>
                    <li><a href="https://github.com/Ismael-Avila1" class="fa fa-github wow fadeInUp" data-wow-delay="0.8s"></a></li>
                </ul>

				<p class="wow fadeInUp"  data-wow-delay="1s" >&copy; <script>document.write(new Date().getFullYear())</script> | Created By Ismael Avila </p>

			</div>

		</div>

	</div>
</footer>

<!-- Back top -->
<a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>

<!-- Javascript  -->
<script src="landingAssets/js/jquery.js"></script>
<script src="landingAssets/js/bootstrap.min.js"></script>
<script src="landingAssets/js/vegas.min.js"></script>
<script src="landingAssets/js/modernizr.custom.js"></script>
<script src="landingAssets/js/toucheffects.js"></script>
<script src="landingAssets/js/owl.carousel.min.js"></script>
<script src="landingAssets/js/smoothscroll.js"></script>
<script src="landingAssets/js/wow.min.js"></script>
<script src="landingAssets/js/custom.js"></script>

</body>
</html>
