<?php

class SiteAdSystem extends CActiveRecord {

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return '{{site_ad_system}}';
    }

    public function rules() {
        return array(
        );
    }

    public function getList() {
        $cache_name = md5('model_SiteAdSystem_getList');
        $list = Yii::app()->memcache->get($cache_name);
        if (!$list) {
            $list = array();
            $data = $this->findAll(array('order' => 'sort asc'));
            foreach ($data as $one) {
                $list[$one->id] = $one->name;
            }
            Yii::app()->memcache->set($cache_name, $list, 300);
        }
        return $list;
    }

}