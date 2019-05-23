<?php

$room = tr_taxonomy('Classroom')
        ->setId('fest_classroom')
        ->setHierarchical()        
        ->addPostType('performance')
        ->addPostType('workshop')
        ->setMainForm(function() {
          $form = tr_form();
          echo $form->text('Capacity');
          echo $form->text('m2');
          echo $form->gallery('Photos');
        });
