<!-- Slider -->

   <div class="row">
    <div class="twelve columns">
     <div id="featured"> 

      <img src="/themes/luka/assets/img/slides/slide1.jpg" alt="Slide 1" />
      <img src="/themes/luka/assets/img/slides/slide2.jpg" alt="Slide 2" />
      <img src="/themes/luka/assets/img/slides/slide3.jpg" alt="Slide 3" />
      <img src="/themes/luka/assets/img/slides/slide4.jpg" alt="Slide 4" />
      <img src="/themes/luka/assets/img/slides/slide5.jpg" alt="Slide 5" />
      <img src="/themes/luka/assets/img/slides/slide6.jpg" alt="Slide 6" />
      <img src="/themes/luka/assets/img/slides/slide7.jpg" alt="Slide 7" />

     </div>
    </div>
   </div>

  <script type="text/javascript">
     $(window).load(function() {
         $('#featured').orbit({directionalNav: false, animation: 'fade'});
     });
  </script>      

<!--Ends Slider-->

<hr />

<?php if(has_posts()): ?>
    
    	<?php while(posts()): ?>

    	<section class="row post">
         <div class="panel">
           <p class="date"><?php echo relative_time(article_time()); ?></p>
           <h3><a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a></h3>
           <p><?php echo article_description(); ?></p>
          </div>
    	</section>

    	<?php endwhile; ?>
             
<?php else: ?>
    <p>Looks like you have some writing to do!</p>
<?php endif; ?>