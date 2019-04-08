<?php

add_theme_support('post-thumbnails');

function cadastrando_post_type_imoveis(){
  $labels = array(
    'name' => 'Imóveis',
    'name_singular' => 'Imóvel',
    'add_new_item' => 'Adicionar novo Imóvel',
    'edit_item' => 'Editar Imóvel'
  );

  $supports = array(
    'title',
    'editor',
    'thumbnail'
  )
  
  $args = array(
    'labels' => $labels,
    'public' => true,
    'description' => 'Imóveis da imobiliária Malura',
    'menu_icon' => 'dashicons-admin-home',
    'supports' => $supports
  );

  register_post_type('imovel', $args);
};

add_action('init', 'cadastrando_post_type_imoveis');

