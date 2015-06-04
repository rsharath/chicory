<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * Override this template by copying it to yourtheme/woocommerce/content-single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
<section class="_startdoc">
<div data-magellan-expedition="fixed" class="post_tags row">

    <div class="small-12 small-centered columns">
    <a class="left" href="/catalog/"><span class="flaticon-previous11"></span>Back to Collection</a>
        <!--<a class="right" href="#">Share<span class="flaticon-uploading17"></span></a>-->
    </div>
</div>
<div class="row">
	<div class="small-12 columns" role="main">
        
<?php
	/**
	 * woocommerce_before_single_product hook
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
global $product;
?>
<div itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="row">
<div class="images small-12 medium-8 columns">
<?php

$attachment_ids = $product->get_gallery_attachment_ids();

foreach( $attachment_ids as $attachment_id ) 
{
$image_link = wp_get_attachment_url( $attachment_id );
$image_html = '<img src="'.$image_link.'">';
$p_images[] = $image_html;

//echo $image_html;
?>
    <?php } ?>
    
    <div class="tabs-content">
				<div class="content active" id="panel2-1" aria-hidden="false">
					<?php echo $p_images[0]; ?>
				</div>
				<div class="content" id="panel2-2" aria-hidden="true" tabindex="-1">
					<?php echo $p_images[1]; ?>
				</div>
			</div>
<dl class="tabs" data-tab="">
				<dd class="active"><a href="#panel2-1" aria-selected="true" tabindex="0"><?php echo $p_images[0]; ?></a></dd>
				<dd class=""><a href="#panel2-2" aria-selected="false" tabindex="-1"><?php echo $p_images[1]; ?></a></dd>
			</dl>
</div>

<div class="summary entry-summary small-12 medium-4 columns">

		<h1 itemprop="name" class="product_title entry-title"><?php echo $p_name = $product->get_title(); ?><span><?php echo $p_color = $product->get_attribute( 'color' ); ?></span></h1>
    
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">

	<div class="p_premeta"><p class="price"><span class="amount">$&nbsp;349.00</span></p><p class="right"><?php echo $product->get_sku(); ?></p></div>

	<meta itemprop="price" content="349">
	<meta itemprop="priceCurrency" content="USD">
	<link itemprop="availability" href="http://schema.org/InStock">

</div>




	
	
        

	 	
<form class="cart" method="post" enctype="multipart/form-data">
	 	<div class="row">
            <div class="small-12 columns">
                
                <div class="quantity"><input <?php /* type="number" */ ?> type="hidden" step="1" min="1" name="quantity" value="1" title="Qty" class="input-text qty text" size="4"></div>
                <input type="hidden" name="add-to-cart" value="<?php echo $id; ?>">
                    
            </div></div>
	 	<div class="row">
            <div class="small-12 columns">
                <button type="submit" class="single_add_to_cart_button button alt">Add to bag</button>
            </div>
        </div>
            </form>
    <div class="_wishlist">
        <?php echo do_shortcode('[yith_wcwl_add_to_wishlist]' ); ?>
        <!--<div class="row p_mini_actions">
            <div class="small-6 columns">
                <a href="#" class="add_to_wishlist button">Add to Wishlist</a>
            </div>
            <div class="small-6 columns">
                <a href="#" class="button">Share</a>
            </div>
            <div class="small-6 columns">
                <a href="#" class="button">Shipping</a>
            </div>
            <div class="small-6 columns">
                <a href="#" class="button">Returns</a>
            </div>
        </div>-->
        </div>

			
<ul class="accordion" data-accordion="">
  <li class="accordion-navigation active">
    <a href="#panel1a" aria-expanded="true">Details<span class="right flaticon-plus79"></span><span class="right flaticon-minus104"></span></a>
    <div id="panel1a" class="content active">
      <div class="description" itemprop="description">
	<?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?>

</div>
    </div>
  </li>
  <li class="accordion-navigation">
    <a href="#panel2a" aria-expanded="false">Shipping<span class="right flaticon-plus79"></span><span class="right flaticon-minus104"></span></a>
    <div id="panel2a" class="content">
      <div class="shipping">
	<?php echo $p_shipping = $product->get_attribute( 'shipping' ); ?>

</div>
  </div></li>
  <li class="accordion-navigation">
    <a href="#panel3a" aria-expanded="false">Tags / Categories<span class="right flaticon-plus79"></span><span class="right flaticon-minus104"></span></a>
    <div id="panel3a" class="content">
      <div class="product_meta row">
<?php echo $product->get_categories( '', '<span class="posted_in">' . _n( 'Category:', 'Categories:', sizeof( get_the_terms( $post->ID, 'product_cat' ) ), 'woocommerce' ) . ' ', '.</span>' ); ?>
	
	
		<?php
$tags = get_the_terms( $post->ID, 'product_tag' );

$html = '<span class="tagged_in">Tags:';
foreach ( $tags as $tag ) {
    $tag_link = get_tag_link( $tag->term_id );
    $html .= "<a href='/product-tag/{$tag->name}' title='{$tag->name} Tag' class='{$tag->slug}'>";
    $html .= "{$tag->name}</a> ";
}
$html .= '</span>';
echo $html;
?>
	


	</div>
    </div>
  </li>
</ul>
	



<div class="yith-wcwl-add-to-wishlist add-to-wishlist-112">

	
	    <div class="yith-wcwl-add-button show" style="display:block">



	        




<img src="http://104.131.13.233/wp-admin/images/wpspin_light.gif?47e5bd" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden">


	    </div>



	    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">

	        <span class="feedback">Product added!</span>

	        <a href="http://104.131.13.233/wishlist/view/">

	            Browse Wishlist
	        </a>

	    </div>



	    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">

	        <span class="feedback">The product is already in the wishlist!</span>

	        <a href="http://104.131.13.233/wishlist/view/">

	            Browse Wishlist
	        </a>

	    </div>



	    <div style="clear:both"></div>

	    <div class="yith-wcwl-wishlistaddresponse"></div>

	


</div>



<div class="clear"></div>
    
    
</div>
</div>
</div>
<img src="/wp-content/uploads/2015/05/social-sproduct-preview.jpg">

</div>
</div>
</section>

