<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/excolor/jquery.modcoder.excolor.js" type="text/javascript"></script>
<!--uploadify-->
<link href="<?php echo Yii::app()->request->baseUrl; ?>/js/uploadify/uploadify.css" rel="stylesheet" type="text/css" />
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/uploadify/swfobject.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/uploadify/jquery.uploadify.v2.1.4.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // 以下是uploadify v2.14版本
        jQuery("#pic_upload").uploadify({ //uploadify对应input的id
            uploader: '<?php echo Yii::app()->request->baseUrl; ?>/js/uploadify/uploadify.swf',
            script: "<?php echo Yii::app()->createUrl('upload/uploadPic');?>", //处理文件上传的路径
            cancelImg: "<?php echo Yii::app()->request->baseUrl; ?>/js/uploadify/cancel.png",
            queueID: "picQueue", //div的id，用于显示进度条
            fileSizeLimit : '2048KB',
            queueSizeLimit: 1,
            fileDesc: "*.jpg;*.jpeg;*.gif;*.png;", //设置文件格式
            fileExt: "*.jpg;*.jpeg;*.gif;*.png;", //设置文件后缀
            auto: true, //是否自动上传
            buttonText: "上传图片",
            buttonImg: "<?php echo Yii::app()->request->baseUrl; ?>/js/uploadify/upload_btn.png", //选择文件的图片
            simUploadLimit: 1, //一次上传的文件的个数
            height: "20", //按钮高度
            width: "60", //按钮宽度
            onComplete : function(event, queueID, fileObj, response, data) {
                //此处用到jquery的parseJSON功能,jquery1.4.2以上才有这个方法
                var data=$.parseJSON(response);
                $('#pic_url').val(data.value.name);
                $('#pic_parameter').show();
                $('#pic_width').val(data.value.width);
                $('#pic_height').val(data.value.height);
            }
        });
        
        jQuery("#flash_upload").uploadify({ //uploadify对应input的id
            uploader: '<?php echo Yii::app()->request->baseUrl; ?>/js/uploadify/uploadify.swf',
            script: "<?php echo Yii::app()->createUrl('upload/uploadPic');?>", //处理文件上传的路径
            cancelImg: "<?php echo Yii::app()->request->baseUrl; ?>/js/uploadify/cancel.png",
            queueID: "flashQueue", //div的id，用于显示进度条
            fileSizeLimit : '5120KB',
            queueSizeLimit: 1,
            fileDesc: "*.swf;", //设置文件格式
            fileExt: "*.swf;", //设置文件后缀
            auto: true, //是否自动上传
            buttonText: "上传flash",
            buttonImg: "<?php echo Yii::app()->request->baseUrl; ?>/js/uploadify/upload_btn.png", //选择文件的图片
            simUploadLimit: 1, //一次上传的文件的个数
            height: "20", //按钮高度
            width: "60", //按钮宽度
            onComplete : function(event, queueID, fileObj, response, data) {
                //此处用到jquery的parseJSON功能,jquery1.4.2以上才有这个方法
                var data=$.parseJSON(response);
                $('#flash_url').val(data.value.name);
                $('#flash_parameter').show();
                $('#flash_width').val(data.value.width);
                $('#flash_height').val(data.value.height);
            }
        });
        
        jQuery("#flashpic_upload").uploadify({ //uploadify对应input的id
            uploader: '<?php echo Yii::app()->request->baseUrl; ?>/js/uploadify/uploadify.swf',
            script: "<?php echo Yii::app()->createUrl('upload/uploadPic');?>", //处理文件上传的路径
            cancelImg: "<?php echo Yii::app()->request->baseUrl; ?>/js/uploadify/cancel.png",
            queueID: "flashpicQueue", //div的id，用于显示进度条
            queueSizeLimit: 1,
            fileDesc: "*.jpg;*.jpeg;*.gif;*.png;", //设置文件格式
            fileExt: "*.jpg;*.jpeg;*.gif;*.png;", //设置文件后缀
            auto: true, //是否自动上传
            buttonText: "上传图片",
            buttonImg: "<?php echo Yii::app()->request->baseUrl; ?>/js/uploadify/upload_btn.png", //选择文件的图片
            simUploadLimit: 1, //一次上传的文件的个数
            height: "20", //按钮高度
            width: "60", //按钮宽度
            onComplete : function(event, queueID, fileObj, response, data) {
                //此处用到jquery的parseJSON功能,jquery1.4.2以上才有这个方法
                var data=$.parseJSON(response);
                $('#flashpic_url').val(data.value.name);
                $('#flashpic_parameter').show();
                $('#flashpic_width').val(data.value.width);
                $('#flashpic_height').val(data.value.height);
            }
        });
        
        jQuery("#media_upload").uploadify({ //uploadify对应input的id
            uploader: '<?php echo Yii::app()->request->baseUrl; ?>/js/uploadify/uploadify.swf',
            script: "<?php echo Yii::app()->createUrl('upload/uploadPic');?>", //处理文件上传的路径
            cancelImg: "<?php echo Yii::app()->request->baseUrl; ?>/js/uploadify/cancel.png",
            queueID: "mediaQueue", //div的id，用于显示进度条
            queueSizeLimit: 1,
            fileDesc: "*.jpg;*.jpeg;*.gif;*.png;*.swf;", //设置文件格式
            fileExt: "*.jpg;*.jpeg;*.gif;*.png;*.swf;", //设置文件后缀
            auto: true, //是否自动上传
            buttonText: "上传",
            buttonImg: "<?php echo Yii::app()->request->baseUrl; ?>/js/uploadify/upload_btn.png", //选择文件的图片
            simUploadLimit: 1, //一次上传的文件的个数
            height: "20", //按钮高度
            width: "60", //按钮宽度
            onComplete : function(event, queueID, fileObj, response, data) {
                //此处用到jquery的parseJSON功能,jquery1.4.2以上才有这个方法
                var data=$.parseJSON(response);
                var path = data.value.name;
                var ext = path.split(".");
                var len = ext.length;
                var extName = ext[len-1];
                if ('swf' == extName) {
                    $('#show_upload_media').html('<embed src="<?php echo Yii::app()->request->baseUrl; ?>'+path+'" type="application/x-shockwave-flash" fullscreen="yes" />');
                } else {
                    $('#show_upload_media').html('<img src="<?php echo Yii::app()->request->baseUrl; ?>'+path+'" />');
                }
                $('#media_url').val("<?php echo Yii::app()->request->hostInfo;?>"+data.value.name);
                hideCopyOk();
                $('#btn_get_medialink').show();
                $('#show_upload_media').show();
            }
        });
        
        jQuery("#video_upload").uploadify({ //uploadify对应input的id
            uploader: '<?php echo Yii::app()->request->baseUrl; ?>/js/uploadify/uploadify.swf',
            script: "<?php echo Yii::app()->createUrl('upload/uploadPic');?>", //处理文件上传的路径
            cancelImg: "<?php echo Yii::app()->request->baseUrl; ?>/js/uploadify/cancel.png",
            queueID: "videoQueue", //div的id，用于显示进度条
            queueSizeLimit: 1,
            fileDesc: "*.flv;*.mp4", //设置文件格式
            fileExt: "*.flv;*.mp4", //设置文件后缀
            auto: true, //是否自动上传
            buttonText: "上传视频",
            buttonImg: "<?php echo Yii::app()->request->baseUrl; ?>/js/uploadify/upload_btn.png", //选择文件的图片
            simUploadLimit: 1, //一次上传的文件的个数
            height: "20", //按钮高度
            width: "60", //按钮宽度
            onComplete : function(event, queueID, fileObj, response, data) {
                //此处用到jquery的parseJSON功能,jquery1.4.2以上才有这个方法
                var data=$.parseJSON(response);
                $('#video_url').val(data.value.name);
                $('#video_parameter').show();
                $('#video_width').val(data.value.width);
                $('#video_height').val(data.value.height);
            }
        });

        jQuery("#videopic_upload").uploadify({ //uploadify对应input的id
            uploader: '<?php echo Yii::app()->request->baseUrl; ?>/js/uploadify/uploadify.swf',
            script: "<?php echo Yii::app()->createUrl('upload/uploadPic');?>", //处理文件上传的路径
            cancelImg: "<?php echo Yii::app()->request->baseUrl; ?>/js/uploadify/cancel.png",
            queueID: "videoQueue", //div的id，用于显示进度条
            queueSizeLimit: 1,
            fileDesc: "*.jpg;*.jpeg;*.gif;*.png;", //设置文件格式
            fileExt: "*.jpg;*.jpeg;*.gif;*.png;", //设置文件后缀
            auto: true, //是否自动上传
            buttonText: "videopicQueue",
            buttonImg: "<?php echo Yii::app()->request->baseUrl; ?>/js/uploadify/upload_btn.png", //选择文件的图片
            simUploadLimit: 1, //一次上传的文件的个数
            height: "20", //按钮高度
            width: "60", //按钮宽度
            onComplete : function(event, queueID, fileObj, response, data) {
                //此处用到jquery的parseJSON功能,jquery1.4.2以上才有这个方法
                var data=$.parseJSON(response);
                $('#videopic_url').val(data.value.name);
                $('#videopic_parameter').show();
                $('#videopic_width').val(data.value.width);
                $('#videopic_height').val(data.value.height);
            }
        });
    })

