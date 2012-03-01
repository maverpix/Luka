        
            <footer class="row" id="bottom">

       	     <article class="twelve columns">

              <?php if(has_menu_items()): ?>
               <nav class="eight columns wrap">
            	<ul>
                <?php while(menu_items()): ?>
		 <li <?php echo (menu_active() ? 'class="active"' : ''); ?>>
	          <a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
		   <?php echo menu_name(); ?>
		    </a>
		 </li>
		<?php endwhile; ?>
              <?php endif; ?>

              <li><a href="<?php echo rss_url(); ?>">RSS</a></li>
                        
               <?php if(twitter_account()): ?>
                <li><a href="<?php echo twitter_url(); ?>">@<?php echo twitter_account(); ?></a></li>
               <?php endif; ?>
                 </ul>
               </nav>

                <a id="attribution" title="Powered by Anchor CMS" href="//anchorcms.com">Powered by Anchor CMS</a>
              </article>
   <div class="row">
    <div class="four columns">
              <small>&copy; <?php echo date('Y'); ?> <?php echo site_name(); ?></small>
             </div>
      </div>

            </footer>
        </div><!--ends container-->
           
    </body>
</html>