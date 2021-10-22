<?php
/**
 * The template for displaying the footer
 *
 * @link https://github.com/luiz0067/city-hall-toledo
 *
 * @package WordPress
 * @subpackage city hall toledo
 * @since city hall toledo 1.0
 */
?>


<?php wp_footer(); ?>

<div style="background-color: #01913a; padding: 6px;"></div>

<footer class="bg-dark text-white pt-5 pb-2">
	<div class="container text-center text-md-left">
		<div class="row text-center text-md-left">
			
			<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3" href="#">
				<img src="<?php bloginfo('template_url'); ?>/images/logo_footer.png" alt="" height="150">
			</div>

			<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
				<h5 class="text-uppercase mb-2" style="color: #01913a;">Atendimento ao Público</h5>

				<p><a href="#" class="btn-floating btn-sm">Segunda a Sexta-Feira</a></p>
				<p><a href="#">8h15 - 11h45 | 13h30 - 17h00</a></p>
				<hr style="width: 50%; margin: auto;">
				<p><a href="#">Fone: (45) 3055 8800</a></p>
				<p><a href="#">Ouvidoria: 156 | (45) 3055 8929</a></p>
				<p><a href="#">toledo@toledo.pr.gov.br</a></p>
				<hr style="width: 50%; margin:auto;">
				<p><a href="#">Rua: Raimundo Leonardi, 1586</a></p>
				<p><a href="#">Centro - CEP: 85900-110</a></p>
			</div>

			<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
				<h5 class="text-uppercase mb-2" style="color: #01913a;">Saiba Mais</h5>

				<p><a href="#">Serviços</a></p>
				<p><a href="#">Notícias</a></p>
				<p><a href="#">Cidadão</a></p>
				<p><a href="#">Servidor</a></p>
				<p><a href="#">Empreendedor</a></p>
				<p><a href="#">Turista</a></p>
				<p><a href="#">Sobre Toledo</a></p>
				<p><a href="#">Locais de atendimento</a></p>
			</div>

			<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
				<h5 class="text-uppercase mb-2" style="color: #01913a;">Portal da Tranparência</h5>

				<p><a href="#">Lei 13.460</a></p>
				<p><a href="#">Portal</a></p>
				<p><a href="#">LGPD</a></p>
				<p><a href="#">Dados abertos</a></p>
				<p><a href="#">Lei de acesso à Informação</a></p>
			</div>

			<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
				<h5 class="text-uppercase mb-2" style="color: #01913a;">Editais</h5>

				<p><a href="#">Licitações</a></p>
				<p><a href="#">Chamamento Público</a></p>
				<p><a href="#">Comunicado de interesse público</a></p>
				<p><a href="#">Parceria Público-Privado (PPP)</a></p>
				<p><a href="#">Cadastro de Patrocinadores</a></p>
			</div>
		</div>
		<hr>
		<div class="row text-center text-md-left">
			<div class="col">
				<a href="#" style="font-size: 15px">© 2021 - Departamento de Tecnologia da Informação - Prefeitura de Toledo.</a>
			</div>
		</div>
	</div>
</footer>

<script src="<?php bloginfo('template_url'); ?>/js/jquery-3.4.1.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/popper.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.bundle.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/navbar hover.js"></script>
</body>

</html>