</script>
<!--面包屑-->
<div class="tpboder pl_35" id="pt">
  <div class="z"><a href="#">物料库</a> &gt; <a href="#">新建站点物料</a></div>
</div>
<!--end 面包屑-->

<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'material-form',
    'enableClientValidation' => true,
    'action' => array('materialVideo/add'),
    'clientOptions' => array(
        'validateOnSubmit' => true,
    ),
    'htmlOptions' => array()
        ));
?>
<table class="webadd new_web" id="material_table" style="width:800px; margin-left:0px!important; margin-left:40px;"  border="0" cellpadding="10" cellspacing="10">
  <tr>
    <th style="width:180px;"><span class="notion">*</span><?php echo $form->label($material, 'name'); ?></th>
    <td><?php echo $form->textField($material, 'name', array('class' => 'txt1')); ?></td>
  </tr>
  <tr>
    <th><?php echo $form->label($material, 'material_type_id'); ?></th>
    <td>
      <?php if(!empty($materialType)):?>
        <?php foreach($materialType as $key=>$one):?>
            <input type="radio" name="Material[material_type_id]" value="<?php echo $one['id'];?>" id="<?php echo $one['code'];?>" <?php if($one['id']==2)echo 'checked="checked"';?> />
            <label for="<?php echo $one['code'];?>"> <?php echo $one['name'];?> </label>
        <?php endforeach;?>
      <?php endif;?>
      <a style="margin-top:0px;" class="toolTips_tag" onmouseover="showMyToolTips(this, '广告物料类型有哪些？', '文字：纯文字的广告物料。<br />图片：可以使用 .gif、.jpg、.png文件。<br />Flash：可以使用 .swf 文件。<br/>视频：可以使用.flv,.mp4。')" onmouseout="hideMyToolTips()" href="javascript:void(0);"><img style="margin-top:0px!important;margin-top:2px;" src="<?php echo Yii::app()->request->baseUrl; ?>/images/tit4.gif" /></a></td>
  </tr>
  <!--文字-->
  <tr valign="top" class="ad_type_more text_more hiden">
    <th><span class="notion">*</span><?php echo $form->label($materialText, 'text'); ?></th>
    <td><?php echo $form->textArea($materialText, 'text', array('cols' => '70', 'rows' => '5', 'class' => 'txt1', 'style' => 'height:100px;width:350px;')); ?></td>
  </tr>
  <tr valign="top" class="ad_type_more text_more hiden">
    <th><?php echo $form->label($materialText, 'size'); ?></th>
    <td><?php echo $form->textField($materialText, 'size', array('class' => 'txt1 pssinput', 'maxlength' => '3')); ?> px </td>
  </tr>
  <tr valign="top" class="ad_type_more text_more hiden">
    <th><?php echo $form->label($materialText, 'color'); ?></th>
    <td><?php echo $form->textField($materialText, 'color', array('class' => 'txt1', 'style' => 'width:55px;', 'maxlength' => '7')); ?></td>
  </tr>
  <tr valign="top" class="ad_type_more text_more hiden">
    <th><?php echo $form->label($materialText, 'style'); ?></th>
    <td><input type="checkbox" name="MaterialVtext[style_1]" value="1" checked="checked" />
      &nbsp;下划线&nbsp;
      <input type="checkbox" name="MaterialVtext[style_2]" value="2" />
      &nbsp;加粗&nbsp;
      <input type="checkbox" name="MaterialVtext[style_3]" value="3" />
      &nbsp;斜体&nbsp; </td>
  </tr>
  <tr valign="top" class="ad_type_more text_more hiden">
    <th><?php echo $form->label($materialText, 'float_color'); ?></th>
    <td><?php echo $form->textField($materialText, 'float_color', array('class' => 'txt1', 'style' => 'width:55px;', 'maxlength' => '7')); ?></td>
  </tr>
  <tr valign="top" class="ad_type_more text_more hiden">
    <th><?php echo $form->label($materialText, 'float_style'); ?></th>
    <td><input type="checkbox" name="MaterialVtext[float_style_1]" value="1" checked="checked" />
      &nbsp;下划线&nbsp;
      <input type="checkbox" name="MaterialVtext[float_style_2]" value="2" />
      &nbsp;加粗&nbsp;
      <input type="checkbox" name="MaterialVtext[float_style_3]" value="3" />
      &nbsp;斜体&nbsp; </td>
  </tr>
  <tr valign="top" class="ad_type_more text_more hiden">
    <th><span class="notion">*</span><?php echo $form->label($materialText, 'click_link'); ?></th>
    <td><?php echo $form->textField($materialText, 'click_link', array('class' => 'txt1', 'style' => 'width:255px;')); ?><a style="margin-top:0px;" class="toolTips_tag" onmouseover="showMyToolTips(this, '什么是点击链接？', '点击广告后跳转进入的目标页面链接。')" onmouseout="hideMyToolTips()" href="javascript:void(0);"><img style="margin-top:0px!important;margin-top:2px;" src="<?php echo Yii::app()->request->baseUrl; ?>/images/tit4.gif" /></a></td>
  </tr>
  <tr valign="top" class="ad_type_more text_more hiden">
    <th><?php echo $form->label($materialText, 'monitor'); ?></th>
    <td align="left">&nbsp;
      <input type="checkbox" name="MaterialVtext[monitor]" value="1"  onclick="javascript:monitor($(this),'Text');"/></td>
  </tr>
  <tr valign="top" class="ad_type_more text_more hiden text_monitor" id="Text_monitor_link">
    <th><span class="notion">*</span><?php echo $form->label($materialText, 'monitor_link'); ?></th>
    <td><?php echo $form->textField($materialText, 'monitor_link', array('class' => 'txt1', 'style' => 'width:255px;')); ?></td>
  </tr>
  <tr valign="top" class="ad_type_more text_more hiden">
    <th>目标窗口:</th>
    <td><?php echo $form->radioButtonList($materialText, 'target_window', MaterialVtext::model()->getWindowOption(), array('separator' => ' ')); ?></td>
  </tr>
  
  <!--end文字--> 
  <!--图片-->
  <tr valign="top" class="ad_type_more picture_more">
    <th><span class="notion">*</span><?php echo $form->label($materialPic, 'url'); ?></th>
    <td><!--上传图片--> 
      <span style="float:left;">
      <input type="text" id="pic_url" name="MaterialVpic[url]" readonly class="txt1" />
      </span> <span class="span_btn_upload">
      <input type="file" id="pic_upload" />
      </span> <span id="pic_parameter" style="display:none;margin-left:10px;"> 尺寸：宽
      <input type="text" id="pic_width" name="MaterialVpic[pic_x]" class="txt1 size_input" />
      &nbsp;*&nbsp;高
      <input type="text" id="pic_height" name="MaterialVpic[pic_y]"  class="txt1 size_input" />
      &nbsp;(px) </span>
      <div id="picQueue"></div></td>
  </tr>
  <tr valign="top" class="ad_type_more picture_more">
    <th><?php echo $form->label($materialPic, 'description'); ?></th>
    <td><?php echo $form->textField($materialPic, 'description', array('class' => 'txt1', 'style' => 'width:255px;')); ?><a style="margin-top:0px;" class="toolTips_tag" onmouseover="showMyToolTips(this, '什么是图片描述？', '当鼠标移至图片或者图片无法显示时，显示的文字说明。')" onmouseout="hideMyToolTips()" href="javascript:void(0);"><img style="margin-top:0px!important;margin-top:2px;" src="<?php echo Yii::app()->request->baseUrl; ?>/images/tit4.gif" /></a></td>
  </tr>
  <tr valign="top" class="ad_type_more picture_more">
    <th><span class="notion">*</span><?php echo $form->label($materialPic, 'click_link'); ?></th>
    <td><?php echo $form->textField($materialPic, 'click_link', array('class' => 'txt1', 'style' => 'width:255px;')); ?><a style="margin-top:0px;" class="toolTips_tag" onmouseover="showMyToolTips(this, '什么是点击链接？', '点击广告后跳转进入的目标页面链接。')" onmouseout="hideMyToolTips()" href="javascript:void(0);"><img style="margin-top:0px!important;margin-top:2px;" src="<?php echo Yii::app()->request->baseUrl; ?>/images/tit4.gif" /></a></td>
  </tr>
  <tr valign="top" class="ad_type_more picture_more">
    <th><?php echo $form->label($materialPic, 'monitor'); ?></th>
    <td align="left">&nbsp;
      <input type="checkbox" name="MaterialVpic[monitor]" value="1"  onclick="javascript:monitor($(this),'Picture');"/></td>
  </tr>
  <tr valign="top" class="ad_type_more picture_more picture_monitor" id="Picture_monitor_link" style="display:none;">
    <th><span class="notion">*</span><?php echo $form->label($materialText, 'monitor_link'); ?></th>
    <td><?php echo $form->textField($materialPic, 'monitor_link', array('class' => 'txt1', 'style' => 'width:255px;')); ?></td>
  </tr>
  <tr valign="top" class="ad_type_more picture_more">
    <th>目标窗口:</th>
    <td><?php echo $form->radioButtonList($materialPic, 'target_window', MaterialVpic::model()->getWindowOption(), array('separator' => ' ')); ?></td>
  </tr>
  
  <!--end 图片--> 
  <!--flash-->
  <tr valign="top" class="ad_type_more flash_more hiden">
    <th><span class="notion">*</span><?php echo $form->label($materialFlash, 'url'); ?></th>
    <td><!--上传flash--> 
      <span style="float:left;">
      <input type="text" id="flash_url" name="MaterialVflash[url]" readonly class="txt1" >
      </span> <span class="span_btn_upload">
      <input type="file" id="flash_upload" />
      </span> <span id="flash_parameter" style="display:none;margin-left:10px;"> 尺寸：宽
      <input type="text" id="flash_width" name="MaterialVflash[flash_x]" class="txt1 size_input" />
      &nbsp;*&nbsp;高
      <input type="text" id="flash_height" name="MaterialVflash[flash_y]"  class="txt1 size_input" />
      &nbsp;(px) </span>
      <div id="flashQueue"></div></td>
  </tr>
  <tr valign="top" class="ad_type_more flash_more hiden">
    <th>Flash背景:</th>
    <td><?php echo $form->radioButtonList($materialFlash, 'backdrop', MaterialVflash::model()->getFlashbgOption(), array('separator' => ' ')); ?></td>
  </tr>
  <tr valign="top" class="ad_type_more flash_more hiden">
    <th><?php echo $form->label($materialFlash, 'monitor_flash'); ?></th>
    <td align="left">&nbsp;
      <input type="checkbox" name="MaterialVflash[monitor_flash]" value="1"  onclick="javascript:monitor($(this),'Flash_type','Flash_link');" checked="checked"/><a style="margin-top:0px;" class="toolTips_tag" onmouseover="showMyToolTips(this, '什么是Flash点击监控？', '监测和统计 Flash 点击情况。')" onmouseout="hideMyToolTips()" href="javascript:void(0);"><img style="margin-top:0px!important;margin-top:2px;" src="<?php echo Yii::app()->request->baseUrl; ?>/images/tit4.gif" /></a></td>
  </tr>
  <tr valign="top" class="ad_type_more flash_more hiden"  id="Flash_type_monitor_link">
    <th>监控方式:</th>
    <td><?php echo $form->radioButtonList($materialFlash, 'monitor_flash_type', MaterialVflash::model()->getFlashTypeOption(), array('separator' => ' ')); ?></td>
  </tr>
  <tr valign="top" class="ad_type_more flash_more hiden" id="Flash_link_monitor_link">
    <th><span class="notion">*</span><?php echo $form->label($materialFlash, 'click_link'); ?></th>
    <td><?php echo $form->textField($materialFlash, 'click_link', array('class' => 'txt1', 'style' => 'width:255px;')); ?><a style="margin-top:0px;" class="toolTips_tag" onmouseover="showMyToolTips(this, '什么是点击链接？', '点击广告后跳转进入的目标页面链接。')" onmouseout="hideMyToolTips()" href="javascript:void(0);"><img style="margin-top:0px!important;margin-top:2px;" src="<?php echo Yii::app()->request->baseUrl; ?>/images/tit4.gif" /></a></td>
  </tr>
  <tr valign="top" class="ad_type_more flash_more hiden">
    <th><?php echo $form->label($materialFlash, 'reserve'); ?></th>
    <td align="left">&nbsp;
      <input type="checkbox" name="MaterialVflash[reserve]" value="1"  onclick="javascript:monitor($(this),'Flash_pic','Flash_pic_link');"/><a style="margin-top:0px;" class="toolTips_tag" onmouseover="showMyToolTips(this, '什么是Flash后备图片？', '当 Flash 无法正常播放时，将展现后备图片。')" onmouseout="hideMyToolTips()" href="javascript:void(0);"><img style="margin-top:0px!important;margin-top:2px;" src="<?php echo Yii::app()->request->baseUrl; ?>/images/tit4.gif" /></a></td>
  </tr>
  <tr valign="top" class="ad_type_more flash_more hiden flash_monitor"  id="Flash_pic_monitor_link">
    <th ><?php echo $form->label($materialFlash, 'reserve_pic_url'); ?></th>
    <td><!--flash中上传图片--> 
      <span style="float:left;">
      <input type="text" id="flashpic_url" name="MaterialVflash[reserve_pic_url]" readonly class="txt1" >
      </span> <span class="span_btn_upload">
      <input type="file" id="flashpic_upload" />
      </span> <span id="flashpic_parameter" style="display:none;margin-left:10px;"> 尺寸：宽
      <input type="text" id="flashpic_width" name="MaterialVflash[flashpic_x]" class="txt1 size_input" />
      &nbsp;*&nbsp;高
      <input type="text" id="flashpic_height" name="MaterialVflash[flashpic_y]"  class="txt1 size_input" />
      &nbsp;(px) </span>
      <div id="flashpicQueue"></div></td>
  </tr>
  <tr valign="top" class="ad_type_more flash_more hiden flash_monitor" id="Flash_pic_link_monitor_link">
    <th><span class="notion">*</span><?php echo $form->label($materialFlash, 'reserve_pic_link'); ?></th>
    <td><?php echo $form->textField($materialFlash, 'reserve_pic_link', array('class' => 'txt1', 'style' => 'width:255px;')); ?></td>
  </tr>
  <tr valign="top" class="ad_type_more flash_more hiden">
    <th><?php echo $form->label($materialFlash, 'monitor'); ?></th>
    <td align="left">&nbsp;
      <input type="checkbox" name="MaterialVflash[monitor]" value="1"  onclick="javascript:monitor($(this),'Flash');"/></td>
  </tr>
  <tr valign="top" class="ad_type_more flash_more hiden flash_monitor" id="Flash_monitor_link">
    <th><span class="notion">*</span><?php echo $form->label($materialFlash, 'monitor_link'); ?></th>
    <td><?php echo $form->textField($materialFlash, 'monitor_link', array('class' => 'txt1', 'style' => 'width:255px;')); ?></td>
  </tr>
  <tr valign="top" class="ad_type_more flash_more hiden">
    <th>目标窗口:</th>
    <td><?php echo $form->radioButtonList($materialFlash, 'target_window', MaterialVflash::model()->getWindowOption(), array('separator' => ' ')); ?></td>
  </tr>
  <!--end flash-->

  <!-- rich media -->
    <tr valign="top" class="ad_type_more media_more hiden">
        <th><span class="notion">*</span>广告物料模板</th>
        <td><?php echo $form->dropDownList($materialMedia, 'template_id', $templateMode, array('class' => 'txt1', 'style'=>'width:160px;', 'onchange'=>'setMediaTemplate()')); ?>
        <input type="hidden" id="MaterialMedia_template_mode" name="MaterialVmedia[template_mode]" value="" />
        </td>
    </tr>
    <tr class="ad_type_more hiden" id="media_template_wrapper">
        <th>&nbsp;</th>
        <td id="media_template_list" class="media_dropbox">
        </td>
    </tr>
    <tr class="ad_type_more hiden" id="media_params_wrapper">
        <td id="richTplWrapper" colspan="2">   
        </td>
    </tr>
    <tr valign="top" class="ad_type_more default_media media_more hiden">
        <th><span class="notion">*</span>代码</th>
        <td>
            <?php echo $form->textArea($materialMedia, 'content', array('class' => 'txt1', 'style' => 'width:340px; height:200px;')); ?>
            <span style="vertical-align: top">支持HTML/Javascript代码</span>
        </td>
    </tr>
    <tr valign="top" class="ad_type_more default_media media_more hiden">
        <th>&nbsp;</th>
        <td>
            <button class="btn_main" type="button" onclick="displayMediaUpload()">上传图片或flash</button>
            <button class="ml_40 btn_main" type="button" onclick="displayMediaCLink()">统计点击量</button>
        </td>
    </tr>
    <tr valign="top" class="ad_type_more media_more hiden">
        <th>&nbsp;</th>
        <td>
            <div id="media_upload_box" class="media_dropbox hiden">
                <div class="prompt_set">上传图片大小不能超过256k，Flash大小不能超过512k</div>
                <div style="height:24px;">
                  <span style="float:left;display:block;">图片或flash：<input type="text" id="media_url" name="media_url" readonly class="txt1" ></span>
                  <span class="span_btn_upload">
                    <input type="file" id="media_upload" />
                  </span>
                  <a href="javascript:void(0);" class="btn_main hiden" id="btn_get_medialink" type="button" onmouseover="copyToClipboard('media_url', 'btn_get_medialink', 'copy_ok_1')">复制连接</a>
                  <span id="copy_ok_1" class="getcode_copy_ok hiden">复制成功</span>
                  <div id="mediaQueue"></div>
                </div>
                <div id="show_upload_media" class="hiden">
                </div>
            </div>
            <div id="media_clicklink_box" class="media_dropbox hiden">
                <div class="prompt_set">输入点击链接后，点击生成新链接按钮，使用生成的新链接替换上面代码中的点击链接，便可对点击进行统计。</div>
                <div>
                  点击链接：<input type="text" id="media_click_link" name="media_click_link" class="txt1" />
                  <button class="btn_main" type="button" onclick="mediaMakeLink('media_click_link', 'make_click_link')">生成新链接</button>
                  <label class="error hiden" id="label_media_click_link" for="media_click_link"></label>
                  <div id="media_make_link" class="mt10 hiden">
                    <input type="text" id="make_click_link" name="make_click_link" class="txt1" value="http://" style="width:380px" />
                    <a href="javascript:void(0);" class="btn_main" id="btn_get_mediahref" type="button" onmouseover="copyToClipboard('make_click_link', 'btn_get_mediahref', 'copy_ok_2')">复制连接</a>
                    <span id="copy_ok_2" class="getcode_copy_ok hiden">复制成功</span>
                  </div>
                </div>
            </div>
        </td>
    </tr>
  <!-- end rich media -->

  <!--video-->
  <tr valign="top" class="ad_type_more video_more hiden">
    <th><span class="notion">*</span><?php echo $form->label($materialVideo, 'url'); ?></th>
      <td >
          <a href="javascript:void(0);" id="picgroup_upload"  onclick="showVideos()" style=" padding-left:15px; display:inline-block; height:29px; *height:30px!important; padding-right:15px; background:url(<?php  echo Yii::app()->request->baseUrl;?>/images/subnav_libg.png) 0 0 no-repeat; cursor:pointer; color:#fff; "><span>视频库</span></a>
          <span id="" style="margin-left:10px;"> 尺寸：宽
            <input type="text" id="video_width" name="MaterialVvideo[video_x]" class="txt1 size_input" /> &nbsp;*&nbsp;高
            <input type="text" id="video_height" name="MaterialVvideo[video_y]"  class="txt1 size_input" /> &nbsp;(px)
          </span>
          <input type="hidden" name="MaterialVvideo[player_code]" id ="playerCodeList" value="" >
      </td>
  </tr>
  <tr>
      <td colspan="2" style="height:auto; margin-bottom:10px;">
        <table id="pic_options"></table>
      </td>
  </tr>
  <tr valign="top" class="ad_type_more video_more hiden">
    <th>视频背景:</th>
    <td><?php echo $form->radioButtonList($materialVideo, 'backdrop', MaterialVvideo::model()->getFlashbgOption(), array('separator' => ' ')); ?></td>
  </tr>
  <tr valign="top" class="ad_type_more video_more hiden">
    <th><?php echo $form->label($materialVideo, 'monitor_video'); ?></th>
    <td align="left">&nbsp;
      <input type="checkbox" name="MaterialVvideo[monitor_video]" value="1"  onclick="javascript:monitor($(this),'Video_type','Video_link');" checked="checked"/><a style="margin-top:0px;" class="toolTips_tag" onmouseover="showMyToolTips(this, '什么是video点击监控？', '监测和统计 video 点击情况。')" onmouseout="hideMyToolTips()" href="javascript:void(0);"><img style="margin-top:0px!important;margin-top:2px;" src="<?php echo Yii::app()->request->baseUrl; ?>/images/tit4.gif" /></a></td>
  </tr>
  <tr valign="top" class="ad_type_more video_more hiden"  id="Video_type_monitor_link">
    <th>监控方式:</th>
    <td><?php echo $form->radioButtonList($materialVideo, 'monitor_video_type', MaterialVvideo::model()->getFlashTypeOption(), array('separator' => ' ')); ?></td>
  </tr>
  <tr valign="top" class="ad_type_more video_more hiden" id="Video_link_monitor_link">
    <th><span class="notion">*</span><?php echo $form->label($materialVideo, 'click_link'); ?></th>
    <td><?php echo $form->textField($materialVideo, 'click_link', array('class' => 'txt1', 'style' => 'width:255px;')); ?><a style="margin-top:0px;" class="toolTips_tag" onmouseover="showMyToolTips(this, '什么是点击链接？', '点击广告后跳转进入的目标页面链接。')" onmouseout="hideMyToolTips()" href="javascript:void(0);"><img style="margin-top:0px!important;margin-top:2px;" src="<?php echo Yii::app()->request->baseUrl; ?>/images/tit4.gif" /></a></td>
  </tr>
  <tr valign="top" class="ad_type_more video_more hiden">
    <th><?php echo $form->label($materialVideo, 'reserve'); ?></th>
    <td align="left">&nbsp;
      <input type="checkbox" name="MaterialVvideo[reserve]" value="1"  onclick="javascript:monitor($(this),'Video_pic','Video_pic_link');"/><a style="margin-top:0px;" class="toolTips_tag" onmouseover="showMyToolTips(this, '什么是video后备图片？', '当video 无法正常播放时，将展现后备图片。')" onmouseout="hideMyToolTips()" href="javascript:void(0);"><img style="margin-top:0px!important;margin-top:2px;" src="<?php echo Yii::app()->request->baseUrl; ?>/images/tit4.gif" /></a></td>
  </tr>
  <tr valign="top" class="ad_type_more video_more hiden video_monitor"  id="Video_pic_monitor_link">
    <th ><?php echo $form->label($materialVideo, 'reserve_pic_url'); ?></th>
    <td><!--video中上传图片--> 
      <span style="float:left;">
      <input type="text" id="videopic_url" name="MaterialVvideo[reserve_pic_url]" readonly class="txt1" >
      </span> <span class="span_btn_upload">
      <input type="file" id="videopic_upload" />
      </span> <span id="videopic_parameter" style="display:none;margin-left:10px;"> 尺寸：宽
      <input type="text" id="videopic_width" name="MaterialVvideo[videopic_x]" class="txt1 size_input" />
      &nbsp;*&nbsp;高
      <input type="text" id="videopic_height" name="MaterialVvideo[videopic_y]"  class="txt1 size_input" />
      &nbsp;(px) </span>
      <div id="videopicQueue"></div></td>
  </tr>
  <tr valign="top" class="ad_type_more video_more hiden video_monitor" id="Video_pic_link_monitor_link">
    <th><span class="notion">*</span><?php echo $form->label($materialVideo, 'reserve_pic_link'); ?></th>
    <td><?php echo $form->textField($materialVideo, 'reserve_pic_link', array('class' => 'txt1', 'style' => 'width:255px;')); ?></td>
  </tr>
  <tr valign="top" class="ad_type_more video_more hiden">
    <th><?php echo $form->label($materialVideo, 'monitor'); ?></th>
    <td align="left">&nbsp;
      <input type="checkbox" name="MaterialVvideo[monitor]" value="1"  onclick="javascript:monitor($(this),'Video');"/></td>
  </tr>
  <tr valign="top" class="ad_type_more video_more hiden video_monitor" id="Video_monitor_link">
    <th><?php echo $form->label($materialVideo, 'monitor_link'); ?></th>
    <td><?php echo $form->textField($materialVideo, 'monitor_link', array('class' => 'txt1', 'style' => 'width:255px;')); ?></td>
  </tr>
  <tr valign="top" class="ad_type_more video_more hiden">
    <th>目标窗口:</th>
    <td><?php echo $form->radioButtonList($materialVideo, 'target_window', MaterialVvideo::model()->getWindowOption(), array('separator' => ' ')); ?></td>
  </tr>
  <!--end video-->

