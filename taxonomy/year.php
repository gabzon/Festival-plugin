<?php

tr_taxonomy('Year')
  ->setId('fest_year')
  ->setHierarchical()
  ->addPostType('artist')
  ->addPostType('performance')
  ->addPostType('workshop');
