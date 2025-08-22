<?php

namespace juancho44\adminlte3\assets;

use yii\web\AssetBundle;

/**
 * Class AdminLteAsset
 * @package juancho44\adminlte3\assets
 */
class AdminLteAsset extends AssetBundle
{
    public $css = [
        'https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css',
        'https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/skins/skin-dark.min.css',
    ];

    public $js = [
        'https://code.jquery.com/jquery-3.6.0.min.js',
        'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js',
        'https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js'
    ];
}