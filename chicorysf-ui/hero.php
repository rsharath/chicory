<?php
/*
Template Name: Hero
*/
get_header(); ?>

<header id="homepage-hero" role="banner" style="background:url('<?php the_field('hero_background_image'); ?>') center center #fcf7f3;background-repeat:no-repeat;background-size:cover;">
    <div id="hero_greet" class="row">
		<div class="small-12 columns">
            <a class="button" href="<?php the_field('hero_link'); ?>"><h1>
                <div class="_hero_subheader"><?php the_field('hero_subheader'); ?></div>
            <div class="_hero_header"><?php the_field('hero_header'); ?></div>
                
  <div class="_hero_btn"><?php the_field('hero_link_text'); ?></div>
            
            </h1></a>
        </div>
    </div>
    
</header>
<section id="_why">
<div id="hero_actions" class="row">
        
<?php 

$image1 = get_field('hero_action_image_1');
$image2 = get_field('hero_action_image_2');
$image3 = get_field('hero_action_image_3');
$size = 'large'; // (thumbnail, medium, large, full or custom size)







?>
      <div class="small-12 medium-8 columns _promo">
          
                  <a class="button _al" href="<?php the_field('hero_action_link_1'); ?>">
                      
                  <?php echo wp_get_attachment_image( $image1, $size ); ?>
                          
                    <div class="_actions">
                      <strong>
                          <span class="hero_category"><?php the_field('hero_action_category_1'); ?></span>
                          <span class="hero_tagline"><?php the_field('hero_action_tagline_1'); ?></span>
                          <span class="hero_litext">Shop <?php the_field('hero_action_category_1'); ?></span>
                      </strong>
                    </div>
                  </a>
              
      </div>
      <div class="small-12 medium-4 columns _promo">
                  <a class="button _al" href="<?php the_field('hero_action_link_2'); ?>">
                      <?php echo wp_get_attachment_image( $image2, $size ); ?>
                  <div class="_actions">
                  <strong>
                      <span class="hero_category"><?php the_field('hero_action_category_2'); ?></span>
                      <span class="hero_tagline"><?php the_field('hero_action_tagline_2'); ?></span>
                      <span class="hero_litext">Shop <?php the_field('hero_action_category_2'); ?></span>
                  </strong>
                  
                          </div>
                  </a>
      </div>
      <div class="small-12 medium-8 columns _promo">
                  <a class="button _al" href="<?php the_field('hero_action_link_3'); ?>">
                      
                  <?php echo wp_get_attachment_image( $image3, $size ); ?>
                          
                  <div class="_actions">
                  <strong>
                      <span class="hero_category"><?php the_field('hero_action_category_3'); ?></span>
                      <span class="hero_tagline"><?php the_field('hero_action_tagline_3'); ?></span>
                      <span class="hero_litext">Shop <?php the_field('hero_action_category_3'); ?></span>
                  </strong>
                          </div>
                  </a>
      </div>
    </div>
</section>
<section id="_who">
<div class="_angle_bg">
        </div>
    <div class="_social_mini"><h3>#chicorysf</h3><a href="#"><span class="flaticon-instagram"></span></a><a href="#"><span class="flaticon-twitter47"></span></a><span class="_how_you_wear">Get Noticed! Show off how you wear Chicory.</span></div>
   <img src="/wp-content/uploads/2015/05/social-gallery-sample.jpg">
</section>
	<!--<div class="row">
		<div class="small-12 large-8 columns" role="main">

		<?php do_action( 'foundationpress_before_content' ); ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<header>
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header>
				<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
				<footer>
					<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'FoundationPress' ), 'after' => '</p></nav>' ) ); ?>
					<p><?php the_tags(); ?></p>
				</footer>
				<?php do_action( 'foundationpress_page_before_comments' ); ?>
				<?php comments_template(); ?>
				<?php do_action( 'foundationpress_page_after_comments' ); ?>
			</article>
		<?php endwhile;?>

		<?php do_action( 'foundationpress_after_content' ); ?>

		</div>

</div>-->


<?php get_footer(); ?>