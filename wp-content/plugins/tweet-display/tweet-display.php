<?php
/**
 * Plugin Name: Tweet Display
 * Plugin URI: http://danielrogers.info
 * Description: This plugin adds a simple tweet link below posts.
 * Version: 1.0.0
 * Author: Daniel Rogers
 * Author URI: http://danielrogers.info
 */

function tweet_link( $content ) {
    return $content . '<p><a href="https://twitter.com/intent/tweet?url='.get_permalink().'">Tweet about this</a></p>';
  }
  add_action( 'the_content', 'tweet_link' );
