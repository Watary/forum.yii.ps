<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 09.05.2017
 * Time: 13:45
 */

use yii\helpers\Html;

$this->title = 'Forum';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?>: <?= $data['forum']['title'] ?></h1>

    <h2>Forums</h2>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
        </tr>
        </thead>
        <?php
        foreach ($data['forum_child'] as $key => $value){ ?>
            <tr>
                <td><?= Html::a($value['title'], ['forum/list', 'id' => $value['id']], ['class' => 'profile-link']) ?></td>
                <td><?= $value['description'] ?></td>
            </tr>
        <?php }
        ?>
    </table>

    <h2>Topics</h2>

</div>
