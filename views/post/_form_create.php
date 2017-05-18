<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 18.05.2017
 * Time: 20:54
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'text')->textarea(['placeholder' => 'Please enter text for your post'])->label('Text'); ?>

        <?= $form->field($model, 'parent_id')->hiddenInput(['value'=> $parent_id])->label(false); ?>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

    <?php ActiveForm::end(); ?>

</div>
