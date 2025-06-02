<?php
get_header();

if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
        <main class="dbx-single-container">
            <h1 class="dbx-single-title"><?php the_title(); ?></h1>
            <div class="dbx-single-meta">
                <span class="dbx-single-date"><?php echo get_the_date(); ?></span>
                <span class="dbx-single-author"> | <?php the_author(); ?></span>
                <span class="dbx-single-category">
                    <?php
                        $categories = get_the_category();
                        if ( ! empty( $categories ) ) {
                            echo ' | ' . esc_html( $categories[0]->name );
                        }
                    ?>
                </span>
            </div>
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="dbx-single-image">
                    <?php the_post_thumbnail('large'); ?>
                </div>
            <?php endif; ?>
            <?php if ( get_the_excerpt() ) : ?>
                <div class="dbx-single-teaser"><strong><?php the_excerpt(); ?></strong></div>
            <?php endif; ?>
            <?php
            $summary = get_post_meta(get_the_ID(), '_dbx_summary_bullets', true);
            if ($summary) {
                echo '<ul class="dbx-single-summary">';
                foreach (explode("\n", $summary) as $line) {
                    $line = trim($line);
                    if ($line) echo '<li>' . esc_html($line) . '</li>';
                }
                echo '</ul>';
            }
            ?>
            <div class="dbx-single-content">
                <?php the_content(); ?>
            </div>
        </main>
    <?php endwhile;
endif;

get_footer(); 