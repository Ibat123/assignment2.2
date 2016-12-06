<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserProfileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Profiles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-profile-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User Profile', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'Full_Name',
            'Gender',
            'Date_of_Birth',
            'years_of_experience',
            // 'Industry',
            // 'Location',
            // 'About_Me',
            // 'Profile_Picture',
            // 'Professioal_Title',
            // 'Career_Level',
            // 'Communication_Level',
            // 'Organizational_Level',
            // 'Job_Related_Level',
            // 'Address',
            // 'Phone_Number',
            // 'website',
            // 'E_Mail',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
