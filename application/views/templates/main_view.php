<main role="main" id="main" class="container">
	<div class="row">

		<article class="col-sm-8">
			<?php if(isset($main_view)){$this->load->view($main_view);} ?>
		</article>


		<!-- SIDEBAR -->
		<aside class="col-sm-4">
			<?php if(isset($sidebar_view)){ $this->load->view($sidebar_view); } ?>
		</aside>	
	</div><!-- .row -->
</main>