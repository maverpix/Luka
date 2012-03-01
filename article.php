<section class="row post-single" id="article-<?php echo article_id(); ?>">
 
     <div class="five columns centered">
      <div class="panel">
       <div style="text-align:center">
        <h3><a id="logo" href="<?php echo base_url(); ?>"><?php echo site_name(); ?></a></h3>
       </div>
      </div>
     </div>

    <article class="twelve columns centered">

     <?php echo article_html(); ?>

    </article>

</section>

  <div class="row"> 
    <div class="ten columns centered">  
     <div class="panel">  
      <div style="text-align:center">
       <h2><?php echo article_title(); ?></h2>
       <h5>Created <?php echo relative_time(article_time()); ?></h5>
       <h6>This article is my <?php echo numeral(article_id() + 1); ?> oldest. It is <?php echo count_words(article_html()); ?> words long.</h6>
      </div>
     </div>
     </div>
    </div>

<hr>

<?php include('includes/comment_form.php'); ?>



  <div class="row"> 
    <div class="seven columns centered">     
        <div style="text-align:center">

<hr>

		<form id="search" action="<?php echo search_url(); ?>" method="post" class="row">
			<input type="search" results="5" autosave="true" name="term" value="<?php echo search_term(); ?>">
		</form>
 
         <strong>Search</strong>
         </div>
        </div>
        </div>