</table>

<!--弹出框-->
   <div id="window-videos" data-options="closed:true,tools:'#window-videos-bt'" class="easyui-window" style="overflow: hidden;"></div>
   <div id="window-videos-bt" style="display:none;">
       <input type="button" id="bt_video_return" class="but_fanhui" value="返回" />
       <input type="button" id="bt_video_confirm" class="btn_confirm" value="确定" />
   </div>

<div class="bgline"></div>
<br/>
<div class="pt_35 ml_240">
  <button type="submit" class="iscbut_2">完成</button>
  <a href="javascript:void(0)" onclick="backout()" class="mgl38 tool_42_link">
  <button type="button" class="ml_40 iscbut_2">返回</button>
  </a> </div>
<?php $this->endWidget(); ?>
<link href="<?php echo Yii::app()->request->baseUrl; ?>/js/uploadify/uploadify.css" rel="stylesheet" type="text/css" />
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/uploadify/jquery.uploadify.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-easyui-1.3.3/themes/ihimi/easyui.css">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-easyui-1.3.3/themes/icon.css">
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-easyui-1.3.3/jquery.easyui.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-easyui-1.3.3/locale/easyui-lang-zh_CN.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/main1.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/zeroclipboard/ZeroClipboard.js" type="text/javascript"></script>
<script type="text/javascript">

    //详细信息展开收起
    var $id = function (id) 
    {
        return document.getElementById(id);
    }
    function monitor(obj,type,type1){
        if(obj.attr('checked') == 'checked'){
            $('#'+type+'_monitor_link').show();
            if(type1)
                $('#'+type1+'_monitor_link').show();
        }else{
            $('#'+type+'_monitor_link').hide();
            if(type1)
                $('#'+type1+'_monitor_link').hide();
        }
    }
    function xZhankai(onid,offid){
        if($id(onid)){
            $id(onid).style.display = "none";  
        }
        if($id(offid)){
            $id(offid).style.display = "block";
        }
    }

    var $videosWin;

    $(document).ready(function(e) {
        //弹出视频库
        $videosWin = $('#window-videos').window({
                   modal:true,
                   closed:true,
                   closable:false,
                   collapsible:false,
                   maximizable:false,
                   minimizable:false,
                   resizable:false,
                   shadow:false,
                   tools:'#window-videos-bt',
                   onClose:function(){
                       $('#window-videos').html('');
                   }
               });
        //视频库 返回
        $("#bt_video_return").click(function(){
                $videosWin.window('close');
            });
        //视频库 确认
        $("#bt_video_confirm").click(function(){
                $(".img_box").find("input[name='video_id[]']:checked").each(function(){
                    var pic_url = $(this).parent().find("input[name='video_image[]']").val();
                    var video_url = $(this).parent().find("input[name='video_url[]']").val();//获取播放地址url
                    var video_host = $(this).parent().find("input[name='video_host[]']").val();//获取播放地址host
                    var video_code = $(this).parent().find("input[name='video_host[]']").next("input").val();//获取播放代码
                    var video_info = $(this).parent().find("textarea").val();
                    if (pic_url && video_info) {
                        if (!setVideoValue(pic_url, video_info)) {
                            addPicWrapper(video_url,video_host,video_code);
                            setVideoValue(pic_url, video_info);
                        }
                    }
                });
                $videosWin.window('close');
            }
        );

        $('#MaterialVtext_color').modcoder_excolor({
            hue_slider : 2,
            root_path:'<?php echo Yii::app()->request->baseUrl; ?>/js/excolor/',
            callback_on_ok : function() {
                // You can insert your code here 
            }
        });
        $('#MaterialVtext_float_color').modcoder_excolor({
            hue_slider : 2,
            root_path:'<?php echo Yii::app()->request->baseUrl; ?>/js/excolor/',
            callback_on_ok : function() {
                // You can insert your code here 
            }
        });
        //页面跳转
        $("#material_return").click(function(){
            frame_load($(this).attr("href"));
            return false;
        });

        $(".lakai").click(function(){
            $(".left").toggle();
        });
        
        $('input[name="Material[material_type_id]"]').change(function(){
            $('.ad_type_more').hide();
            var now = $('input[name="Material[material_type_id]"]:checked').attr('id');
            $('.'+now+'_more').show();
            $('.'+now+'_monitor').hide();

        });
        
        // ajax提交
        $.validator.setDefaults({
            submitHandler: function() {
                $('#dialog-form').dialog('close')
                banner_message('后台处理中，请稍后');
                $('#material-form').ajaxSubmit({success:showResponse});
                return false;
            }
        });
        
        // 验证
        $("#material-form").validate({
            rules: {
                'Material[name]':{
                    required: true
                },
                'MaterialVtext[text]':{
                    required: true
                },
                'MaterialVtext[size]':{
                    digits:true,
                    range:[1,1000]
                },
                'MaterialVtext[click_link]':{
                    required: true,
                    url:true
                },
                'MaterialVtext[monitor_link]':{
                    required: true,
                    url:true
                },
                'MaterialVpic[url]':{
                    required: true
                },
                'MaterialVpic[click_link]':{
                    required: true,
                    url:true
                },
                'MaterialVpic[monitor_link]':{
                    required: true,
                    url:true
                },
                'MaterialVpic[pic_x]':{
                    digits:true,
                    range:[1,10000]
                },
                'MaterialVpic[pic_y]':{
                    digits:true,
                    range:[1,10000]
                },
                'MaterialVflash[url]':{
                    required: true
                },
                'MaterialVflash[click_link]':{
                    required: true,
                    url:true
                },
                'MaterialVflash[reserve_pic_link]':{
                    required: true,
                    url:true
                },
                'MaterialVflash[monitor_link]':{
                    required: true,
                    url:true
                },
                'MaterialVflash[flash_x]':{
                    digits:true,
                    range:[1,10000]
                },
                'MaterialVflash[flash_y]':{
                    digits:true,
                    range:[1,10000]
                },
                'MaterialVflash[flashpic_x]':{
                    digits:true,
                    range:[1,10000]
                },
                'MaterialVflash[flashpic_y]':{
                    digits:true,
                    range:[1,10000]
                },
                'MaterialVvideo[url]':{
                    required: true
                },
                'MaterialVvideo[click_link]':{
                    required: true,
                    url:true
                },
                'MaterialVvideo[reserve_pic_link]':{
                    required: true,
                    url:true
                },
                'MaterialVvideo[monitor_link]':{
                    required: true,
                    url:true
                },
                'MaterialVvideo[video_x]':{
                    digits:true,
                    range:[1,10000]
                },
                'MaterialVvideo[video_y]':{
                    digits:true,
                    range:[1,10000]
                },
                'MaterialVvideo[videopic_x]':{
                    digits:true,
                    range:[1,10000]
                },
                'MaterialVvideo[videopic_y]':{
                    digits:true,
                    range:[1,10000]
                }
            },
            messages: {
                'Material[name]':{
                    required: '&nbsp;物料名称不能为空'
                },
                'MaterialVtext[text]':{
                    required: '&nbsp;内容不能为空'
                },
                'MaterialVtext[size]':{
                    digits: "&nbsp;必须是整数",
                    range:"&nbsp;必须是1-1000之间的数字"
                },
                'MaterialVtext[click_link]':{
                    required: '&nbsp;点击链接不能为空',
                    url:'&nbsp;点击链接格式错误'
                },
                'MaterialVtext[monitor_link]':{
                    required: '&nbsp;监控链接不能为空',
                    url:'&nbsp;监控链接格式错误'
                },
                'MaterialVpic[url]':{
                    required: '&nbsp;请上传'
                },
                'MaterialVpic[click_link]':{
                    required: '&nbsp;点击链接不能为空',
                    url:'&nbsp;点击链接格式错误'
                },
                'MaterialVpic[monitor_link]':{
                    required: '&nbsp;监控链接不能为空',
                    url:'&nbsp;监控链接格式错误'
                },
                'MaterialVpic[pic_x]':{
                    digits: "&nbsp;必须是整数",
                    range:"&nbsp;必须是1-10000之间的数字"
                },
                'MaterialVpic[pic_y]':{
                    digits: "&nbsp;必须是整数",
                    range:"&nbsp;必须是1-10000之间的数字"
                },
                'MaterialVflash[url]':{
                    required: '&nbsp;请上传'
                },
                'MaterialVflash[click_link]':{
                    required: '&nbsp;Flash点击链接不能为空',
                    url:'&nbsp;Flash点击链接格'
                },
                'MaterialVflash[reserve_pic_link]':{
                    required: '&nbsp;点击链接不能为空',
                    url:'&nbsp;图片点击链接格式错误'
                },
                'MaterialVflash[monitor_link]':{
                    required: '&nbsp;监控链接不能为空',
                    url:'&nbsp;监控链接格式错误'
                },
                'MaterialVflash[flash_x]':{
                    digits: "&nbsp;必须是整数",
                    range:"&nbsp;必须是1-10000之间的数字"
                },
                'MaterialVflash[flash_y]':{
                    digits: "&nbsp;必须是整数",
                    range:"&nbsp;必须是1-10000之间的数字"
                },
                'MaterialVflash[flashpic_x]':{
                    digits: "&nbsp;必须是整数",
                    range:"&nbsp;必须是1-10000之间的数字"
                },
                'MaterialVflash[flashpic_y]':{
                    digits: "&nbsp;必须是整数",
                    range:"&nbsp;必须是1-10000之间的数字"
                },
                'MaterialVvideo[url]':{
                    required: '&nbsp;请上传'
                },
                'MaterialVvideo[click_link]':{
                    required: '&nbsp;视频点击链接不能为空',
                    url:'&nbsp;视频点击链接格'
                },
                'MaterialVvideo[reserve_pic_link]':{
                    required: '&nbsp;点击链接不能为空',
                    url:'&nbsp;图片点击链接格式错误'
                },
                'MaterialVvideo[monitor_link]':{
                    required: '&nbsp;监控链接不能为空',
                    url:'&nbsp;监控链接格式错误'
                },
                'MaterialVvideo[video_x]':{
                    digits: "&nbsp;必须是整数",
                    range:"&nbsp;必须是1-10000之间的数字"
                },
                'MaterialVvideo[video_y]':{
                    digits: "&nbsp;必须是整数",
                    range:"&nbsp;必须是1-10000之间的数字"
                },
                'MaterialVvideo[videopic_x]':{
                    digits: "&nbsp;必须是整数",
                    range:"&nbsp;必须是1-10000之间的数字"
                },
                'MaterialVvideo[videopic_y]':{
                    digits: "&nbsp;必须是整数",
                    range:"&nbsp;必须是1-10000之间的数字"
                }
            }
        });
    });
    
    function showResponse(responseText, statusText)  {
        var data = $.parseJSON(responseText);
        if(data.code < 0){
            banner_message(data.message);
        }else{
            jAlert(data.message, '提示');
            setTimeout('frame_load("<?php echo !empty($_GET['backUrl'])? $_GET['backUrl'] : $this->createUrl('materialVideo/list'); ?>");', 1000);
        }
    }

    function size_select(i){
        $('.size_select').hide();
        $('#size_'+i).show();
        var v = i == 'default' ? 0 : 1;
        $('input[name="size_defined"]').val(v);
    }
    function st_limit(i){
        $('.st_limit').hide();
        $('#st_'+i).show();
        if(i == 'unlimit'){
            $('#SitePosition_staytime').val(0);
        }else if($('#SitePosition_staytime').val() == 0){
            $('#SitePosition_staytime').val(100);
        }
    }
    
    function backout(){
        jConfirm("你确定要放弃新建吗？", "提示", function(e){
           if(e){
                setTimeout('frame_load("<?php echo !empty($_GET['backUrl'])? $_GET['backUrl'] : $this->createUrl('materialVideo/list'); ?>");', 1);
            }
         });
    }
    
    /**
     * 下面是添加富媒体广告脚本
     * 公共函数开始
     */
    function copyToClipboard(txt_id,id,ok) {
        ZeroClipboard.setMoviePath( "<?php echo Yii::app()->request->baseUrl; ?>/js/zeroclipboard/ZeroClipboard.swf" );
        clip = new ZeroClipboard.Client();
        clip.setHandCursor(true); 
        clip.addEventListener( "mouseOver", function(client) {
            var txt = $('#' + txt_id).val();
            client.setText( txt ); // 重新设置要复制的值
        });
        clip.addEventListener("complete", function (client, text) {
            $("#"+ok).show();
            setTimeout(hideCopyOk, 1500);
        });
        clip.glue(id);
    }
    
    function hideCopyOk(){
        $('.getcode_copy_ok').hide();
    }
    
    function bindUploadPlugin(name){
        // 以下是uploadify v2.14版本
        jQuery("#RichMediaTpl_"+name+'_upload').uploadify({ //uploadify对应input的id
            uploader: '<?php echo Yii::app()->request->baseUrl; ?>/js/uploadify/uploadify.swf',
            script: "<?php echo Yii::app()->createUrl('upload/uploadPic');?>", //处理文件上传的路径
            cancelImg: "<?php echo Yii::app()->request->baseUrl; ?>/js/uploadify/cancel.png",
            queueID: "RichMediaTpl_"+name+"_queue", //div的id，用于显示进度条
            fileSizeLimit : '2048KB',
            queueSizeLimit: 1,
            fileDesc: "*.jpg;*.jpeg;*.gif;*.png;*.swf;", //设置文件格式
            fileExt: "*.jpg;*.jpeg;*.gif;*.png;*.swf;", //设置文件后缀
            auto: true, //是否自动上传
            buttonText: "上传图片",
            buttonImg: "<?php echo Yii::app()->request->baseUrl; ?>/js/uploadify/upload_btn.png", //选择文件的图片
            simUploadLimit: 1, //一次上传的文件的个数
            height: "20", //按钮高度
            width: "60", //按钮宽度
            onComplete : function(event, queueID, fileObj, response, data) {
                //此处用到jquery的parseJSON功能,jquery1.4.2以上才有这个方法
                var data=$.parseJSON(response);
                $('#RichMediaTpl_'+name+'_url').val("<?php echo $setting['STATIC_URL'];?>"+data.value.name);
                $('#RichMediaTplUploadSrc_'+name).html('<img src="<?php echo $setting['STATIC_URL'];?>'+data.value.name+'" style="max-width:300px;" />');
            }
        });
    }
    
    function checkMediaSrc(name){
        var originLink = $("#RichMediaTplMedia_"+name).val();
        var matches = originLink.match(/^http:\/\/([\w-]+\.)+[\w-]+(\/[\w- .\/?%&=]*)?\.(jpg|jpeg|gif|png|swf)$/i);
        if (matches) {
            $("#RichMediaTplRemoteSrc_"+name).html('<img src="'+originLink+'" style="max-width:300px;" />');
        } else {
            matches = originLink.match(/^([\w-]+\.)+[\w-]+(\/[\w- .\/?%&=]*)?\.(jpg|jpeg|gif|png|swf)$/i);
            if (!matches) {
                $("#RichMediaTplMedia_"+name).addClass("error");
                $("#label_RichMediaTplMedia_"+name).html("请填写正确url").show();
                $("#RichMediaTplRemoteSrc_"+name).html('');
                return false;
            } else {
                $("#RichMediaTplRemoteSrc_"+name).html('<img src="http://'+originLink+'" style="max-width:300px;" />');
            }
        }
    }
    /**
     * 公共函数结束
     * 单一事物处理开始
     */
    function displayMediaUpload(){
        if ($("#media_upload_box").is(":visible")) {
            $("#media_upload_box").hide();
        } else {
            $("#media_clicklink_box").hide();
            $("#media_upload_box").show();
        }
    }

    function displayMediaCLink(){
        if ($("#media_clicklink_box").is(":visible")) {
            $("#media_clicklink_box").hide();
        } else {
            $("#media_upload_box").hide();
            $("#media_clicklink_box").show();
        }
    }
    
    function mediaMakeLink(originLinkId, newLinkId) {
        var originLink = $("#"+originLinkId).val();
        var matches = originLink.match(/^http:\/\/([\w-]+\.)+[\w-]+(\/[\w- .\/?%&=]*)?/);
        if (matches) {
            $("#"+originLinkId).removeClass("error");
            $("#label_"+originLinkId).html("").hide();
            var newLink = "%%BEGIN_LINK%%"+ originLink +"%%END_LINK%%";
            $("#"+newLinkId).val(newLink);
            $("#media_make_link").show();
        } else {
            matches = originLink.match(/^([\w-]+\.)+[\w-]+(\/[\w- .\/?%&=]*)?/);
            if (!matches) {
                $("#"+originLinkId).addClass("error");
                $("#label_"+originLinkId).html("请填写正确url").show();
                return false;
            }
            $("#"+originLinkId).removeClass("error");
            $("#label_"+originLinkId).html("").hide();
            var newLink = "%%BEGIN_LINK%%http://"+ originLink +"%%END_LINK%%";
            $("#"+newLinkId).val(newLink);
            $("#media_make_link").show();
        }
    }
    
    // 检查连接地址 如果没有htpp:\\则自动添加
    function checkMediaUrl(name, notAllowNull){
        /*var originLink = $("#RichMediaTpl_"+name).val();
        if (!notAllowNull && originLink=="") {
            return true;
        }
        var matches = originLink.match(/^http:\/\/([\w-]+\.)+[\w-]+(\/[\w- .\/?%&=]*)?/);
        if (matches) {
            $("#RichMediaTpl_"+name).removeClass("error");
            $("#label_RichMediaTpl_"+name).html("").hide();
        } else {
            matches = originLink.match(/^([\w-]+\.)+[\w-]+(\/[\w- .\/?%&=]*)?/);
            if (!matches) {
                $("#RichMediaTpl_"+name).addClass("error");
                $("#label_RichMediaTpl_"+name).html("请填写正确url").show();
                return false;
            }
            $("#RichMediaTpl_"+name).removeClass("error");
            $("#label_RichMediaTpl_"+name).html("").hide();
            $("#RichMediaTpl_"+name).val("http://"+originLink);
        }*/
    }
    
    // 检查字符串
    function checkMediaText(name, notAllowNull){
        /*var originLink = $("#RichMediaTpl_"+name).val();
        if (!notAllowNull && originLink=="") {
            return true;
        }
        if (originLink=="") {
            $("#RichMediaTpl_"+name).addClass("error");
            $("#label_RichMediaTpl_"+name).html("此项为必填").show();
        } else {
            $("#RichMediaTpl_"+name).removeClass("error");
            $("#label_RichMediaTpl_"+name).html("").hide();
        }*/
    }
    
    // 检查数字
    function checkMediaNumber(name, notAllowNull){
        /*var originLink = $("#RichMediaTpl_"+name).val();
        if (!notAllowNull && originLink=="") {
            return true;
        }
        if (originLink=="") {
            $("#RichMediaTpl_"+name).addClass("error");
            $("#label_RichMediaTpl_"+name).html("请填写数字").show();
        } else {
            var matches = originLink.match(/^(\d)+(\.)?(\d)+$/);
            if (!matches) {
                $("#RichMediaTpl_"+name).addClass("error");
                $("#label_RichMediaTpl_"+name).html("请填写数字").show();
            } else {
                $("#RichMediaTpl_"+name).removeClass("error");
                $("#label_RichMediaTpl_"+name).html("").hide();
            }
        }*/
    }
    
    // 设置模板显示或隐藏 根据选择
    function setMediaTemplate(){
        var select = $("#MaterialMedia_template_id option:selected").val();
        if (select.match(/mtId_\d+/)) {
            var mtName = $("#MaterialMedia_template_id option:selected").text();
            getMaterialTemplate(select, mtName);
            $("#MaterialMedia_template_mode").val(1);
        } else {
            if (select>0) {
                getTemplateList(select);
                $("#MaterialMedia_template_mode").val(1);
            } else {
                $("#media_template_wrapper").hide();
                $("#media_params_wrapper").hide();
                $(".default_media").show();
                $("#MaterialMedia_template_mode").val(0);
            }
        }
    }
    
    function getTemplateList(templateMode){
        $.get("<?php echo Yii::app()->createUrl("MaterialTemplate/ajaxGetList")?>", { templateMode: templateMode},
            function(data){
                $("#media_template_list").html(data);
                hideRichTplDefault();
                $("#media_params_wrapper").hide();
                $("#media_template_wrapper").show();
        }); 
    }
    
    function hideTemplateList(){
        $("#media_template_wrapper").hide();
        $("#MaterialMedia_template_id").val(0);
        $(".default_media").show();
    }
    
    function hideRichTplDefault(){
        $(".default_media").hide();
        $("#media_upload_box").hide();
        $("#media_clicklink_box").hide();
    }
    
    /**
     * 获取选择的模板
     * mtName：模板名称
     */
    function setMaterialTemplate(mtName){
        var strId = $("input[name='MaterialTemplateId']:checked").val();
        getMaterialTemplate(strId, mtName);
    }
    
    function getMaterialTemplate(strId, mtName){
        $("#media_template_wrapper").hide();
        $('.tableRichTplWrapper').hide();
        hideRichTplDefault();
        if ($("#RichTplWrapper_"+strId).length>0) {
            $("#MaterialMedia_template_id").val(strId);
            $("#RichTplWrapper_"+strId).show();
            $("#media_params_wrapper").show();
            return false;
        }
        var mtId = strId.replace("mtId_", "");
        $.post(
            '<?php echo Yii::app()->createUrl("MaterialTemplate/ajaxGetParam")?>',
            {'templateId':mtId}, 
            function(result){
                if (result.code<0){
                    jAlert(result.message);
                    $(".default_media").show();
                } else {
                    var richMediaControl = {
                        data : result.result,
                        html : '',
                        getRichTplHTML : function(){
                            for(var i=0; i<this.data.length; i++){
                                this.parseTemplate(this.data[i]);
                            }
                            return this.getTHML();
                        },
                        parseTemplate : function(param){
                            var description = (param.required=='1')? '<span class="notion">*</span>'+param.description : param.description;
                            this.appendTHML('<tr valign="top"><th style="width:180px;">'+description+'</th><td style="padding-left:6px;">');
                            switch(param.type){
                            case 1:
                                this.mediaTemplate(param);
                                break;
                            case 2:
                                this.linkTemplate(param);
                                break;
                            case 3:
                                this.textTemplate(param);
                                break;
                            case 4:
                                this.numberTemplate(param);
                                break;
                            case 5:
                                this.radioTemplate(param);
                                break;
                            }
                            this.appendTHML('</td></tr>');
                        },
                        mediaTemplate : function(param){
                            var tpl = '<div>';
                            tpl += '<input type="radio" id="RichMediaTpl_'+param.name+'_mode_upload" name="RichMediaTplMediaMode_'+param.name+'" value="1" onclick="uploadMediaMode(\''+param.name+'\')" checked="checked" /><label for="RichMediaTpl_'+param.name+'_mode_upload"> 上传 </label>';
                            tpl += '<input class="ml_40" id="RichMediaTpl_'+param.name+'_mode_remote" name="RichMediaTplMediaMode_'+param.name+'" onclick="remoteMediaMode(\''+param.name+'\')" type="radio" value="2" /><label for="RichMediaTpl_'+param.name+'_mode_remote"> 远程 </label>';
                            tpl += '</div>';
                            tpl += '</td></tr>';
                            tpl += '<tr id="RichMediaTpl_'+param.name+'_mode_upload_wrapper"><th>&nbsp;</th><td style="padding-left:6px;">';
                            tpl += '<span style="float:left;"><input type="text" id="RichMediaTpl_'+param.name+'_url" name="RichMediaTpl['+param.name+']" readonly class="txt1" ></span>';
                            tpl += '<span class="span_btn_upload">';
                            tpl += '<input type="file" id="RichMediaTpl_'+param.name+'_upload" /></span>';
                            tpl += '<div id="RichMediaTpl_'+param.name+'_queue"></div>';
                            tpl += '<'+'script>bindUploadPlugin("'+param.name+'");</'+'script>';
                            tpl += '<div id="RichMediaTplUploadSrc_'+param.name+'"></div>';
                            tpl += '</td></tr>';
                            tpl += '<tr id="RichMediaTpl_'+param.name+'_mode_remote_wrapper" class="hide"><th>URL地址</th><td style="padding-left:6px;">';
                            tpl += '<input type="text" id="RichMediaTplMedia_'+param.name+'" name="RichMediaTplMedia['+param.name+']" onblur="checkMediaSrc(\''+param.name+'\')" class="txt1" />';
                            tpl += ' <label  for="RichMediaTplMedia_'+param.name+'"  id="label_RichMediaTplMedia_'+param.name+'" class="error hide"></label>';
                            tpl += '<div id="RichMediaTplRemoteSrc_'+param.name+'"></div>';
                            this.appendTHML(tpl);
                        },
                        linkTemplate : function(param){
                            var tpl = '<div>';
                            tpl += '<input type="text" id="RichMediaTpl_'+param.name+'" name="RichMediaTpl['+param.name+']" class="txt1" onblur="checkMediaUrl(\''+param.name+'\', '+param.required+')" />&nbsp;<input type="checkbox" name="RichMediaTplLink['+param.name+']" checked="checked" value="1" title="统计点击" /> 统计点击';
                            tpl += ' <label  for="RichMediaTpl_'+param.name+'"  id="label_RichMediaTpl_'+param.name+'" class="error hide"></label>';
                            tpl += '</div>';
                            this.appendTHML(tpl);
                        },
                        textTemplate : function(param){
                            var tpl = '<div>';
                            tpl += '<input type="text" id="RichMediaTpl_'+param.name+'" name="RichMediaTpl['+param.name+']" class="txt1" onblur="checkMediaText(\''+param.name+'\', '+param.required+')"/>';
                            tpl += ' <label  for="RichMediaTpl_'+param.name+'"  id="label_RichMediaTpl_'+param.name+'" class="error hide"></label>';
                            tpl += '</div>';
                            this.appendTHML(tpl);
                        },
                        numberTemplate : function(param){
                            var tpl = '<div>';
                            tpl += '<input type="text" id="RichMediaTpl_'+param.name+'" name="RichMediaTpl['+param.name+']" class="txt1" onblur="checkMediaNumber(\''+param.name+'\', '+param.required+')" />';
                            tpl += ' <label  for="RichMediaTpl_'+param.name+'"  id="label_RichMediaTpl_'+param.name+'" class="error hide"></label>';
                            tpl += '</div>';
                            this.appendTHML(tpl);
                        },
                        radioTemplate : function(param){
                            var tpl = '<div>';
                            var strLen = param.options.length;
                            for(var i=0; i<strLen; i++){
                                if (i==0){
                                    tpl += '<input type="radio" name="RichMediaTpl['+param.name+']" value="'+param.options[i].value+'" checked="checked"/> '+param.options[i].desc;
                                } else {
                                    tpl += '&nbsp;&nbsp;&nbsp;<input type="radio" name="RichMediaTpl['+param.name+']" value="'+param.options[i].value+'" /> '+param.options[i].desc;
                                }
                            }
                            tpl += '</div>';
                            this.appendTHML(tpl);
                        },
                        setTHML : function(html){
                            this.html = html;
                        },
                        getTHML : function(){
                            return this.html;
                        },
                        appendTHML : function(html){
                            this.html += html;
                        }
                    };
                    $("#MaterialMedia_template_id").append("<option value='mtId_"+mtId+"'>"+mtName+"</option>");
                    $("#MaterialMedia_template_id").val(strId);
                    var appendCode = '<table id="RichTplWrapper_mtId_'+mtId+'" class="tableRichTplWrapper"  border="0">'+ richMediaControl.getRichTplHTML() +'</table>';
                    $("#richTplWrapper").append(appendCode);
                    $("#media_params_wrapper").show();
                }
            },
            'json'
        );
    }
    
    function uploadMediaMode(name){
        $("#RichMediaTpl_"+name+"_mode_remote_wrapper").hide();
        $("#RichMediaTpl_"+name+"_mode_upload_wrapper").show();
    }
    
    function remoteMediaMode(name){
        $("#RichMediaTpl_"+name+"_mode_upload_wrapper").hide();
        $("#RichMediaTpl_"+name+"_mode_remote_wrapper").show();
    }


    //获取视频集
    function showVideos(){
        var width = 850;
        var height = 510;
        var top = ($(window).height() - height) * 0.5;
        if(top <=0 ) {
            var top = 1;
        }
        $videosWin.window({
            title:"视频库",
            width:width,
            height:height,
            top:top,
            left:($(window).width() - width) * 0.5,
            closed:false,
            href:'<?php echo Yii::app()->createUrl('video/popupList');?>?selectMode=multiple'
        });
    }

    function setVideoValue(pic_url, video_info) {
        var is_set = false;
        $("#pic_options .pic_option").each(function(){
            if ($(this).find("textarea").val()=='') {
                $(this).find("textarea").val(video_info);
                $(this).find("#video_pic").attr("src", pic_url);
                $(this).find("#video_image").val(pic_url);
                is_set = true;
                return false;
            }
        });
        return is_set;
    }
