<?php
/*
Plugin Name: Weather Data
Description: Fetch and display weather data from Google Apps Script.
Version: 1.0
Author: Your Name
*/

function fetch_weather_data() {
    $response = wp_remote_get('https://script.google.com/macros/s/AKfycbyZopWBM949LZjfe1YAgMIArJ4C7rDueubC2-UzCyDCHBTn5PEnIqE822kvE9JPyZw/exec', array(
        'timeout' => 10,
        'body' => array(
            'access_key' => 'jeroen',
            'location' => 'Haringvliet'
        )
    ));

    if (is_wp_error($response)) {
        return 'Error fetching data.';
    }

    $body = wp_remote_retrieve_body($response);
    $data = json_decode($body, true);

    if (empty($data)) {
        return 'No data available.';
    }

    ob_start();
    ?>
    <div class="data-container">
        <div class="data-item"><strong>Location:</strong> <?php echo esc_html($data['loc']); ?></div>
        <div class="data-item"><strong>Knots:</strong> <?php echo esc_html($data['knots']); ?></div>
        <div class="data-item"><strong>Gust:</strong> <?php echo esc_html($data['gust']); ?></div>
        <div class="data-item"><strong>Direction:</strong> <?php echo esc_html($data['direction']); ?></div>
        <div class="data-item"><strong>Water Temperature:</strong> <?php echo esc_html($data['watertemp']); ?></div>
        <div class="data-item"><strong>Timestamp:</strong> <?php echo esc_html($data['timestamp']); ?></div>
    </div>
    <?php
    return ob_get_clean();
}

function weather_data_shortcode() {
    return fetch_weather_data();
}

add_shortcode('weather_data', 'weather_data_shortcode');
?>
