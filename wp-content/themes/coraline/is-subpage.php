<?php

function is_subpage()
{
  global $post;
  if ( is_page() && $post->post_parent ) {
    $parentID = $post->post_parent;
    return $parentID;
  } else {
    return false;
  }
} 

?>
