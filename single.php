<?php get_header();?>


    <div class="col-lg-offset-0 col-lg-9 col-md-offset-1 col-md-10">
        <ul class="category-submenu">
            <li>
                <a href="<?php echo get_site_url(); ?>/events"><?php echo get_cat_name(110); ?></a>
            </li>
            <?php $pages = get_pages(array('child_of' => 41));
            foreach ($pages as $page) {
                echo ' 
                <li>
                    <a href="' . get_page_link($page->ID) . '">' . $page->post_title . '</a>
                </li>';
            } ?>
        </ul>

<?php the_post(); ?>
        <div class="event-short">
            <div class="event-date">
                <?php the_date('d F Y'); ?>
            </div>
            <div class="event-name-arrow">
                <h1><?php the_title(); ?></h1>

            </div>
            <?php the_content(); ?>
            <span class="share-please"><?php echo get_cat_name(111); ?></span>
        </div>
        <div class="event-full">

            <div class="text">
                <?php the_excerpt(); ?>
            </div>
        </div>
    </div>
		
<?php get_footer();?>