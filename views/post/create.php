<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 09.05.2017
 * Time: 13:45
 */

use yii\helpers\Html;

$this->title = 'Post create';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-create">

    <h1><?= $this->title ?> on topic <?= $parent_id ?></h1>

    <?= $this->render('_form_create', [
        'model' => $model,
        'parent_id' => $parent_id,
    ]) ?>

</div>