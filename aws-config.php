<?php return array(
    'services' => array(
        'default_settings' => array(
            'params' => array()
        ),
        'CloudWatch' => array(
            'extends' => 'default_settings',
            'class'   => 'Aws\CloudWatch\CloudWatchClient',
            'params'  => array(
                'region' => 'us-east-1'
            )
        ),
    )
);

