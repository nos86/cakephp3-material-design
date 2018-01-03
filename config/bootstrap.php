<?php
use Cake\Core\Configure;
use Cake\Core\Exception\MissingPluginException;
use Cake\Core\Plugin;
Configure::write('Theme', [
    'title' => 'Material Design Bootstrap',
    'logo' => [
        'mini' => '<b>MD</b>B',
        'large' => '<b>Material</b> Design'
    ],
    'login' => [
        'show_remember' => true,
        'show_register' => true,
        'show_social' => true
    ],
    'folder' => ROOT
]);