<?php
$workshop_details = tr_meta_box('Workshop Details');

$workshop = tr_post_type('Workshop')
          ->setIcon('calendar')
          ->setTitlePlaceholder( 'Enter workshop name' )
          ->setArchivePostsPerPage(-1)
          ->setArgument('supports', ['title','editor','thumbnail'] )
          ->setRest('workshops')
          ->apply([$workshop_details,'style']);

function add_meta_content_workshop_details() {
  $options = [
      'Beginner'      => 'Beginner',
      'Intermediate'  => 'Intermediate',
      'Advanced'      => 'Advanced',
      'All levels'    => 'All levels'
  ];

  $form = tr_form();
  echo $form->date('Date');
  echo $form->text('Begin Time');
  echo $form->text('End Time');
  echo $form->radio('Level')->setOptions($options);
  echo $form->links('Dancer(s)')->setPostType('artist');
  echo $form->gallery('Photos');
}
