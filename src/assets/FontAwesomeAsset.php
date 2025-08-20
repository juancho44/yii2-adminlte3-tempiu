<?php

namespace juancho44\adminlte3\assets;

use yii\web\AssetBundle;

/**
 * Class FontAwesomeAsset
 * @package juancho44\adminlte3\assets
 */
class FontAwesomeAsset extends AssetBundle
{
    public $baseUrl = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0';

    public $css = [
        'css/all.min.css',
    ];
}