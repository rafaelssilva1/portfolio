<?php get_header();
$info = new WP_Query(array(
    'post_type' => 'info',
    'posts_per_page' => -1,
    'orderby' => 'meta_value_num',
    'order' => 'ASC',
));
?>
<main>
    <?php
    while ($info->have_posts()) {
        $info->the_post();

        print_r(get_field('blob_1'));
    ?>
        <div class="hero__container" style="background-color:<?php echo get_field('hero')['background_color']; ?>">
            <span class="hero__summary color-white playfair-display"><?php echo get_field('hero')['summary']; ?></span>
            <svg class="hero__blob hero__blob--1" xmlns="http://www.w3.org/2000/svg" width="1809" height="1825" viewBox="0 0 1809 1825" fill="none">
                <g filter="url(#filter0_f_1_15)">
                    <path d="M1466.29 1469.82C2023.89 792.271 1058.52 60.3002 573.303 190.033C88.0854 319.767 34.0047 904.564 475.406 797.463C894.214 695.845 908.695 2147.37 1466.29 1469.82Z" fill="url(#paint0_radial_1_15)" />
                </g>
                <defs>
                    <filter id="filter0_f_1_15" x="0.540039" y="0.968262" width="1808.13" height="1823.73" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                        <feGaussianBlur stdDeviation="87" result="effect1_foregroundBlur_1_15" />
                    </filter>
                    <radialGradient id="paint0_radial_1_15" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(1178.5 540) rotate(110.008) scale(1981.6 1619.96)">
                        <stop stop-color="<?php echo get_field('hero')['blob_3']['color_start'] ?>" />
                        <stop offset="1" stop-color="<?php echo get_field('hero')['blob_3']['color_end'] ?>" stop-opacity="0" />
                    </radialGradient>
                </defs>
            </svg>
            <svg class="hero__blob hero__blob--2" xmlns="http://www.w3.org/2000/svg" width="1872" height="1461" viewBox="0 0 1872 1461" fill="none">
                <g filter="url(#filter0_f_1_14)">
                    <path d="M1368.35 472.945C2232.97 937.432 1388.12 883.7 1102.58 1224.27C1074.59 1250.62 995.89 1309.61 904.978 1334.79C791.338 1366.26 170.896 907.26 127.147 459.588C83.3977 11.916 503.726 8.45852 1368.35 472.945Z" fill="url(#paint0_radial_1_14)" />
                </g>
                <defs>
                    <filter id="filter0_f_1_14" x="0.0517578" y="0.197021" width="1871.54" height="1460.12" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                        <feGaussianBlur stdDeviation="62" result="effect1_foregroundBlur_1_14" />
                    </filter>
                    <radialGradient id="paint0_radial_1_14" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(691.849 990.547) rotate(-176.451) scale(876.34 1450.61)">
                        <stop stop-color="<?php echo get_field('hero')['blob_1']['color_start'] ?>" stop-opacity="0.45" />
                        <stop offset="1" stop-color="<?php echo get_field('hero')['blob_1']['color_end'] ?>" stop-opacity="0.09" />
                    </radialGradient>
                </defs>
            </svg>
            <svg class="hero__blob hero__blob--3" xmlns="http://www.w3.org/2000/svg" width="1690" height="1915" viewBox="0 0 1690 1915" fill="none">
                <g filter="url(#filter0_f_1_13)">
                    <path d="M468.929 1551.18C42.0438 1680.3 103.613 1199.79 178.761 1023.23C194.251 986.837 224.829 961.129 257.356 938.63C413.371 830.716 687.616 607.122 965.502 259.883C1353.31 -224.707 1421.8 731.555 1488.53 899.19C1555.26 1066.82 1700.85 1696.44 1258.6 1780.47C816.355 1864.5 951.575 1405.19 468.929 1551.18Z" fill="url(#paint0_linear_1_13)" />
                </g>
                <defs>
                    <filter id="filter0_f_1_13" x="0.977539" y="0.190552" width="1688.82" height="1914.64" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                        <feGaussianBlur stdDeviation="62" result="effect1_foregroundBlur_1_13" />
                    </filter>
                    <linearGradient id="paint0_linear_1_13" x1="562.91" y1="570.681" x2="1503.57" y2="1324.4" gradientUnits="userSpaceOnUse">
                        <stop stop-color="<?php echo get_field('hero')['blob_2']['color_start'] ?>" />
                        <stop offset="1" stop-color="<?php echo get_field('hero')['blob_2']['color_end'] ?>" stop-opacity="0.14" />
                    </linearGradient>
                </defs>
            </svg>
        </div>
    <?php };
    wp_reset_postdata(); ?>
    <div class="works__container" id="works">
        <div class="works__section">
            <h2 class="works__title playfair-display">Works</h2>
            <div class="works__list">
                <?php
                $works = new WP_Query(array(
                    'post_type' => 'experiences',
                    'posts_per_page' => 5,
                    'orderby' => 'meta_value_num',
                    'order' => 'ASC',
                ));

                while ($works->have_posts()) {
                    $works->the_post();
                ?>
                    <a href="<?php the_permalink(); ?>" class="works__details-item" data-id="<?php the_ID(); ?>">
                        <h3 class="works__details-title roboto disabled-pointer-events"><?php the_title(); ?></h3>
                        <div class="works__details-container disabled-pointer-events">
                            <span class="works__details-description disabled-pointer-events roboto"><?php echo get_field('description'); ?></span>
                            <span class="works__details-categories disabled-pointer-events playfair-display">
                                <?php
                                $i = 0;
                                $categoryList = get_the_category();
                                $count = count($categoryList);
                                foreach ($categoryList as $key => $value) {
                                    if (++$i !== $count) {
                                        echo $value->cat_name . ', ';
                                    } else {
                                        echo $value->cat_name;
                                    }
                                }
                                ?>
                            </span>
                        </div>
                    </a>
                    <?php
                    if ($works->current_post + 1 != $works->post_count) {
                    ?>
                        <hr />
                    <?php
                    }
                    ?>
                <?php
                }
                ?>

            </div>
        </div>
        <div class="works__image">
            <?php
            $j = 0;
            while ($works->have_posts()) {
                $works->the_post();
            ?>
                <div class="works__image-item <?php if ($j === 0) echo 'opacity'; ?>" data-id="<?php the_ID(); ?>">
                    <?php if (has_post_thumbnail()) {
                        echo get_the_post_thumbnail();
                    } ?>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <?php
    while ($info->have_posts()) {
        $info->the_post();
    ?>
        <div class="about__container" id="contacts" style="background-color:<?php echo get_field('about')['background_color']; ?>">
            <div class="about__info">
                <h2 class="about__title playfair-display"><?php echo get_field('about')['title']; ?></h2>
                <span class="about__text roboto"><?php echo get_field('about')['text']; ?></span>
                <h3 class="about__social-media playfair-display"><?php echo get_field('social_title'); ?></h3>
                <div class="about__social-links-container">
                <?php
            }
            $social = new WP_Query(array(
                'post_type' => 'social',
                'posts_per_page' => -1,
                'orderby' => 'meta_value_num',
                'order' => 'ASC',
            ));
            while ($social->have_posts()) {
                $social->the_post();
                ?>
                    <a class="about__social-link roboto" href="<?php echo get_field('link'); ?>" target="_blank">
                        <img class="about__icon" src="<?php echo get_field('icon'); ?>" alt="">
                        <span><?php echo get_field('text'); ?></span>
                    </a>
                <?php
            }
                ?>
                </div>
            </div>
            <div class="about__picture-container">
                <?php
                while ($info->have_posts()) {
                    $info->the_post();
                ?>
                    <img class="about__picture" src="<?php echo get_field('picture'); ?>" alt="<?php echo get_bloginfo('name'); ?>" />
                <?php
                }
                ?>
            </div>
        </div>
</main>
</body>

<?php get_footer(); ?>