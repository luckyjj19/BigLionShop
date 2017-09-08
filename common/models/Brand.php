<?php
/**
 * @Author  Bing Dev Team
 * @License http://opensource.org/licenses/MIT	MIT License
 * @Link    http://bingphp.com    <itbing@sina.cn>
 * @Since   Version 1.0.0
 * @Date:   2017/9/6
 * @Time:   15:43
 */

namespace common\models;


use yii\db\ActiveRecord;

class Brand extends ActiveRecord
{

    public function rules()
    {
        return [
            [['brand_name','site_url'],'required'],
            ['brand_name','string','length'=>[1,4]],
            ['brand_desc','string','length'=>[0,255]],
            ['site_url','url', 'defaultScheme' => 'http'],
            ['is_show','integer'],
            ['sort','integer'],
            ['sort','default','value'=>50]
        ];

    }

    public function attributeLabels()
    {
        return [
            'brand_name'    =>'品牌名称',
            'brand_logo'    =>'品牌Logo',
            'brand_desc'    =>'简短描述',
            'is_show'       =>'是否展示',
            'site_url'      =>'品牌官网',
            'sort'          =>'排序',
        ];

//        return parent::attributeLabels(); // TODO: Change the autogenerated stub
    }

    public function loadDefaultValues($skipIfSet = true)
    {
        $this->is_show = 1;
        $this->sort = 50;
        return $this;
    }
}