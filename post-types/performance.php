<?php

$performance_details = tr_meta_box('Performance Details');

$performance = tr_post_type('Performance')
          ->setIcon('magic')
          ->setTitlePlaceholder( 'Enter performance name' )
          ->setArchivePostsPerPage(-1)
          ->setArgument('supports', ['title','editor','thumbnail'] )
          ->setRest('performances')
          ->apply($performance_details)
          ->setArgument('taxonomies', ['category','post_tag']);

$uses = $performance->getApplied();

function add_meta_content_performance_details() {
  $form = tr_form();
  echo $form->date('Date');
  echo $form->text('Time');
  echo $form->text('Duration');
  echo $form->links('Artist(s)')->setPostType('artist');
  echo $form->gallery('Photos');
}
