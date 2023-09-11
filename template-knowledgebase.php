<?php
/*
Template Name: Knowledge Base Page
*/
/**
 * Page Template for the Knowledge Base Page
 *
 * Publish a page and put this as a static front-page
 *
 * @package iPanelThemes Knowledgebase
 */

get_header();

$main_categories = get_categories( array(
  'taxonomy' => 'category',
  'parent' => 0,
  'hide_empty' => false,
) );
?>
<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main"> 
    <!-- All announcements -->
    <?php $cat_iterator = 0; foreach ( $main_categories as $cat ) : ?>
    <?php $term_meta = get_option( 'ipt_kb_category_meta_' . $cat->term_id, array() ); ?>
    <?php $term_link = esc_url( get_term_link( $cat ) ); ?>
    <?php $pcat_totals = ipt_kb_total_cat_post_count( $cat->term_id ); ?>
    <?php if ($cat->name == "Announcements") { ?>
    <div class="row kb-home-cat-row">
      <div class="col-md-12">
        <div class="col-sm-12">
          <div class="panel panel-info">
            <div class="panel-heading">
              <h2 class="panel-title"><i class="glyphicon glyphicon-exclamation-sign"></i> <?php echo $cat->name; ?></h2>
              <p><?php echo $cat->description; ?></p>
            </div>
            <div class="panel-body">
              <div class="ipt-kb-popover-target" id="kb-homepage-popover-<?php echo $cat->term_id; ?>"> <?php echo wpautop( $cat->description ); ?>
                <p class="text-right">
                  <?php if ( isset( $term_meta['support_forum'] ) && '' != $term_meta['support_forum'] ) : ?>
                  <a class="btn btn-default" href="<?php echo esc_url( $term_meta['support_forum'] ); ?>"> <i class="glyphicon ipt-icon-support"></i>
                  <?php _e( 'Get support', 'ipt_kb' ); ?>
                  </a>
                  <?php endif; ?>
                  <a href="<?php echo $term_link; ?>" class="btn btn-info"> <i class="glyphicon ipt-icon-link"></i>
                  <?php _e( 'Browse all', 'ipt_kb' ); ?>
                  </a> </p>
              </div>
              <div class="visible-xs">
                <?php if ( isset( $term_meta['image_url'] ) && '' != $term_meta['image_url'] ) : ?>
                <p class="text-center"> <a href="<?php echo $term_link; ?>"> <img class="img-circle" src="<?php echo esc_attr( $term_meta['image_url'] ); ?>" alt="<?php echo esc_attr( $cat->name ); ?>" /> </a> </p>
                <?php endif; ?>
                <div class="caption">
                  <?php if ( isset( $term_meta['support_forum'] ) && '' != $term_meta['support_forum'] ) : ?>
                  <p class="text-center"><a class="btn btn-default btn-block" href="<?php echo esc_url( $term_meta['support_forum'] ); ?>"> <i class="glyphicon ipt-icon-support"></i>
                    <?php _e( 'Get support', 'ipt_kb' ); ?>
                    </a></p>
                  <?php endif; ?>
                </div>
              </div>
              <?php
              $sub_categories = get_categories( array(
                'taxonomy' => 'category',
                'parent' => $cat->term_id,
                'number' => '4',
              ) );
              ?>
              <div class="list-group">
                <?php if ( ! empty( $sub_categories ) ) : ?>
                <?php foreach ( $sub_categories as $scat ) : ?>
                <?php $sterm_meta = get_option( 'ipt_kb_category_meta_' . $scat->term_id, array() ); ?>
                <a href="<?php echo esc_url( get_term_link( $scat, 'category' ) ); ?>" class="list-group-item">
                <?php if ( isset( $sterm_meta['icon_class'] ) && '' != $sterm_meta['icon_class'] ) : ?>
                <i class="glyphicon <?php echo esc_attr( $sterm_meta['icon_class'] ); ?>"></i>
                <?php else : ?>
                <i class="glyphicon ipt-icon-books"></i>
                <?php endif; ?>
                <?php echo $scat->name; ?> </a>
                <?php endforeach; ?>
                <?php else : ?>
                <?php
                $cat_posts = new WP_Query( array(
                  'posts_per_page' => get_option( 'posts_per_page', 5 ),
                  'cat' => $cat->term_id,
                ) );
                ?>
                <?php if ( $cat_posts->have_posts() ) : ?>
                <?php while ( $cat_posts->have_posts() ) : $cat_posts->the_post(); ?>
                <?php get_template_part( 'category-templates/content', 'popular' ); ?>
                <?php endwhile; ?>
                <?php else : ?>
                <?php get_template_part( 'category-templates/no-result' ); ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
    <?php } ?>
    <?php $cat_iterator++; if ( $cat_iterator % 2 == 0 ) echo '<div class="clearfix"></div>'; ?>
    <?php endforeach; ?>
    <hr />
    <!-- All non-announcement categories -->
    <div class="row kb-home-cat-row">
      <?php $cat_iterator = 0; foreach ( $main_categories as $cat ) : ?>
      <?php $term_meta = get_option( 'ipt_kb_category_meta_' . $cat->term_id, array() ); ?>
      <?php $term_link = esc_url( get_term_link( $cat ) ); ?>
      <?php $pcat_totals = ipt_kb_total_cat_post_count( $cat->term_id ); ?>
      <?php if (($cat->name != "Announcements") && ($cat->name != "Resolved")) { ?>
      <div class="col-md-6">
        <div class="col-sm-12">
          <div class="panel 
				  <?php switch ($cat->name) {
					  case "Status Normal":
						echo "panel-success";
						break;
					  case "System Issues/Outage":
						echo "panel-danger";
						break;
					  case "Classroom Outages":
						echo "panel-warning";
						break;
					  case "System Maintenance":
						echo "panel-default";
						break;
					  default:
						echo "panel-default";
					} ?>">
            <div class="panel-heading">
              <h2 class="panel-title">
                <?php
                switch ( $cat->name ) {
                  case "Status Normal":
                    echo "<i class='glyphicon glyphicon-check'></i> ";
                    break;
                  case "System Issues/Outage":
                    echo "<i class='glyphicon glyphicon-remove-circle'></i> ";
                    break;
                  case "Classroom Outages":
                    echo "<i class='glyphicon glyphicon-exclamation-sign'></i> ";
                    break;
                  case "System Maintenance":
                    echo "<i class='glyphicon glyphicon-cog'></i> ";
                    break;
                  default:
                    echo "<i class='glyphicon glyphicon-check'></i> ";
                }
                echo $cat->name;
                ?>
              </h2>
              <p><?php echo $cat->description; ?></p>
            </div>
            <div class="panel-body">
              <div class="ipt-kb-popover-target" id="kb-homepage-popover-<?php echo $cat->term_id; ?>"> <?php echo wpautop( $cat->description ); ?>
                <p class="text-right">
                  <?php if ( isset( $term_meta['support_forum'] ) && '' != $term_meta['support_forum'] ) : ?>
                  <a class="btn btn-default" href="<?php echo esc_url( $term_meta['support_forum'] ); ?>"> <i class="glyphicon ipt-icon-support"></i>
                  <?php _e( 'Get support', 'ipt_kb' ); ?>
                  </a>
                  <?php endif; ?>
                  <a href="<?php echo $term_link; ?>" class="btn btn-info"> <i class="glyphicon ipt-icon-link"></i>
                  <?php _e( 'Browse all', 'ipt_kb' ); ?>
                  </a> </p>
              </div>
              <div class="visible-xs">
                <?php if ( isset( $term_meta['image_url'] ) && '' != $term_meta['image_url'] ) : ?>
                <p class="text-center"> <a href="<?php echo $term_link; ?>"> <img class="img-circle" src="<?php echo esc_attr( $term_meta['image_url'] ); ?>" alt="<?php echo esc_attr( $cat->name ); ?>" /> </a> </p>
                <?php endif; ?>
                <div class="caption">
                  <?php if ( isset( $term_meta['support_forum'] ) && '' != $term_meta['support_forum'] ) : ?>
                  <p class="text-center"><a class="btn btn-default btn-block" href="<?php echo esc_url( $term_meta['support_forum'] ); ?>"> <i class="glyphicon ipt-icon-support"></i>
                    <?php _e( 'Get support', 'ipt_kb' ); ?>
                    </a></p>
                  <?php endif; ?>
                </div>
              </div>
              <?php
              $sub_categories = get_categories( array(
                'taxonomy' => 'category',
                'parent' => $cat->term_id,
                'hide_empty' => 1,
                'number' => '4',
              ) );
              ?>
              <div class="list-group">
                <?php if ( ! empty( $sub_categories ) ) : ?>
                <?php foreach ( $sub_categories as $scat ) : ?>
                <?php $sterm_meta = get_option( 'ipt_kb_category_meta_' . $scat->term_id, array() ); ?>
                <a href="<?php echo esc_url( get_term_link( $scat, 'category' ) ); ?>" class="list-group-item">
                <?php if ( isset( $sterm_meta['icon_class'] ) && '' != $sterm_meta['icon_class'] ) : ?>
                <i class="glyphicon <?php echo esc_attr( $sterm_meta['icon_class'] ); ?>"></i>
                <?php else : ?>
                <i class="glyphicon ipt-icon-books"></i>
                <?php endif; ?>
                <?php echo $scat->name; ?> </a>
                <?php endforeach; ?>
                <?php else : ?>
                <?php
                $cat_posts = new WP_Query( array(
                  'posts_per_page' => get_option( 'posts_per_page', 5 ),
                  'cat' => $cat->term_id,
				  'orderby'=>'title',
				  'order'=>'ASC'
                ) );
                ?>
                <?php if ( $cat_posts->have_posts() ) : ?>
                <?php while ( $cat_posts->have_posts() ) : $cat_posts->the_post(); ?>
                <?php get_template_part( 'category-templates/content', 'popular' ); ?>
                <?php endwhile; ?>
                <?php else : ?>
                <?php get_template_part( 'category-templates/no-result' ); ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php $cat_iterator++; if ( $cat_iterator % 2 == 0) echo '<div class="clearfix"></div>'; ?>
      <?php } ?>
      <?php endforeach; ?>
      <div class="clearfix"></div>
    </div>
    <!-- All resolved -->
    <?php $cat_iterator = 0; foreach ( $main_categories as $cat ) : ?>
    <?php $term_meta = get_option( 'ipt_kb_category_meta_' . $cat->term_id, array() ); ?>
    <?php $term_link = esc_url( get_term_link( $cat ) ); ?>
    <?php $pcat_totals = ipt_kb_total_cat_post_count( $cat->term_id ); ?>
    <?php if ($cat->name == "Resolved") { ?>
    <div class="row kb-home-cat-row">
      <div class="col-md-12">
        <div class="col-sm-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h2 class="panel-title"><i class="glyphicon glyphicon-check"></i> <?php echo $cat->name; ?></h2>
              <p><?php echo $cat->description; ?></p>
            </div>
            <div class="panel-body">
              <div class="ipt-kb-popover-target" id="kb-homepage-popover-<?php echo $cat->term_id; ?>"> <?php echo wpautop( $cat->description ); ?>
                <p class="text-right">
                  <?php if ( isset( $term_meta['support_forum'] ) && '' != $term_meta['support_forum'] ) : ?>
                  <a class="btn btn-default" href="<?php echo esc_url( $term_meta['support_forum'] ); ?>"> <i class="glyphicon ipt-icon-support"></i>
                  <?php _e( 'Get support', 'ipt_kb' ); ?>
                  </a>
                  <?php endif; ?>
                  <a href="<?php echo $term_link; ?>" class="btn btn-info"> <i class="glyphicon ipt-icon-link"></i>
                  <?php _e( 'Browse all', 'ipt_kb' ); ?>
                  </a> </p>
              </div>
              <div class="visible-xs">
                <?php if ( isset( $term_meta['image_url'] ) && '' != $term_meta['image_url'] ) : ?>
                <p class="text-center"> <a href="<?php echo $term_link; ?>"> <img class="img-circle" src="<?php echo esc_attr( $term_meta['image_url'] ); ?>" alt="<?php echo esc_attr( $cat->name ); ?>" /> </a> </p>
                <?php endif; ?>
                <div class="caption">
                  <?php if ( isset( $term_meta['support_forum'] ) && '' != $term_meta['support_forum'] ) : ?>
                  <p class="text-center"><a class="btn btn-default btn-block" href="<?php echo esc_url( $term_meta['support_forum'] ); ?>"> <i class="glyphicon ipt-icon-support"></i>
                    <?php _e( 'Get support', 'ipt_kb' ); ?>
                    </a></p>
                  <?php endif; ?>
                </div>
              </div>
              <?php
              $sub_categories = get_categories( array(
                'taxonomy' => 'category',
                'parent' => $cat->term_id,
                'number' => '4',
              ) );
              ?>
              <div class="list-group">
                <?php if ( ! empty( $sub_categories ) ) : ?>
                <?php foreach ( $sub_categories as $scat ) : ?>
                <?php $sterm_meta = get_option( 'ipt_kb_category_meta_' . $scat->term_id, array() ); ?>
                <a href="<?php echo esc_url( get_term_link( $scat, 'category' ) ); ?>" class="list-group-item">
                <?php if ( isset( $sterm_meta['icon_class'] ) && '' != $sterm_meta['icon_class'] ) : ?>
                <i class="glyphicon <?php echo esc_attr( $sterm_meta['icon_class'] ); ?>"></i>
                <?php else : ?>
                <i class="glyphicon ipt-icon-books"></i>
                <?php endif; ?>
                <?php echo $scat->name; ?> </a>
                <?php endforeach; ?>
                <?php else : ?>
                <?php
                $cat_posts = new WP_Query( array(
                  'posts_per_page' => get_option( 'posts_per_page', 5 ),
                  'cat' => $cat->term_id,
                ) );
                ?>
                <?php if ( $cat_posts->have_posts() ) : ?>
                <?php while ( $cat_posts->have_posts() ) : $cat_posts->the_post(); ?>
                <?php get_template_part( 'category-templates/content', 'popular' ); ?>
                <?php endwhile; ?>
                <?php else : ?>
                <?php get_template_part( 'category-templates/no-result' ); ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
    <?php } ?>
    <?php $cat_iterator++; if ( $cat_iterator % 2 == 0 ) echo '<div class="clearfix"></div>'; ?>
    <?php endforeach; ?>
    <?php wp_reset_query(); ?>
    <?php
    // Add the filter from the Posts Order By Plugin
    if ( function_exists( 'CPTOrderPosts' ) ) {
      add_filter( 'posts_orderby', 'CPTOrderPosts', 99, 2 );
    }
    ?>
    <?php // Finally add the actual page content ?>
    <?php if ( have_posts() ) : ?>
    <?php

    while ( have_posts() ): the_post();
    ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="entry-content">
        <?php the_content(); ?> 
        <?php
        wp_link_pages( array(
          'before' => __( '<p class="pagination-p">Pages:</p>', 'ipt_kb' ) . '<ul class="pagination">',
          'after' => '</ul><div class="clearfix"></div>',
        ) );
        ?>
      </div>
      <!-- .entry-content --> 
    </article>
    <?php endwhile; ?>
    <?php endif; ?>
  </main>
  <!-- #main --> 
</div>
<!-- #primary -->
<?php get_footer(); ?>
