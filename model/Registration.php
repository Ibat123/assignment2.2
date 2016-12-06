<?php

namespace app\model;

use Yii;

/**
 * This is the model class for table "registration".
 *
 * @property integer $Id
 * @property string $Full_Name
 * @property string $Gender
 * @property string $Date_of_Birth
 * @property string $Years_of_Experience
 * @property string $Industry
 * @property string $Location
 * @property string $About_Me
 * @property string $Profile_Picture
 * @property string $Professional_Title
 * @property string $Career_Level
 * @property string $Communication_Level
 * @property string $Orgnizational_Level
 * @property string $Job_Related_Level
 * @property string $Address
 * @property string $Phone_Number
 * @property string $Email
 */
class Registration extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'registration';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id', 'Full_Name', 'Gender', 'Date_of_Birth', 'Years_of_Experience', 'Industry', 'Location', 'About_Me', 'Profile_Picture', 'Professional_Title', 'Career_Level', 'Communication_Level', 'Orgnizational_Level', 'Job_Related_Level', 'Address', 'Phone_Number', 'Email'], 'required'],
            [['Id'], 'integer'],
            [['Date_of_Birth'], 'safe'],
            [['Full_Name', 'Industry', 'Location', 'Email'], 'string', 'max' => 50],
            [['Gender'], 'string', 'max' => 10],
            [['Years_of_Experience'], 'string', 'max' => 20],
            [['About_Me'], 'string', 'max' => 250],
            [['Profile_Picture', 'Professional_Title', 'Career_Level', 'Communication_Level', 'Orgnizational_Level', 'Job_Related_Level', 'Address'], 'string', 'max' => 200],
            [['Phone_Number'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Full_Name' => 'Full  Name',
            'Gender' => 'Gender',
            'Date_of_Birth' => 'Date Of  Birth',
            'Years_of_Experience' => 'Years Of  Experience',
            'Industry' => 'Industry',
            'Location' => 'Location',
            'About_Me' => 'About  Me',
            'Profile_Picture' => 'Profile  Picture',
            'Professional_Title' => 'Professional  Title',
            'Career_Level' => 'Career  Level',
            'Communication_Level' => 'Communication  Level',
            'Orgnizational_Level' => 'Orgnizational  Level',
            'Job_Related_Level' => 'Job  Related  Level',
            'Address' => 'Address',
            'Phone_Number' => 'Phone  Number',
            'Email' => 'Email',
        ];
    }
}
