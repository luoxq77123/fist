<?php

class ThridPositionList extends CWidget {

    public function run() {
        $user = Yii::app()->session['user'];
        
        $criteria = new CDbCriteria();
        $criteria->order = 'sort asc,createtime desc';
        $criteria->select = 'id,name,ad_show_id,position_size,status';
        $criteria->addColumnCondition(array('com_id' =>  $user['com_id']));
        
        $criteria->addColumnCondition(array('ad_type_id' => 4));
        // 附加搜索条件
        if(isset($_GET['siteGroupId']) && $_GET['siteGroupId'] != ''){
            $sites = Site::model()->findAllByAttributes(array('site_group_id' => $_GET['siteGroupId']), 'status = 1');
            $site_ids = $sites ? CHtml::listData($sites, 'id', 'id') : array();
            $criteria->addInCondition('site_id', $site_ids);
        }else if (isset($_GET['siteId']) && $_GET['siteId'] != '') {
            $criteria->addColumnCondition(array('site_id' =>  $_GET['siteId']));
        }
        if (isset($_GET['status']) && $_GET['status'] != '') {
            $criteria->addColumnCondition(array('status' =>  $_GET['status']));
        }
        if (isset($_GET['type']) && $_GET['type'] != 0) {
            $criteria->addColumnCondition(array('ad_show_id' =>  $_GET['type']));
        }
        if (isset($_GET['size']) && $_GET['size'] != '') {
            $criteria->addColumnCondition(array('position_size' =>  $_GET['size']));
        }
        if (isset($_GET['name']) && $_GET['name'] != '') {
            $criteria->addSearchCondition('name', urldecode($_GET['name']));
        }
        
        // 分页
        $count = Position::model()->count($criteria);
        $pageSize = (isset($_GET['pagesize']) && $_GET['pagesize']) ? $_GET['pagesize'] : 10;
        $pager = new CPagination($count);
        $pager->route = 'videoPosition/list';
        $pager->pageSize = $pageSize;
        $pager->applyLimit($criteria);

        $spList = Position::model()->findAll($criteria);
        
        // 搜索下拉
        //$site = Site::model()->getSitesByComId(Yii::app()->session['user']['com_id']);
        $adShows = AdShow::model()->getPositionAdShows(4);
        $usedSize = Position::model()->getUsedSize(Yii::app()->session['user']['com_id']);
        $set = array(
            'spList' => $spList,
            'adShows' => $adShows,
            'pages' => $pager,
            //'sites' => $site,
            'usedSize' => $usedSize
        );

        $this->render('thridPositionList', $set);
    }
}