<?php
get_header();
?>
<main class="dbx-blog-container">
    <h1 class="dbx-blog-title">Neueste Beiträge</h1>
    <?php if ( have_posts() ) : ?>
        <div class="dbx-blog-list">
            <?php while ( have_posts() ) : the_post(); ?>
                <article class="dbx-blog-item">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <a href="<?php the_permalink(); ?>" class="dbx-blog-thumb-link">
                            <div class="dbx-blog-thumb">
                                <?php the_post_thumbnail('large'); ?>
                            </div>
                        </a>
                    <?php endif; ?>
                    <div class="dbx-blog-content">
                        <h2 class="dbx-blog-post-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
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
                        <div class="dbx-blog-excerpt">
                            <?php the_excerpt(); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="dbx-blog-readmore">Read more</a>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>
        <div class="dbx-blog-pagination">
            <?php the_posts_pagination([ 'mid_size' => 2 ]); ?>
        </div>
    <?php else : ?>
        <p>No posts found.</p>
    <?php endif; ?>
</main> 