  <section class="row post">

     <div class="five columns centered">
      <div class="panel">
       <div style="text-align:center">
        <h3><a id="logo" href="<?php echo base_url(); ?>"><?php echo site_name(); ?></a></h3>
       </div>
      </div>
     </div>

   <article class="twelve columns centered"><?php echo page_content(); ?></article>

  </section>

<!--
		If you want to add custom functionality per-page, you can do so by using the bind() function, which is stored in the functions.php of your theme.
		Then, if you want to echo out your custom function, you just add a recieve() function. Here's an example: "<?php echo recieve(); ?>".
	 -->