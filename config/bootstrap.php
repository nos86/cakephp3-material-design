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
    'image' => '/material_design_theme/img/mdb.jpg',
    'folder' => ROOT
]);