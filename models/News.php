<?php

namespace app\models;

use http\Url;
use PHPHtmlParser\Dom;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string|null $description
 * @property string|null $date
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'description' => 'Description',
            'date' => 'Date',
        ];
    }

    public static function getNews(){
        return self::find()
            ->select(['id','description', 'date'])
            ->orderBy(['date' => SORT_ASC])
            ->all();
    }

    public function getText(){
        $parserLink = "https://random-word-api.herokuapp.com//word?number=10";
        $dom = new Dom();
        $dom->loadFromUrl($parserLink);
        $array = json_decode($dom->text);
//        foreach ($array as $text){
//            var_dump($text);
//        }
        return $array;
    }
}
