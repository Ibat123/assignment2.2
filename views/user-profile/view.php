<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\UserProfile */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'User Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-profile-view">

    <h1><?= Html::encode($this->title) ?></h1>
<?php 
    echo '<img src="'.\Yii::$app->request->BaseUrl.'/'.$model->Profile_Picture.'" width="200px">';
?>
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'Full_Name',
            'Gender',
            'Date_of_Birth',
            'years_of_experience',
            'Industry',
            'Location',
            'About_Me',
            //'Profile_Picture',
            'Professioal_Title',
            'Career_Level',
            'Communication_Level',
            'Organizational_Level',
            'Job_Related_Level',
            'Address',
            'Phone_Number',
            'website',
            'E_Mail',
        ],
    ]) ?>

</div>
