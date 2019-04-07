<?php 
  // include('header.php') Pode ser assim
  get_header()
?>

<h1>Bem Vindos!</h1>

<?php
  if(have_posts()){
    while(have_posts()){
      the_post();
      the_title();
      the_content();
    }
  }
?>

<?php 
  // include('footer.php') Pode ser assim
  get_footer()
?>