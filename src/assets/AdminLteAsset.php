<?php

namespace juancho44\adminlte3\assets;

use yii\web\AssetBundle;

/**
 * Class AdminLteAsset
 * @package juancho44\adminlte3\assets
 */
class AdminLteAsset extends AssetBundle
{
    public $baseUrl = 'https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist';

    public $css = [
        'css/adminlte.min.css',
    ];

    public $js = [
        'https://code.jquery.com/jquery-3.6.0.min.js',
        'js/adminlte.min.js'
    ];

    public $depends = [
        'juancho44\adminlte3\assets\PluginAsset',
    ];
}