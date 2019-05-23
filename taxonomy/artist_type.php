<?php

$artist_type = tr_taxonomy('Artist Type')
        ->setId('fest_artist_type')
        ->setHierarchical()
        ->addPostType('artist')
        ->setMainForm(function() {
          $form = tr_form();
          echo $form->image('Photo');
        });
