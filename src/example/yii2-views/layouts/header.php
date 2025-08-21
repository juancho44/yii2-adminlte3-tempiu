<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Inflector;
use yii\helpers\Url;
use yii\web\View;
use yii\widgets\Breadcrumbs;

?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <?php if (isset($this->blocks['content-header'])): ?>
                    <h1><?= $this->blocks['content-header'] ?></h1>
                <?php else: ?>
                    <h1>
                        <?php
                        if ($this->title !== null):
                            echo Html::encode($this->title);
                        else:
                            echo Inflector::camel2words(Inflector::id2camel($this->context->module->id));
                            if ($this->context->module->id !== Yii::$app->id):
                                echo '<small>Module</small>';
                            endif;
                        endif;
                        ?>
                    </h1>
                <?php endif; ?>
            </div>

            <div class="col-sm-6">
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    'options' => [
                        'class' => 'float-sm-right'
                    ]
                ]) ?>
            </div>
        </div>
    </div>
</section>