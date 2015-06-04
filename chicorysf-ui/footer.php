</section>
<?php /* <footer class="row">
	<?php do_action( 'foundationpress_before_footer' ); ?>
	<?php dynamic_sidebar( 'footer-widgets' ); ?>
	<?php do_action( 'foundationpress_after_footer' ); ?>
</footer> */ ?>
<footer class="_foot">
    <div class="_foot_brand"><img src="/wp-content/uploads/2015/04/chicorywhitelogofinal-tan-icon.png" alt="<?php bloginfo( 'name' ); ?>"></div>
	<div class="row">
      <div class="small-12 large-6 columns">
        <ul class="inline-list">
          <li><a href="#"><span class="flaticon-twitter47"></span></a></li>
          <li><a href="#"><span class="flaticon-instagram"></span></a></li>
          <li><a href="#"><span class="flaticon-pinterest10"></span></a></li>
          <li><a href="#"><span class="flaticon-youtube26"></span></a></li>
          <li><a href="#"><span class="flaticon-google23"></span></a></li>
        </ul>
          <p>Social Media Content <a href="#">Terms of Use</a></p>
        </div>
      <div class="small-12 large-6 columns">
        <div class="row">
            <div class="small-12 large-4 columns">
                <ul class="side-nav">
                  <li class="_secheader"><a href="#">Collections</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Silk Scarves</a></li>
                  <li><a href="#">Cashmere Knit Scarves</a></li>
                  <li><a href="#">Cashmere Woven Scarves</a></li>
                </ul>
            </div>
            <div class="small-12 large-4 columns">
                <ul class="side-nav">
                  <li class="_secheader"><a href="#">About Chicory</a></li>
                  <li class="divider"></li>
                  <li><a href="#">#chicorysf</a></li>
                  <li><a href="#">Customer Care</a></li>
                  <li><a href="#">In The Media</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="small-12 large-4 columns">
                <ul class="side-nav">
                  <li class="_secheader"><a href="#">Privacy &amp; Terms</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Shipping &amp; Returns</a></li>
                  <li><a href="#">Ad Cookies</a></li>
                  <li><a href="#">Sale Terms</a></li>
                  <li><a href="#">Sitemap</a></li>
                </ul>
            </div>
        </div>
      </div>
    </div>
</footer>
<a class="exit-off-canvas"></a>

	<?php do_action( 'foundationpress_layout_end' ); ?>
	</div>
</div>
<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>

<?php 
if ( is_woocommerce() ) { ?>
<script type="text/javascript">
$(window).load(function(){

  $('#masonry-container').masonry({

    itemSelector: '#masonry-container li'

  });

});
</script>
<?php
}
?>

</body>
</html>
