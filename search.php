<section class="row post">
    <article class="twelve columns">    
        <h3>You searched for &ldquo;<?php echo search_term(); ?>&rdquo;.</h3>
        
        <?php if(has_search_results()): ?>
            <p>We found <?php echo total_search_results(); ?> <?php echo pluralise(total_search_results(), 'result'); ?> for &ldquo;<?php echo search_term(); ?>&rdquo;</p>
            <ul class="items wrap">
                <?php while(search_results()): ?>
                <li>
                    <a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>">
                        <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time>
                        <h3><?php echo article_title(); ?></h3>
                    </a>
                </li>
                <?php endwhile; ?>
            </ul>
        <?php else: ?>
            <p>Unfortunately, there's no results for &ldquo;<?php echo search_term(); ?>&rdquo;. Did you spell everything correctly?</p>
        <?php endif; ?>
        
	</article>
</section>
