
<nav class="tab-bar">
		<section class="left-small">
			<a class="left-off-canvas-toggle" href="#"><span class="flaticon-list26"></span></a>
		</section>
		<section class="middle tab-bar-section">
            
            <img class="hide-for-medium-up" src="/wp-content/uploads/2015/04/chicorywhitelogofinal-tan-icon.png" alt="<?php bloginfo( 'name' ); ?>"><img class="show-for-medium-up" src="/wp-content/uploads/2015/05/chicorywhitelogofinal-tan-2.png" alt="<?php bloginfo( 'name' ); ?>">
		</section>
	</nav>
        <section id="_subtabs">
        <ul class="top-bar-menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22 left"><a href="/wishlist/view/"><span class="flaticon-passion"></span>Wish list</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23 right"><a  data-reveal-id="cartList" href="#">Shopping Bag<span class="flaticon-shopping58"></span></a></li>
</ul>
        </section>





<div id="cartList" class="reveal-modal" data-reveal>
  <?php
$my_id = 7;
$post_id_5369 = get_post($my_id);
$content = $post_id_5369->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]>', $content);
echo $content;
?>
  <a class="close-reveal-modal" aria-label="Close"><span class="flaticon-close47"></span></a>
</div>