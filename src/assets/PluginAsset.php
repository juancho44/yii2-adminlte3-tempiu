<?php

namespace juancho44\adminlte3\assets;

use yii\web\AssetBundle;

/**
 * Class PluginAsset
 * @package juancho44\adminlte3\assets
 */
class PluginAsset extends AssetBundle
{
    public $sourcePath = '@bower/adminlte/dist';

    public $css = [
        'css/adminlte.min.css',
    ];
}