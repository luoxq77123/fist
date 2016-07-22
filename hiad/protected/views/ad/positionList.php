<div class="taskbar">
  <div class="line line2 line21 titBar">
    <form onsubmit="return user_search();" method="get">
    <div class="mgl38 fl">状态：
      <?php echo CHtml::dropDownList('search_status', @$_GET['status'], array('' => '-请选择-', 1 => '启用', -1 => '禁用'), array('class' => 'sle', 'id' => 'search_status')); ?>
    </div>
    <div class="mgl17 fl">类型：
      <?php echo CHtml::dropDownList('search_type', @$_GET['type'], $adShows, array('class' => 'sle', 'id' => 'search_type')); ?>
    </div>
    <div class="mgl17 fl">尺寸：
      <?php echo CHtml::dropDownList('search_size', @$_GET['size'], $usedSize, array('class' => 'sle', 'id' => 'search_size')); ?>
    </div>
    <div class="search search1 mgl17">
      <?php echo CHtml::textField('search_name', @$_GET['name'], array('class' => 'txt1 txt3 fl', 'id' => 'search_name')); ?>
      <a href="javascript:void(0);" onclick="user_search()" class="fr"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/btn5.gif"></a> </div>
    </form>
  </div>
  <div class="line5 line7">
    广告位选择
  </div>
</div>
<div class="w4Table w5Table"> 
  <table border="0" width="100%" cellpadding="0" cellspacing="0">
    <tbody>
      <tr>
        <th width="65">&nbsp;</th>
        <th width="122">广告名称</th>
        <th width="120">状态</th>
        <th width="120">类型</th>
        <th width="135">站点</th>
        <th width="115">尺寸</th>
        <th width="190">操作</th>
        <th width="50%">&nbsp;</th>
      </tr>
      <?php foreach($spList as $key=>$one):?>
        <tr <?php echo ($key%2==0)? 'class="trBg"' : ''; ?>>
        <td width="65"><input type="radio" name="ids" class="checkbox_ids" value="<?php echo $one->Position->id;?>" /></td>
        <td><?php echo $one->Position->name;?></td>
        <td><?php echo $one->Position->status == 1 ? '启用' : '禁用';?></td>
        <td><?php echo $adShows[$one->Position->ad_show_id];?></td>
        <td><?php echo isset($sites[$one->site_id]) ? $sites[$one->site_id] : '-'; ?></td>
        <td><?php echo $one->Position->position_size;?></td>
        <td>
            <div class="option">
            <a href="<?php echo Yii::app()->createUrl('sitePosition/edit', array('id' => $one->Position->id));?>" class="edit_position" title="修改广告位">修改</a><a href="">广告</a><a href="">统计</a>
            </div>
        </td>
        <td>&nbsp;</td>
        </tr>
      <?php endforeach;?>
    </tbody>
  </table>
  <div class="pl_30 adbox">
    <?php
    $this->widget('HmLinkPager',array(
        'header'=>'',
        'firstPageLabel' => '首页',
        'lastPageLabel' => '末页',
        'prevPageLabel' => '<上一页',
        'nextPageLabel' => '下一页>',
        'refreshArea' => 'ggw_box',
        'pages' => $pages,
        'selectedPageCssClass' => 'current',
        'maxButtonCount'=>6,
        'htmlOptions' => array('class' => 'fl pagination', 'id' => 'pagination')
        )
    );
    ?>
    <!--end page-->
    <!--page info-->
    <?php $this->widget('PageResize', array('pages' => $pages, 'refreshArea' => 'ggw_box')); ?>  
    <!--end page info-->
  </div>
</div>