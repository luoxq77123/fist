<?php

class AcRegion extends CActiveRecord {

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return '{{ac_region}}';
    }

    public function rules() {
        return array(
        );
    }

    public function deleteByAdId($adId){
        return $this->deleteAll('ad_id=:ad_id', array(':ad_id'=>$adId));
    }

}