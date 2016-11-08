<?php $my_query = new WP_Query('cat=1&showposts=3'); ?>


 <ul class="news-list">
<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <li><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a> (<?php the_date_xml(); ?>)</li>


<?php endwhile; ?>
</ul>
