<?php

namespace juancho44\adminlte3\assets;

use yii\web\AssetBundle;

/**
 * Class FontAwesomeAsset
 * @package juancho44\adminlte3\assets
 */
class FontAwesomeAsset extends AssetBundle
{
    public $sourcePath = '@npm/fortawesome--fontawesome-free';

    public $css = [
        'css/all.min.css',
    ];
}