<footer class="text-center text-lg-start mt-auto">

  <section class="container">

    <div class="row ">
      <div class="col-12 mt-2">
        <?php wp_nav_menu(array('theme_location' => 'footer-menu')); ?>
      </div>
    </div>
    <div class="row brand">
      <div class=" col-12 col-lg-4 order-lg-3">
        <a href="#" class="text-center"> <img class="insta" src="<?php echo get_template_directory_uri() . '/src/assets/layer2.png'; ?>" alt="instalogo"></a>
      </div>
      <div class="col-lg-4 order-lg-2"></div>
      <div class="col-12 col-lg-4 order-lg-1">
        <img class="footerLogo" src="<?php echo get_template_directory_uri() . '/src/assets/footerLogo.png'; ?>" alt="footerLogo">
      </div>
    </div>
  </section>

</footer>

<?php wp_footer(); ?>
</body>

</html>