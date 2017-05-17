<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 09.05.2017
 * Time: 13:45
 */

use yii\helpers\Html;

$this->title = 'Topic: ' . $data['topic']['title'];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>Text</th>
        </tr>
        </thead>
        <?php
        foreach ($data['posts'] as $key => $value){ ?>
            <tr>
                <td><?= $value['text'] ?></td>
            </tr>
        <?php }
        ?>
    </table>

</div>
