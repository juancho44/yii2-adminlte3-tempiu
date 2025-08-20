<?php

namespace juancho44\adminlte3\assets;

use yii\web\AssetBundle;

/**
 * Class AdminLteAsset
 * @package juancho44\adminlte3\assets
 */
class AdminLteAsset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/dist';

    public $css = [
        'css/adminlte.min.css',
    ];

    public $js = [
        'js/adminlte.min.js'
    ];

    public $depends = [
        'juancho44\adminlte3\assets\PluginAsset',
    ];
}