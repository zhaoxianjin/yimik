<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

                    <main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
                        <?php if (is_home() && !is_paged()) :?>
                        <?php swiper_code()?>
                        <?php endif;?>
                        <?php yimik_post_list()?>
                    </main>

					<?php get_sidebar(); ?>

				</div>

			</div>


<?php get_footer(); ?>
