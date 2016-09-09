<?php
/**
 * Content Loop for archives - List Style.
 */

global $pls_hide_post_meta, $pls_use_word_length, $pls_word_length;
if (!have_posts()): ?>
    <article id="post-0" class="post no-results not-found">
        <header class="entry-header">
            <h1 class="entry-title"><?php _e('Nothing Found', 'newsplus');?></h1>
        </header>
        <div class="entry-content">
            <p><?php _e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'newsplus');?></p>
            <?php get_search_form();?>
        </div><!-- .entry-content -->
    </article><!-- #post-0 -->
<?php endif;
while (have_posts()):
	the_post();
	get_template_part('formats/list-format', get_post_format());?>

		    <h4><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a></h4>

		    <?php if ('true' != $pls_hide_post_meta) {?>
		        <aside id="meta-<?php the_ID();?>" class="entry-meta list"><?php the_time(get_option('date_format'));?></aside>

		    <?php } // Hide post meta ?>

		    </div><!-- .entry-list-right -->
		</article><!-- #post-<?php the_ID();?> -->

		<?php endwhile; // End the loop

newsplus_content_nav('nav-below');?>