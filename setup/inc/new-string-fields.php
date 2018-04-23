<?php

// Array of new string field labels
$new_string_fields = array('');

add_action('init', 'set_new_string_post_fields');
function set_new_string_post_fields($postID){

    foreach ( $new_string_fields as $new_string_field ){

        if ( isset($_POST[$new_string_field]) ){

            // do nothing if custom field is set

        } else {

            update_post_meta($postID ,$new_string_field , '0');

        }

    }

}

?>