//移除视频按钮
    function delSimpleVideo(obj){
        var curObj = $(obj).parent().parent().parent().parent().parent().parent();
        deleteTr(curObj);
    }

    function addPicWrapper(video_url,video_host,video_code){
        $("#playerCodeList").val(video_code);
        var tr = '<tr class="pic_option">\
                     <td>\
                         <table>\
                             <tr>\
                                 <td rowspan="2" width="120"  height="110">\
                                     <div style="border:1px solid #ddd; width:100px; height:100px;">\
                                         <img id="video_pic" src="" width="100" height="100" />\
                                         <img style="width:26px;height:26px;margin:auto;position:relative;z-index:9999; left:32px;top:-65px;cursor: pointer;" src="<?php echo Yii::app()->request->baseUrl; ?>/images/btn_video.png" onClick="play_video_add(\'' + video_url + '\',\'' + video_host + '\',this)" />\
                                         <input type="hidden" id = "video_image" name= MaterialVvideo[video_image] />\
                                     </div>\
                                 </td>\
                                 <td>\
                                     <textarea name="MaterialVvideo[url][]" style="display:none;"></textarea>\
                                 </td>\
                             </tr>\
                             <tr>\
                                 <td>\
                                 <input type="button" class="but_w" onclick="delSimpleVideo(this)" value="删除">\
                                 </td>\
                             </tr>\
                         </table>\
                     </td>\
                 </tr>\
             ';
        $(tr).appendTo($("#pic_options"));
    }


</script>
<style type="text/css">
    .pssinput,.size_input{width:30px;}
</style>
