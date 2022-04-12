<?php

function enqueueScriptTheme(){
    wp_enqueue_script('awe_globals', get_template_directory_uri() . "/assets/dist/app.js", [],  0.1, true);
    wp_localize_script('awe_globals_vars', 'awe_globals_object', [
        "auth" => [
            "hook" => "logincallback",
            "nonce" => wp_create_nonce('logincallback'),
        ]
    ]);
}

add_action('wp_enqueue_scripts', 'enqueueScriptTheme');