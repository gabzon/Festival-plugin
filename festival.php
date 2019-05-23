<?php

/*
Plugin Name: Festival
Plugin URI: http://gabzon.github.com/festival
Description: A Wordpress Plugin for Salsa Festivals using TypeRocket
Version: 1.0
Author: Gabriel Zambrano
Author URI: http://www.zambrano.ch
License: GPL2
*/

require_once dirname(__DIR__) . '/typerocket/init.php';

include 'taxonomy/artist_type.php';
include 'taxonomy/classroom.php';
include 'taxonomy/style.php';
include 'taxonomy/year.php';
include 'post-types/artist.php';
include 'post-types/workshop.php';
include 'post-types/performance.php';
