<?php 
  // include('header.php') Pode ser assim
  get_header()
?>

<h1>Bem Vindos!</h1>

<?php
  if(have_posts()){
    while(have_posts()){
      the_post();
?>
<h2><?php the_title()?></h2>
<p><?php the_content()?></p>

<?php
    }
  }
?>

<?php 
  // include('footer.php') Pode ser assim
  get_footer()
?>