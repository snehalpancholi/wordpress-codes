<?php 

add_action('pre_get_posts', 'my_exclude_category_from_archive');
function my_exclude_category_from_archive($query) {
  // Exclude from the main archive, but display on the category archive
  if($query->is_main_query() && $query->query['category_name'] !== 'custom-category-slug') {
    // Put category ID in the array
    $query->set('category__not_in', array(10));
  }
}