<?php

$style = tr_taxonomy('Style')
        ->setId('fest_style')
        ->setHierarchical()
        ->addPostType('artist')
        ->addPostType('performance')
        ->addPostType('workshop')
        ->setMainForm(function() {
          $form = tr_form();
          echo $form->image('Photo');
        });
