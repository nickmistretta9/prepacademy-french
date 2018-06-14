<?php
/*
Template Name: Home Page
*/
?>
<!-- Header -->
<?php get_header(); ?>

<section class="hero">
	<div class="hero-slider">
		<div><img src="<?php bloginfo('template_directory'); ?>/dist/images/hero.jpg" alt=""></div>
	</div>
	<div class="hero-caption">
		<img src="<?php bloginfo('template_directory'); ?>/dist/images/hero-caption.png">
	</div>
</section>
<section class="ctas">
	<div class="container-fluid">
		<div class="flex">
			<div class="cta-box">
				<p class="title" data-mh>Pourquoi Les Tuteurs de Prep Academy?</p>
				<div class="cta-action">
					<a href="<?php echo home_url('/comment-nous-travaillons'); ?>">Comment Nous Travaillons</a>
				</div>
			</div>
			<div class="cta-box">
				<p class="title" data-mh>Des Enseignants Certifiés et Assermentés</p>
				<div class="cta-action">
					<a href="<?php echo home_url('/notre-philosophie-d-education'); ?>">Notre Philosophie d Education</a>
				</div>
			</div>
			<div class="cta-box">
				<p class="title" data-mh>Obtenez le Tutorat Dont Vos Élèves Ont Besoins</p>
				<div class="cta-action">
					<a href="<?php echo home_url('/nos-services'); ?>">Nos Services</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="main-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; else: ?>
				<?php endif; ?>
			</div>
			<div class="col-sm-6">
				<img src="<?php bloginfo('template_directory'); ?>/dist/images/content-image1.jpg">
				<p>Nos tuteurs créaient un environement de travail comfortable pour votre enfant, afin qu’il puisse s’épanouir dans ses études. Notre but est d’établir une connection forte avec nos élèves et leurs parents, avec des conversations téléphoniques personelle et des rapport en personne, plutôt que par emails.</p>
				<h2>Commencez Par Réserver Nos Cours Particuliers - (226) 270-2062.</h2>
				<p>Que votre enfant entre en classe élémentaire ou qu’il soit au lycée, nos tuteurs ont les ressources, l’expérience, et les connaissances pour l’aider à obtenir des résultats scholaire d’excellence. Lorsque vous choisissez de travailler avec les Tuteurs de Prep Academy, vous pourrez observer la différence dès les premiers relevés de notes.</p>
				<div class="callout-box">
					Les Tuteurs de Prep Academy de Montréal sont disponibles pour discuter des besoins du tutorat de votre enfant. Contactez nous au (226) 270-2062.
				</div>
				<div class="home-cta-buttons">
					<button class="btn-info"><a href="<?php echo home_url('/notre-philosophie-d-education'); ?>">Tutorat à Domicile</a></button>
					<button class="btn-info"><a href="<?php echo home_url('/matieres'); ?>">Nos Matières</a></button>
					<button class="btn-info"><a href="<?php echo home_url('/contactez-nous'); ?>">Contactez Nous</a></button>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="why-prep">
	<div class="container-fluid">
		<div class="header">
			<h2>POURQUOI LES TUTEURS DE PREP ACADEMY?</h2>
		</div>
		<div class="flex">
			<div class="first-third">
				<div class="sub">
					<div class="icon-container"></div>
					<div class="text">
						<h3>Enseignants Assermentés</h3>
						<p>Nous travaillons avec le curriculum de la classe actuelle de nos élèves.</p>
					</div>
				</div>
				<div class="sub">
					<div class="icon-container"></div>
					<div class="text">
						<h3>Cours Particuliers Adaptés à Domicile</h3>
						<p>Nos tuteurs viennent à votre domicile à Montréal.</p>
					</div>
				</div>
			</div>
			<div class="second-third">
				<h3>Nous vous proposons des cours particuliers avec un côté personnel!</h3>
			</div>
			<div class="third-third">
				<div class="sub">
					<div class="icon-container"></div>
					<div class="text">
						<h3>Une Attention Personnelle et Privée</h3>
						<p>Cours particuliers privé pour assurer une meilleure compréhension</p>
					</div>
				</div>
				<div class="sub">
					<div class="icon-container"></div>
					<div class="text">
						<h3>Renforcer la Confiance en soi de Votre Enfant</h3>
						<p>Spécialisation sur la compréhension du curriculum et augmentation de confiance en soi dans les salles de classes.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="home-contact">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6" data-mh>
				<img src="<?php bloginfo('template_directory'); ?>/dist/images/contact-img.png">
			</div>
			<div class="col-sm-6" data-mh>
				<div class="footer-contact">
					<?php include (TEMPLATEPATH . '/dist/inc/contactForm.php'); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Footer -->
<?php get_footer(); ?>