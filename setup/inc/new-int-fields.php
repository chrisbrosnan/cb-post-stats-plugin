<?php

// Array of new numercial field labels
$new_int_fields = array('views_count',
              'updates_count',
              'characters_count',
              'time_since_publish',
              'time_since_update',
              'number_of_categories',
              'number_of_tags',
              'number_of_comments');

add_action('init', 'set_new_int_post_fields');
function set_new_int_post_fields($postID){

    foreach ( $new_int_fields as $new_int_field ){

        if ( isset($_POST[$new_int_field]) ){

            // do nothing if custom field is set

        } else {

            update_post_meta($postID ,$new_int_field , '0');

        }

    }

}

?>
