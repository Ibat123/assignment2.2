<?php

namespace app\model;

use Yii;

/**
 * This is the model class for table "userprofile".
 *
 * @property integer $id
 * @property string $Full_Name
 * @property string $Gender
 * @property string $Date_of_Birth
 * @property string $years_of_experience
 * @property string $Industry
 * @property string $Location
 * @property string $About_Me
 * @property string $Profile_Picture
 * @property string $Professioal_Title
 * @property string $Career_Level
 * @property string $Communication_Level
 * @property string $Organizational_Level
 * @property string $Job_Related_Level
 * @property string $Address
 * @property string $Phone_Number
 * @property string $website
 * @property string $E_Mail
 */
class Userprofile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'userprofile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Full_Name', 'Gender', 'Address', 'Phone_Number', 'E_Mail'], 'required'],
            [['Date_of_Birth'], 'safe'],
            [['Full_Name', 'years_of_experience', 'Location', 'Professioal_Title', 'Career_Level', 'Organizational_Level', 'Job_Related_Level', 'Phone_Number'], 'string', 'max' => 20],
            [['Gender'], 'string', 'max' => 6],
            [['Industry'], 'string', 'max' => 50],
            [['About_Me'], 'string', 'max' => 200],
            [['Profile_Picture'], 'string', 'max' => 255],
            [['Communication_Level'], 'string', 'max' => 29],
            [['Address'], 'string', 'max' => 250],
            [['website'], 'string', 'max' => 40],
            [['E_Mail'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Full_Name' => 'Full  Name',
            'Gender' => 'Gender',
            'Date_of_Birth' => 'Date Of  Birth',
            'years_of_experience' => 'Years Of Experience',
            'Industry' => 'Industry',
            'Location' => 'Location',
            'About_Me' => 'About  Me',
            'Profile_Picture' => 'Profile  Picture',
            'Professioal_Title' => 'Professioal  Title',
            'Career_Level' => 'Career  Level',
            'Communication_Level' => 'Communication  Level',
            'Organizational_Level' => 'Organizational  Level',
            'Job_Related_Level' => 'Job  Related  Level',
            'Address' => 'Address',
            'Phone_Number' => 'Phone  Number',
            'website' => 'Website',
            'E_Mail' => 'E  Mail',
        ];
    }
}
