<?php

/* @var $this yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;
use juancho44\adminlte3\assets\AdminLteAsset;
use juancho44\adminlte3\assets\FontAwesomeAsset;
use juancho44\adminlte3\widgets\Alert;

AdminLteAsset::register($this);
FontAwesomeAsset::register($this);

$this->registerCssFile('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700');

// Forzar tema dark con CSS personalizado
$this->registerCss("
    body {
        background-color: #343a40 !important;
        color: #ffffff !important;
    }
    .wrapper {
        background-color: #343a40 !important;
    }
    .main-header {
        background-color: #212529 !important;
        border-bottom: 1px solid #495057 !important;
    }
    .main-sidebar {
        background-color: #212529 !important;
    }
    .sidebar-dark-primary {
        background-color: #212529 !important;
    }
    .content-wrapper {
        background-color: #343a40 !important;
    }
    .content-header {
        background-color: #343a40 !important;
    }
    .breadcrumb {
        background-color: #495057 !important;
        color: #ffffff !important;
    }
    .breadcrumb-item a {
        color: #17a2b8 !important;
    }
    .breadcrumb-item.active {
        color: #ffffff !important;
    }
");

$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="hold-transition sidebar-mini">
<?php $this->beginBody() ?>

<div class="wrapper">
    <?= $this->render('navbar', ['directoryAsset' => $directoryAsset]) ?>

    <?= $this->render('sidebar', ['directoryAsset' => $directoryAsset]) ?>

    <div class="content-wrapper">

        <?= $this->render('header') ?>

        <section class="content">
            <div class="container-fluid">
                <?= Alert::widget(); ?>
                <?= $content ?>
            </div>
        </section>
    </div>

    <?= $this->render('footer') ?>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>