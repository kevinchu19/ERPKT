<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>ERPKT!</h1>

        <p class="lead">Sistema de gestion</p>

    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Clientes</h2>

                <p><a class="btn btn-primary" href="<?= Url::to(['customer/index']) ?>">Ir a clientes <i class="glyphicon glyphicon-zoom-in"></i></a></p>
            </div>
            <div class="col-lg-4">
                <h2>Ordenes</h2>
                <p><a class="btn btn-warning" href="<?= Url::to(['order/index']) ?>">Ir a Ordenes &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Productos</h2>
                <p><a class="btn btn-success" href="<?= Url::to(['product/index']) ?>">Ir a Productos &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
