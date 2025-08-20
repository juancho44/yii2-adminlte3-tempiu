<?php

namespace juancho44\adminlte3\assets\plugin;

use yii\web\AssetBundle;

/**
 * Class CustomFileInputAsset
 * @package juancho44\adminlte3\assets\plugin
 */
class CustomFileInputAsset extends AssetBundle
{
    public $sourcePath = '@vendor/fortawesome/font-awesome';

    public $css = [
        'css/all.min.css',
    ];
}