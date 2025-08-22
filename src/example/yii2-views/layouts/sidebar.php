<?php

/* @var $directoryAsset string */

use yii\helpers\Html;
use yii\helpers\Url;
use juancho44\adminlte3\widgets\Menu;

?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= Url::home() ?>" class="brand-link">
        <img src="<?= Url::to('@web/images/', true) ?>/logo.png" alt="Tempiu Logo"  style="width: 98%;">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">

            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <?php echo arbolmenu(NULL) ?>
            </ul>

        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>



<?php

function arbolmenu($idpadre) {

    $sql = $idpadre == null ? "parent is null" : "parent=$idpadre ";

    $Query = \app\models\Menu::find()->where($sql)->orderBy(['order' => SORT_ASC])->all();

    foreach ($Query as $record) {
        $sql2 = "parent=$record->id";
        $Query2 = \app\models\Menu::find()->where($sql2)->all();
        
        $sql3="select route from menu where parent=$record->id";
        $Query3 = Yii::$app->db->createCommand($sql3)->queryAll();
        
        $conthijo=0;
        
        foreach($Query3 as $menuhijo)
        {       
            $sql = "select child from auth_item_child,auth_assignment where auth_assignment.user_id=" . yii::$app->user->identity->id . " and auth_item_child.parent like auth_assignment.item_name  and child like '" . $menuhijo["route"] . "'";
            $findpermit= Yii::$app->db->createCommand($sql)->queryOne();
            if(!empty($findpermit["child"]))
            {
             $conthijo++;   
            }
        }

        
        $sql = "select child from auth_item_child,auth_assignment where auth_assignment.user_id=" . yii::$app->user->identity->id . " and auth_item_child.parent like auth_assignment.item_name  and child like '" . $record->route . "'";
        $authtip = Yii::$app->db->createCommand($sql)->queryOne();

        if (count($Query2) > 0 and $conthijo>0) {
            ?>
            <li class="nav-item has-treeview">
                <a class="nav-link " href="#">
                    <i class="<?php echo $record->icono != NULL ? $record->icono : "nav-icon fas fa-circle" ?>"></i><p><?php echo $record->name ?> <i class="right fas fa-angle-left"></i> </p></a>  
            </a>
            <ul class="nav nav-treeview">
                <?php arbolmenu($record->id) ?>
            </ul>
            </li>    
            <?php
        } else {

            if (!empty($authtip["child"])) {
                ?>

                <li class="nav-item"><a class="nav-link " href="<?php echo Yii::$app->homeUrl ?><?php echo $record->route ?>"><i class="<?php echo $record->icono != NULL ? $record->icono : "nav-icon fas fa-th" ?>" ></i> <p><?php echo $record->name ?></p></a></li>

                <?php
            }
        }
        ?>   


        <?php
    }
}
?>
