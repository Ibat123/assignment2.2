<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UserProfileSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-profile-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Full_Name') ?>

    <?= $form->field($model, 'Gender') ?>

    <?= $form->field($model, 'Date_of_Birth') ?>

    <?= $form->field($model, 'years_of_experience') ?>

    <?php // echo $form->field($model, 'Industry') ?>

    <?php // echo $form->field($model, 'Location') ?>

    <?php // echo $form->field($model, 'About_Me') ?>

    <?php // echo $form->field($model, 'Profile_Picture') ?>

    <?php // echo $form->field($model, 'Professioal_Title') ?>

    <?php // echo $form->field($model, 'Career_Level') ?>

    <?php // echo $form->field($model, 'Communication_Level') ?>

    <?php // echo $form->field($model, 'Organizational_Level') ?>

    <?php // echo $form->field($model, 'Job_Related_Level') ?>

    <?php // echo $form->field($model, 'Address') ?>

    <?php // echo $form->field($model, 'Phone_Number') ?>

    <?php // echo $form->field($model, 'website') ?>

    <?php // echo $form->field($model, 'E_Mail') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
