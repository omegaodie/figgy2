<?php get_header(); ?>

			<div id="content">
				<header class="article-header">
					<div id="inner-content" class="wrap cf">
							<h1 class="archive-title"><span><?php _e( 'Search Results for:', 'simplyread' ); ?></span> <?php echo esc_attr(get_search_query()); ?></h1>
						</div>
				</header>

				<div id="inner-content" class="wrap cf">

						<div id="main" class="m-all t-2of3 d-5of7 cf" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf archive' ); ?> role="article">
								
								<?php
								if ( has_post_thumbnail()):
									?> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> <?php
									$thumb_id = get_post_thumbnail_id();
									$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'simplyread-thumb-image-300by300', true);
									$thumb_url = $thumb_url_array[0]; ?> <img src="<?php echo $thumb_url; ?>" alt="Featured Image" >
									</a>
								<?php else: ?>
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo IMAGES; ?>/blank.jpg" alt="No Featured Image"></a>

								<?php endif; ?>
								<section class="entry-content cf">

									<h3 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
									<p class="byline vcard"><?php
										printf(__( 'Posted', 'simplyread' ) . ' <time class="updated" datetime="%1$s" pubdate>%2$s</time> ' . __('by', 'simplyread' ) . ' <span class="author">%3$s</span>', get_the_time('Y-m-j'), get_the_time(__( 'F jS, Y', 'simplyread' )), get_the_author_link( get_the_author_meta( 'ID' ) ));
									?></p>

									<?php the_excerpt(); ?>

								</section>

							</article>

							<?php endwhile; ?>

									<?php simplyread_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'simplyread' ); ?></h1>
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'simplyread' ); ?></p>
										</header>
									</article>

							<?php endif; ?>

						</div>

					<?php get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>