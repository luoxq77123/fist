<?php

class MaterialAtext extends CActiveRecord {

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return '{{material_atext}}';
    }

    public function rules() {
        return array(
            array('text,click_link', 'required', 'message' => '{attribute}不能为空', 'on' => 'add,edit'),
            array('size, color,style,float_color,float_style,click_link,monitor,monitor_link,target_window', 'safe', 'on' => 'add,edit')
        );
    }

    public function attributeLabels() {
        return array(
            'text' => '文字内容:',
            'size' => '文字大小:',
            'color' => '默认文字颜色:',
            'style' => '默认文字样式:',
            'float_color' => '悬停文字颜色:',
            'float_style' => '悬停文字样式:',
            'click_link' => '点击链接:',
            'monitor' => '设置第三方展现监控:',
            'monitor_link' => '监控链接:'
        );
    }

    public function getWindowOption(){
        return array(1 => '新窗口', 2 => '原窗口');
    }

}