<div id="sidebar">
  <?php
  if (is_page() && $post->post_parent) {
      $childpages = wp_list_pages('sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0');
  } else {
      $childpages = wp_list_pages('sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0');
  }

  if ($childpages) {
      $string = '<div class="card mb-4"><div class="card-body"><h4>More</h4><ul class="nav flex-column">' . $childpages . '</ul></div></div>';
  }
  print $string;
  ?>

  <?php dynamic_sidebar('page-sidebar'); ?>
</div>
