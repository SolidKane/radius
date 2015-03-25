<?php 
  get_template_part('includes/header'); 
?>

<div class="container">
  <div class="row" style="margin-bottom: 40px;">
    <div class="col-sm-12 text-center pad-bott20">
      <h1>Портфолио</h1>
      <?php breadcrumb_trail() ?>
    </div>
    <?php echo do_shortcode( '[go_portfolio id="portfolio"]' ) ?>
  </div>

</div>
<script>
	
	jQuery(document).ready(function(){
		setTimeout(function() { 

			var path = location.pathname.substring(15).replace("/","");
		    jQuery('[data-filter="'+path+'"] > a').trigger("click");

    	}, 1000)
	});

</script>

<?php get_template_part('includes/footer'); ?>
