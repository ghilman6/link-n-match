<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StaticMahasiswa */

$this->title = 'Create Static Mahasiswa';
$this->params['breadcrumbs'][] = ['label' => 'Static Mahasiswas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="static-mahasiswa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
