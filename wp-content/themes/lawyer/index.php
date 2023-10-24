<?php
    get_header();
?>

<main>

  <?php
      // include Lead Section
      get_template_part('/template-parts/lead-section');
      get_template_part('/template-parts/post-loop');

?>


  <?php
    get_template_part('/template-parts/info-section');
  ?>


</main>


<?php
    get_footer();
?>