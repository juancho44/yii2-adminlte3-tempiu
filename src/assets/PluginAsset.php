<?php

namespace juancho44\adminlte3\assets;

use yii\web\AssetBundle;

/**
 * Class PluginAsset
 * @package juancho44\adminlte3\assets
 */
class PluginAsset extends AssetBundle
{
    public $baseUrl = 'https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist';

    public $css = [
        'css/adminlte.min.css',
    ];
}