<?php
namespace app\modules\mymodule\models;

use Yii;
use yii\data\BaseDataProvider;
use yii\easyii2\components\ActiveQuery;
use yii\easyii2\components\FastModel;
use yii\easyii2\components\FastModelInterface;
use yii\easyii2\helpers\Image;

/**
 * Class Book
 * @package app\modules\books\models
 *
 * @property int $id [int(11)]
 * @property bool $status [tinyint(1)]
 * @property int $order_num [int(11)]
 */
class MyModel extends FastModel implements FastModelInterface
{
    const PRIMARY_MODEL = true;

    const CACHE_KEY = 'mymodel';

    const ORDER_NUM = false;

    public static function tableName()
    {
        return 'my_model';
    }

    public function rules()
    {
        return [
            ['id', 'number', 'integerOnly' => true],
            ['name', 'string'],
            ['status', 'default', 'value' => self::STATUS_OFF],
            ['order_num', 'integer'],
            ['name', 'required'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'status' => Yii::t('app', 'Status'),
            'order_num' => Yii::t('app', 'Sort Index'),
        ];
    }

    public static function getNameModel()
    {
        // TODO: Implement getNameModel() method.
        return Yii::t('app', 'My model');
    }

    public static function getSlugModel()
    {
        // TODO: Implement getNameModel() method.
        return 'mymodel';
    }


    public static function queryFilter(ActiveQuery &$query, $get)
    {
        if(!empty($get['text'])){
            $query->andFilterWhere(['LIKE', 'name', $get['text']]);
        }
    }

    public static function querySort(BaseDataProvider &$provider)
    {
        $provider->setSort([
            'defaultOrder' => [
                'id' => SORT_DESC
            ],
            'attributes' => [
                'id',
                'name',
                'status',
            ]
        ]);
    }

    public function enablePhotoManager()
    {
        return false;
    }

    /**
     * @param null|integer $width
     * @param null|integer $height
     * @param bool $crop
     * @return string
     */
    public function getPreview($width = null, $height = null, $crop = true){
        $image = empty($this->preview)? \Yii::$app->params['noimage'] : $this->preview;
        return Image::thumb($image, $width, $height, $crop);
    }
}
