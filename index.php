<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *Template Name: Главная страцина
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package katanaalmatu
 */
?>

<?php get_header(); ?>


<main class="container-fluid">
    <section class="about" id="about">
        <img src="<?php echo get_template_directory_uri() ?>/img/top-bg.png" class="top-bg" alt="">
        <div class="title1">
            <h2><span>О нас</span></h2>
        </div>
        <?php
        $args = array('category' => 2, 'nopaging' => 1);
        $lastposts = get_posts($args);

        foreach ($lastposts as $post) {
            setup_postdata($post); // устанавливаем данные
            ?>
            <div class="block-1 clearfix">
                <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt="">
                <h3><?php the_title(); ?></h3>
                <?php the_content(""); ?>
            </div>
            <?php
        }
        wp_reset_postdata(); // сброс
        ?>


    </section>
    <section class="garden">
        <img src="<?php echo get_template_directory_uri() ?>/img/top-bg.png" class="top-bg" alt="">
        <h4>Наш любимый детский сад</h4>
        <div class="slider-rel">
            <img src="<?php echo get_template_directory_uri() ?>/img/queen.png" class="absolute2" alt="">
            <img src="<?php echo get_template_directory_uri() ?>/img/tumbnail.png" class="absolute" alt="">
            <div class="slider">
                <div><img src="<?php echo get_template_directory_uri() ?>/photo/nash_detsky_sad/1.png" alt=""></div>
                <div><img src="<?php echo get_template_directory_uri() ?>/photo/nash_detsky_sad/2.png" alt=""></div>
				<div><img src="<?php echo get_template_directory_uri() ?>/photo/nash_detsky_sad/3.png" alt=""></div>
				<div><img src="<?php echo get_template_directory_uri() ?>/photo/nash_detsky_sad/4.png" alt=""></div>
				<div><img src="<?php echo get_template_directory_uri() ?>/photo/nash_detsky_sad/5.png" alt=""></div>
				<div><img src="<?php echo get_template_directory_uri() ?>/photo/nash_detsky_sad/6.png" alt=""></div>
				<div><img src="<?php echo get_template_directory_uri() ?>/photo/nash_detsky_sad/7.png" alt=""></div>
				<div><img src="<?php echo get_template_directory_uri() ?>/photo/nash_detsky_sad/8.png" alt=""></div>
				<div><img src="<?php echo get_template_directory_uri() ?>/photo/nash_detsky_sad/9.png" alt=""></div>
				<div><img src="<?php echo get_template_directory_uri() ?>/photo/nash_detsky_sad/10.png" alt=""></div>
				<div><img src="<?php echo get_template_directory_uri() ?>/photo/nash_detsky_sad/11.png" alt=""></div>
				<div><img src="<?php echo get_template_directory_uri() ?>/photo/nash_detsky_sad/12.png" alt=""></div>
				<div><img src="<?php echo get_template_directory_uri() ?>/photo/nash_detsky_sad/13.png" alt=""></div>
				<div><img src="<?php echo get_template_directory_uri() ?>/photo/nash_detsky_sad/14.png" alt=""></div>
				<div><img src="<?php echo get_template_directory_uri() ?>/photo/nash_detsky_sad/15.png" alt=""></div>
				<div><img src="<?php echo get_template_directory_uri() ?>/photo/nash_detsky_sad/16.png" alt=""></div>
				<div><img src="<?php echo get_template_directory_uri() ?>/photo/nash_detsky_sad/17.png" alt=""></div>
				<div><img src="<?php echo get_template_directory_uri() ?>/photo/nash_detsky_sad/18.png" alt=""></div>
				<div><img src="<?php echo get_template_directory_uri() ?>/photo/nash_detsky_sad/19.png" alt=""></div>
				<div><img src="<?php echo get_template_directory_uri() ?>/photo/nash_detsky_sad/20.png" alt=""></div>
				<div><img src="<?php echo get_template_directory_uri() ?>/photo/nash_detsky_sad/21.png" alt=""></div>
				<div><img src="<?php echo get_template_directory_uri() ?>/photo/nash_detsky_sad/22.png" alt=""></div>
				<div><img src="<?php echo get_template_directory_uri() ?>/photo/nash_detsky_sad/23.png" alt=""></div>
				<div><img src="<?php echo get_template_directory_uri() ?>/photo/nash_detsky_sad/24.png" alt=""></div>
				<div><img src="<?php echo get_template_directory_uri() ?>/photo/nash_detsky_sad/25.png" alt=""></div>
            </div>
        </div>
        <div class="icons">
            <div class="social">
                <img src="<?php echo get_template_directory_uri() ?>/img/bubble.png" alt="">
                <br>
                <a href="<?php $option = get_option('sample_theme_options'); echo $option['vk'];?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/vk.png" alt=""></a>
            </div>
            <div class="social">
                <img src="<?php echo get_template_directory_uri() ?>/img/bubble.png" alt="">
                <br>
                <a href="<?php $option = get_option('sample_theme_options'); echo $option['fb'];?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/fc.png" alt=""></a>
            </div>
            <div class="social">
                <img src="<?php echo get_template_directory_uri() ?>/img/bubble.png" alt="">
                <img src="<?php echo get_template_directory_uri() ?>/img/bubble.png" alt="">
                <br>
                <div class="text">
                    <span>Подписывайся на <br> нас в социальных сетях.</span>
                </div>
            </div>
            <div class="social">
                <img src="<?php echo get_template_directory_uri() ?>/img/bubble.png" alt="">
                <br>
                <a href="<?php $option = get_option('sample_theme_options'); echo $option['insta'];?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/insta.png" alt=""></a>
            </div>
            <div class="social">
                <img src="<?php echo get_template_directory_uri() ?>/img/bubble.png" alt="">
                <br>
                <a href="<?php $option = get_option('sample_theme_options'); echo $option['vk_g'];?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/vk.png" alt=""></a>
            </div>
        </div>
        <div class="line2">
            <img src="<?php echo get_template_directory_uri() ?>/img/bant.png" alt="">
        </div>

            <div class="limon" id="school">
                <h4><?php echo get_cat_name(4);?></h4>
                <p><?php echo category_description(4); ?></p>
            </div>


        <div class="school">
            <?php
            $args = array(
                'parent' => 4,
                'hide_empty' => 11,
                'number' => '0',
                'pad_counts' => true
            );
            $categories = get_categories($args); // получаем все категории в виде массива
            $term_taxonomy_string = '';
            foreach ($categories as $category) : {
                $term_taxonomy_id = $category->term_taxonomy_id;
                $term_taxonomy_name = $category->name; ?>
                <div class="text1">
                    <span><?php echo $term_taxonomy_name ?></span>
                    <img src="<?php echo get_template_directory_uri() ?>/img/queen.png" alt="">
                </div>
            <?php } endforeach ?>


        </div>
        <div class="school-1 clearfix">
            <div class="col-md-6">
                <div class="rel">
                    <img src="<?php echo get_template_directory_uri() ?>/img/pink-t.png" class="pink-t" alt="">
                    <div class="slider-2">
                        <div><img src="<?php echo get_template_directory_uri() ?>/photo/zhyvopys/1.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/zhyvopys/2.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/zhyvopys/3.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/zhyvopys/4.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/zhyvopys/5.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/zhyvopys/6.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/zhyvopys/7.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/zhyvopys/8.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/zhyvopys/9.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/zhyvopys/10.png" alt=""></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <?php
                $args = array('category' => 6, 'nopaging' => 1);
                $lastposts = get_posts($args);

                foreach ($lastposts as $post) {
                    setup_postdata($post); // устанавливаем данные
                    ?>
                    <div class="titl"><?php the_title(); ?></div>
                    <?php the_content(); ?>
                    <?php
                }
                wp_reset_postdata(); // сброс
                ?>

            </div>
        </div>
        <div class="school-2 clearfix">
            <div class="col-md-6">
                <?php
                $args = array('category' => 7, 'nopaging' => 1);
                $lastposts = get_posts($args);

                foreach ($lastposts as $post) {
                    setup_postdata($post); // устанавливаем данные
                    ?>
                    <div class="titl"><?php the_title(); ?></div>
                    <?php the_content(); ?>
                    <?php
                }
                wp_reset_postdata(); // сброс
                ?>
            </div>
            <div class="col-md-6">
                <div class="rel">
                    <img src="<?php echo get_template_directory_uri() ?>/img/green-t.png" class="green-t" alt="">
                    <div class="slider-3">
                        <div><img src="<?php echo get_template_directory_uri() ?>/photo/vokal/1.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/vokal/2.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/vokal/3.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/vokal/4.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/vokal/5.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="school-1 clearfix">
            <div class="col-md-6">
                <div class="rel">
                    <img src="<?php echo get_template_directory_uri() ?>/img/pink-t.png" class="pink-t" alt="">
                    <div class="slider-2">
                        <div><img src="<?php echo get_template_directory_uri() ?>/photo/gymnastky/1.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/gymnastky/2.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/gymnastky/3.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/gymnastky/4.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/gymnastky/5.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/gymnastky/6.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/gymnastky/7.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/gymnastky/8.png" alt=""></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <?php
                $args = array('category' => 8, 'nopaging' => 1);
                $lastposts = get_posts($args);

                foreach ($lastposts as $post) {
                    setup_postdata($post); // устанавливаем данные
                    ?>
                    <div class="titl"><?php the_title(); ?></div>
                    <?php the_content(); ?>
                    <?php
                }
                wp_reset_postdata(); // сброс
                ?>
            </div>
        </div>
        <div class="school-2 clearfix">
            <div class="col-md-6">
                <?php
                $args = array('category' => 9, 'nopaging' => 1);
                $lastposts = get_posts($args);

                foreach ($lastposts as $post) {
                    setup_postdata($post); // устанавливаем данные
                    ?>
                    <div class="titl"><?php the_title(); ?></div>
                    <?php the_content(); ?>
                    <?php
                }
                wp_reset_postdata(); // сброс
                ?>
            </div>
            <div class="col-md-6">
                <div class="rel">
                    <img src="<?php echo get_template_directory_uri() ?>/img/green-t.png" class="green-t" alt="">
                    <div class="slider-3">
                        <div><img src="<?php echo get_template_directory_uri() ?>/photo/balet_i_horeograf/1.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/balet_i_horeograf/2.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/balet_i_horeograf/3.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/balet_i_horeograf/4.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/balet_i_horeograf/5.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/balet_i_horeograf/6.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/balet_i_horeograf/7.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/balet_i_horeograf/8.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/balet_i_horeograf/9.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/balet_i_horeograf/10.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/balet_i_horeograf/11.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/balet_i_horeograf/12.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/balet_i_horeograf/13.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/balet_i_horeograf/14.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/balet_i_horeograf/15.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="school-1 clearfix">
            <div class="col-md-6">
                <div class="rel">
                    <img src="<?php echo get_template_directory_uri() ?>/img/pink-t.png" class="pink-t" alt="">
                    <div class="slider-2">
                        <div><img src="<?php echo get_template_directory_uri() ?>/photo/estet_razvitie/1.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/estet_razvitie/2.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/estet_razvitie/3.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/estet_razvitie/4.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/estet_razvitie/5.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/estet_razvitie/6.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/estet_razvitie/7.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/estet_razvitie/8.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/estet_razvitie/9.png" alt=""></div>
						<!-- <div><img src="<?php echo get_template_directory_uri() ?>/photo/estet_razvitie/10.png" alt=""></div> -->
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/estet_razvitie/11.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/estet_razvitie/12.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/estet_razvitie/13.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/estet_razvitie/14.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/estet_razvitie/15.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/estet_razvitie/16.png" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri() ?>/photo/estet_razvitie/17.png" alt=""></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <?php
                $args = array('category' => 10, 'nopaging' => 1);
                $lastposts = get_posts($args);

                foreach ($lastposts as $post) {
                    setup_postdata($post); // устанавливаем данные
                    ?>
                    <div class="titl"><?php the_title(); ?></div>
                    <?php the_content(); ?>
                    <?php
                }
                wp_reset_postdata(); // сброс
                ?>
            </div>
        </div>
        <div class="school-1 clearfix">
            <?php
            $args = array('category' => 11, 'nopaging' => 1);
            $lastposts = get_posts($args);

            foreach ($lastposts as $post) {
                setup_postdata($post); // устанавливаем данные
                ?>
                <div class="col-md-6">
                    <div class="titl"><?php the_title(); ?></div>
                    <?php the_content(); ?>
                </div>
                <?php
            }
            wp_reset_postdata(); // сброс
            ?>


        </div>
        <div class="text-2"><?php echo category_description(12); ?></div>
        <div class="school-1 garden clearfix">
            <img src="<?php echo get_template_directory_uri() ?>/img/top-bg.png" class="top-bg" alt="">
            <div class="text-2" id="teach"><?php echo get_cat_name(12);?></div>
            <div class="school">
                <?php
                $args = array(
                    'parent' => 12,
                    'hide_empty' => 0,
                    'number' => '0',
                    'orderby' => 'ID',
                    'order' => 'ASC',
                    'pad_counts' => true

                );
                $categories = get_categories($args); // получаем все категории в виде массива
                $term_taxonomy_string = '';
                foreach ($categories as $category) : {
                    $term_taxonomy_id = $category->term_taxonomy_id;
                    $term_taxonomy_name = $category->name; ?>
                    <div class="text1">
                        <span><?php echo $term_taxonomy_name ?></span>
                        <img src="<?php echo get_template_directory_uri() ?>/img/queen.png" alt="">
                    </div>
                <?php } endforeach ?>


            </div>
        </div>
        <div class="line3">
            <img src="<?php echo get_template_directory_uri() ?>/img/bant.png" alt="">
        </div>
        <div class="school-1 top clearfix">
            <?php
            $args = array('category' => 13, 'nopaging' => 1);
            $lastposts = get_posts($args);

            foreach ($lastposts as $post) {
                setup_postdata($post); // устанавливаем данные
                ?>
                <div class="col-md-6">
                    <p><?php the_title(); ?></p>
                    <?php the_content(); ?>
                </div>
                <div class="col-md-6">
                    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt="">
                </div>
                <?php
            }
            wp_reset_postdata(); // сброс
            ?>


        </div>
        <div class="line3">
            <img src="<?php echo get_template_directory_uri() ?>/img/bant.png" alt="">
        </div>
        <div class="school-2 top clearfix">

            <?php
            $args = array('category' => 14, 'nopaging' => 1);
            $lastposts = get_posts($args);

            foreach ($lastposts as $post) {
                setup_postdata($post); // устанавливаем данные
                ?>
                <div class="col-md-6">
                    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt="">
                </div>
                <div class="col-md-6">
                    <p><?php the_title(); ?></p>
                    <?php the_content(); ?>
                </div>
                <?php
            }
            wp_reset_postdata(); // сброс
            ?>
        </div>
        <div class="line3">
            <img src="<?php echo get_template_directory_uri() ?>/img/bant.png" alt="">
        </div>
        <div class="school-1 top clearfix">
            <?php
            $args = array('category' => 15, 'nopaging' => 1);
            $lastposts = get_posts($args);

            foreach ($lastposts as $post) {
                setup_postdata($post); // устанавливаем данные
                ?>
                <div class="col-md-6">
                    <p><?php the_title(); ?></p>
                    <?php the_content(); ?>
                </div>
                <div class="col-md-6">
                    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt="">
                </div>
                <?php
            }
            wp_reset_postdata(); // сброс
            ?>

        </div>
        <div class="line3">
            <img src="<?php echo get_template_directory_uri() ?>/img/bant.png" alt="">
        </div>
        <div class="school-2 top clearfix">

            <?php
            $args = array('category' => 16, 'nopaging' => 1);
            $lastposts = get_posts($args);

            foreach ($lastposts as $post) {
                setup_postdata($post); // устанавливаем данные
                ?>
                <div class="col-md-6">
                    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt="">
                </div>
                <div class="col-md-6">
                    <p><?php the_title(); ?></p>
                    <?php the_content(); ?>
                </div>
                <?php
            }
            wp_reset_postdata(); // сброс
            ?>
            <div class="other">
                <?php
                $args = array('category' => 17, 'nopaging' => 1);
                $lastposts = get_posts($args);

                foreach ($lastposts as $post) {
                    setup_postdata($post); // устанавливаем данные
                    ?>
                    <ul class="ul">
                       <?php the_content(); ?>
                    </ul>
                    <?php
                }
                wp_reset_postdata(); // сброс
                ?>

            </div>
        </div>
        <div class="garden">
            <img src="<?php echo get_template_directory_uri() ?>/img/top-bg.png" class="top-bg" alt="">
            <div class="text-2" id="eat">Вкусно и питательно</div>
        </div>
        <div class="container rel-rel">
            <img src="<?php echo get_template_directory_uri() ?>/img/food-girl.png" class="center-block food-g" alt="">
            <div class="food top1">
                <img src="<?php echo get_template_directory_uri() ?>/img/food1.png" alt="">
                <span>Пятиразовое  питание</span>
            </div>
            <div class="food top2">
                <img src="<?php echo get_template_directory_uri() ?>/img/food2.png" alt="">
                <span>Диетический стол по состоянию здоровья</span>
            </div>
            <div class="food top3">
                <span>Разнообразная выпечка</span>
                <img src="<?php echo get_template_directory_uri() ?>/img/food3.png" alt="">
            </div>
            <div class="food top4">
                <img src="<?php echo get_template_directory_uri() ?>/img/food4.png" alt="">
                <span>Фруктовый  дополнительный завтрак</span>
            </div>
            <div class="food top5">
                <img src="<?php echo get_template_directory_uri() ?>/img/food5.png" alt="">
                <span>Разнообразное меню в течении месяца</span>
            </div>
        </div>
        <div class="thank clearfix">
            <img src="<?php echo get_template_directory_uri() ?>/img/top-bg.png" class="top-bg" alt="">
            <div class="text-2" id="reviwes">Слова благодарности</div>
            <div class="container slider-4">
                <?php
                $args = array('category' => 18, 'nopaging' => 1);
                $lastposts = get_posts($args);

                foreach ($lastposts as $post) {
                    setup_postdata($post); // устанавливаем данные
                    ?>
                    <div>
                        <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" class="col-sm-6 center-block img-responsive" alt="">
                        <div class="col-sm-6">
                            <div class="name"><?php the_title(); ?></div>
                            <p><?php the_content(); ?>
                            <span><?php the_date('d. m. Y г.'); ?></span></p>
                        </div>
                    </div>
                    <?php
                }
                wp_reset_postdata(); // сброс
                ?>


            </div>
          <!--   <button class="btn text1" data-toggle="modal" data-target="#callModal2">
                <span>Оставить отзыв</span>
            </button> -->

            <!-- Modal -->
            <div id="callModal2" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <?php $admin_email = get_option('admin_email'); ?>
                    <form class="modal-content" action="<?php echo get_template_directory_uri() ?>/post_comment.php" method="post">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <span>Имя</span>
                                <input class="form-control" name="name" type="text">
                            </div>
                            <div class="form-group">
                                <span>Эл. почта</span>
                                <input class="form-control" name="email" type="text">
                            </div>
                            <div class="form-group">
                                <span>Ваш отзыв</span>
                                <textarea name="text" cols="30" rows="3"></textarea>
                            </div>
                            <input type='hidden' name='admin_email' value='<?php echo $admin_email; ?>'/>
                            <div class="form-group">
                                <button type="submit" class="btn">Отправить</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="garden">
            <img src="<?php echo get_template_directory_uri() ?>/img/top-bg.png" class="top-bg" alt="">
            <div class="text-2" id="stars">Наши звезды</div>
            <div class="slider-rel">
                <img src="<?php echo get_template_directory_uri() ?>/img/queen.png" class="absolute2" alt="">
                <img src="<?php echo get_template_directory_uri() ?>/img/tumbnail.png" class="absolute" alt="">
                <div class="slider">
                    <div><img src="<?php echo get_template_directory_uri() ?>/photo/our_star/1.png" alt=""></div>
					<div><img src="<?php echo get_template_directory_uri() ?>/photo/our_star/2.png" alt=""></div>
					<div><img src="<?php echo get_template_directory_uri() ?>/photo/our_star/3.png" alt=""></div>
					<div><img src="<?php echo get_template_directory_uri() ?>/photo/our_star/4.png" alt=""></div>
					<div><img src="<?php echo get_template_directory_uri() ?>/photo/our_star/5.png" alt=""></div>
					<div><img src="<?php echo get_template_directory_uri() ?>/photo/our_star/6.png" alt=""></div>
					<div><img src="<?php echo get_template_directory_uri() ?>/photo/our_star/7.png" alt=""></div>
                </div>
            </div>
            <div class="black">
                <div class="line"></div>
                ВАШ РЕБЕНОК В ПОЛНОЙ БЕЗОПАСНОСТИ В ПШДД “ АДЕМИ”
            </div>
            <div class="flex">
                <div>
                                <span class="time">
                                    Группа неполного дня
                                    <?php $option = get_option('sample_theme_options'); echo $option['group'];?>
                                </span>
                </div>
                <div>
                                <span class="time">
                                    Группа полного дня
                                    <?php $option = get_option('sample_theme_options'); echo $option['group2'];?>
                                </span>
                </div>
                <div>
                                <span class="time">
                                    <?php $option = get_option('sample_theme_options'); echo $option['indiv'];?>
                                </span>
                </div>
            </div>
        </div>
    </section>
</main>



<?php get_footer(); ?>








