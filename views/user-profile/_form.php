<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UserProfile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-profile-form">

    <?php $form = ActiveForm::begin(); ?>
	
	<legend><h2><strong>BASIC INFO</strong></h2></legend>

    <?= $form->field($model, 'Full_Name')->textInput(['maxlength' => true]) ?>

   <?php
    $a= ['Male' => 'Male','Female' => 'Female',];
    echo $form->field($model, 'Gender',[
        'horizontalCssClasses' => [
            'wrapper' => 'col-sm-2',
        ]
    ])->dropDownList($a,['prompt'=>'Select Option']);
?>
	
	
	<?= $form->field($model, 'Date_of_Birth')->widget(\yii\jui\DatePicker::classname(), [
    'dateFormat' => 'yyyy-MM-dd', 'options' => ['class' => 'form-control']
]) ?>



    <?= $form->field($model, 'years_of_experience')->radioList(['1-4 Years'=>'1-4 Years', '5-10 Years'=>'5-10 Years','Over 10 Years'=>'Over 10 Years']) ?>


    <?php
    $a= ['Medical' => 'Medical','Construction' => 'Construction', 'Education' => 'Education', 'Information Technology' => 'Information Technology'];
    echo $form->field($model, 'Industry',[
        'horizontalCssClasses' => [
            'wrapper' => 'col-sm-2',
        ]
    ])->dropDownList($a,['prompt'=>'Select Option']);
?>

    <?php
    $a= ['St. Thomas' => 'St. Thomas', 'Kingston' => 'Kingston', 'St. Andrew' => 'St. Andrew', 'St. Catherine' => 'St. Catherine',
        'Clarendon' => 'Clarendon', 'Manchester' => 'Manchester', 'St. Elizabeth' => 'St. Elizabeth', 'Westmoreland' => 'Westmoreland',
        'Hanover' => 'Hanover', 'St. James' => 'St.James', 'Trelawny' => 'Trelawny', 'St. Ann' => 'St.Ann', 'St. Mary' => 'St.Mary',
        'Portland' => 'Portland'];
    echo $form->field($model, 'Location',[
        'horizontalCssClasses' => [
            'wrapper' => 'col-sm-2',
        ]
    ])->dropDownList($a,['prompt'=>'Select Option']);
?>

    <?= $form->field($model, 'About_Me')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'file')->fileInput() ?>
<?php 
if ($model->Profile_Picture){
    echo '<div class="im" style="padding-left:12em;">';
    echo '<img src="'.\Yii::$app->request->BaseUrl.'/'.$model->Profile_Picture.'" width="90px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
    echo Html::a('Delete Profile Picture', ['erase', 'id'=>$model->id], ['class'=>'btn btn-danger']).'</br>';
    echo '</div>';
}

?>

<legend><h2><strong>SKILLS INFO </strong></h2></legend>

    <?php
    $a= ['DR'=>'DR','MP'=>'MP','MD'=>'MD',];
    echo $form->field($model, 'Professioal_Title',[
        'horizontalCssClasses' => [
            'wrapper' => 'col-sm-2',
        ]
    ])->dropDownList($a,['prompt'=>'Select Option']);
?>

   <?php
    $a= ['Entry Level/Recent Graduate' => 'Entry Level/Recent Graduate', 'Professional ' => 'Professional ', 
    ' Professional /Mid-Level Management' => ' Proffesional /Mid-Level Management', 
    'Executive/Senior Management' => 'Executive/Senior Management'];
    echo $form->field($model, 'Career_Level',[
        'horizontalCssClasses' => [
            'wrapper' => 'col-sm-3',
        ]
    ])->dropDownList($a,['prompt'=>'Select Option']);
?>


   <?php
    $a= ['1-10 %' => '1-10 %','11-20 %' => '11-20 %', '21-30 %' => '21-30 %', '31-40 %' => '31-40 %', '41-50 %'=> '41-50 %',
     '51-60 %'=> '51-60 %', '61-70 %'=> '61-70 %', '71-80 %'=> '71-80 %', '81-90 %'=> '81-90 %', '91-100 %'=> '91-100 %'];
    echo $form->field($model, 'Communication_Level',[
        'horizontalCssClasses' => [
            'wrapper' => 'col-sm-2',
        ]
    ])->dropDownList($a,['prompt'=>'Select Option']);
?>

    <?php
    $a= ['1-10 %' => '1-10 %','11-20 %' => '11-20 %', '21-30 %' => '21-30 %', '31-40 %' => '31-40 %', '41-50 %'=> '41-50 %',
     '51-60 %'=> '51-60 %', '61-70 %'=> '61-70 %', '71-80 %'=> '71-80 %', '81-90 %'=> '81-90 %', '91-100 %'=> '91-100 %'];
    echo $form->field($model, 'Organizational_Level',[
        'horizontalCssClasses' => [
            'wrapper' => 'col-sm-2',
        ]
    ])->dropDownList($a,['prompt'=>'Select Option']);
?>
<?php
    $a= ['1-10 %' => '1-10 %','11-20 %' => '11-20 %', '21-30 %' => '21-30 %', '31-40 %' => '31-40 %', '41-50 %'=> '41-50 %',
     '51-60 %'=> '51-60 %', '61-70 %'=> '61-70 %', '71-80 %'=> '71-80 %', '81-90 %'=> '81-90 %', '91-100 %'=> '91-100 %'];
    echo $form->field($model, 'Job_Related_Level',[
        'horizontalCssClasses' => [
            'wrapper' => 'col-sm-2',
        ]
    ])->dropDownList($a,['prompt'=>'Select Option']);
?>
    
<legend><h2><strong>CONTACT INFO</strong></h2></legend>
    

    
    <?= $form->field($model, 'Address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Phone_Number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'E_Mail')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
