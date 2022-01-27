<?php
/**
 * AJAX Endpoint for Score Card.
 * Post to admin-ajax.php with the action param as "scorecard"
 * This can be used as a sample to create other AJAX endpoints in the theme.
 * Add as many of these files in the /endpoints/ directory and they will automatically be loaded into your WP site.
 */

$action_param = 'scorecard';

add_action( 'wp_ajax_' . $action_param, 'custom_scorecard_submission' );
add_action( 'wp_ajax_nopriv_' . $action_param, 'custom_scorecard_submission' );

function custom_scorecard_submission()
{
    $info = $_REQUEST['info'];

    $postID = wp_insert_post(array(
        'post_type'     => 'scorecard',
        'post_title'    => sprintf('%s %s %s',
            $info['first_name'],
            $info['last_name'],
            !empty($info['company_name']) ? '[' . $info['company_name'] . ']' : ''
        ),
        'post_status'   => 'publish'
    ));



    /**
     * Save Customer Information
     * --------------------------------------------------
     */
    $customerInformation = [
        'field_58517ea847159' => $info['first_name'],
        'field_58517ec34715a' => $info['last_name'],
        'field_58517ed04715b' => $info['email'],
        'field_58517ee14715c' => $info['company_name']
    ];

    foreach($customerInformation as $field => $value)
    {
        update_field($field, $value, $postID);
    }

    /**
     * Save Question & Answers
     * --------------------------------------------------
     */
    $values = [];

    // Loop through topics
    foreach($_REQUEST['topics'] as $topic)
    {
        //Loop through categories in topic
        foreach($topic['categories'] as $category)
        {
            //Add response
            $values[] = [
                'field_5851797ae0cb4' => $topic['title'], // Topic
                'field_58517961e0cb2' => $category['description'], // Question
                'field_58517967e0cb3' => $category['value'] // Answer
            ];
        }
    }

    update_field('field_58517959e0cb1', $values, $postID);

    die( json_encode( ['status' => 'success'] ) );
}