<?php

//include dirname(__DIR__) . '/taxonomy/style.php';


$artist_details = tr_meta_box('Artist Details');

$artist = tr_post_type('Artist')
          ->setIcon('star-full')
          ->setTitlePlaceholder( 'Enter artist full name' )
          ->setArchivePostsPerPage(-1)
          ->setArgument('supports', ['title','editor','thumbnail'] )
          ->setRest('artists')
          ->apply([$artist_details,'style']);

//->setId('fest_artist')

function add_meta_content_artist_details() {
  $form = tr_form();
  echo $form->text('Tagline');
  echo $form->text('Nationality');
  echo $form->text('Website');
  echo $form->text('Facebook');
  echo $form->text('Twitter');
  echo $form->text('Instagram');
  echo $form->text('Youtube');
  echo $form->repeater('Videos')->setFields([ $form->text('Video URL') ]);
  echo $form->gallery('Photo Gallery');
}
