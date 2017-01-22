<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Project;
use yii\widgets\ActiveForm;
use backend\assets\indextadk;

$baseUrl = \Yii::getAlias('@web');
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'โครงการ';
$this->params['breadcrumbs'][] = $this->title;
indextadk::register ( $this );
include 'extend.php';
?>

<div class="project-index">
<div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">
            <a href="javascript:;" class="page-quick-sidebar-toggler">
                <i class="icon-login"></i>
            </a>
                <div class="page-quick-sidebar">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab" aria-expanded="true"> Project
                                
                            </a>
                        </li>
                        <li class="">
                            <a href="javascript:;" data-target="#quick_sidebar_tab_2" data-toggle="tab" aria-expanded="false"> Log
                                <span class="badge badge-success">3</span>
                            </a>
                        </li>
                        
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane page-quick-sidebar-chat active" id="quick_sidebar_tab_1">
                            <div class="page-quick-sidebar-list" style="position: relative; overflow: hidden; width: auto; height: 328px;"><div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list" data-height="328" data-initialized="1" style="overflow: hidden; width: auto; height: 328px;">
                                <h1 class="list-heading" style="text-align:center">โปรแกรมดนตรีไทยแสนสนุก</h1>
                                <center><div>
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="fa fa-folder-open-o"></i>
                                    </a>
                                    <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo $baseUrl."/index.php?r=project/update";?>">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="fa fa-archive"></i>
                                    </a>
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="fa fa-ban"></i>
                                    </a>
                                    <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo $baseUrl."/index.php?r=project/setting";?>">
                                        <i class="fa fa-cogs"></i>
                                    </a>
                                </div></center>
                                <ul >
                                    <li >
                                        <div>
                                            <h5>คำอธิบายโปรเจค      สุดยอด</h4>
                                        </div>
                                    </li>
                                    <li >
                                        <div>
                                            <h5>วันเริ่มต้น      12/01/2016</h4>
                                        </div>
                                    </li>
                                    <li >
                                        <div>
                                            <h5>วันสิ้นสุด      12/31/2016</h4>
                                        </div>
                                    </li>
                                    <li >
                                       <div>
                                            <h5>ผู้จัดการโครงการ     เป้ลี่ อยากมียูเอฟโอ</h4>
                                        </div>
                                    </li>
                                </ul>
                                <h3 class="list-heading">ความคิดเห็น</h3>
                                <ul class="media-list list-items">
                                    <li class="media">
                                        <img class="media-object" src="../web/assets/6df06715/img/user2-160x160.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading-sub">Lara Kunis</h4>
                                            <div > ดีมาก</div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="media-object" src="../web/assets/6df06715/img/user2-160x160.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading-sub">Ernie Kyllonen</h4>
                                             <div > ดีมาก</div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="media-object" src="../web/assets/6df06715/img/user2-160x160.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading-sub">Lisa Stone</h4>
                                              <div > ดีมาก</div>
                                        </div>
                                    </li>
                                    
                                   <div class="media">
                                   		<img class="media-object" src="../web/assets/6df06715/img/user2-160x160.jpg" alt="...">
                                         <div class="col-md-7"><input type="text" class="form-control" placeholder="แสดงความคิดเห็น"></div>
                                         <label class="col-md-2 control-label" style="align:right;">ส่ง</label>
                                   </div>
                                </ul>
                                
                            </div><div class="slimScrollBar" style="background: rgb(187, 187, 187); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 123.235px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(221, 221, 221); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                            <div class="page-quick-sidebar-item">
                                <div class="page-quick-sidebar-chat-user">
                                    <div class="page-quick-sidebar-nav">
                                        <a href="javascript:;" class="page-quick-sidebar-back-to-list">
                                            <i class="icon-arrow-left"></i>Back</a>
                                    </div>
                                    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 223px;"><div class="page-quick-sidebar-chat-user-messages" data-height="223" data-initialized="1" style="overflow: hidden; width: auto; height: 223px;">
                                        <div class="post out">
                                            <img class="avatar" alt="" src="../web/assets/6df06715/img/user2-160x160.jpg">
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Bob Nilson</a>
                                                <span class="datetime">20:15</span>
                                                <span class="body"> When could you send me the report ? </span>
                                            </div>
                                        </div>
                                        <div class="post in">
                                            <img class="avatar" alt="" src="../web/assets/6df06715/img/user2-160x160.jpg">
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Ella Wong</a>
                                                <span class="datetime">20:15</span>
                                                <span class="body"> Its almost done. I will be sending it shortly </span>
                                            </div>
                                        </div>
                                        <div class="post out">
                                            <img class="avatar" alt="" src="../web/assets/6df06715/img/user2-160x160.jpg">
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Bob Nilson</a>
                                                <span class="datetime">20:15</span>
                                                <span class="body"> Alright. Thanks! :) </span>
                                            </div>
                                        </div>
                                        <div class="post in">
                                            <img class="avatar" alt="" src="../web/assets/6df06715/img/user2-160x160.jpg">
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Ella Wong</a>
                                                <span class="datetime">20:16</span>
                                                <span class="body"> You are most welcome. Sorry for the delay. </span>
                                            </div>
                                        </div>
                                        <div class="post out">
                                            <img class="avatar" alt="" src="../web/assets/6df06715/img/user2-160x160.jpg">
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Bob Nilson</a>
                                                <span class="datetime">20:17</span>
                                                <span class="body"> No probs. Just take your time :) </span>
                                            </div>
                                        </div>
                                        <div class="post in">
                                            <img class="avatar" alt="" src="../web/assets/6df06715/img/user2-160x160.jpg">
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Ella Wong</a>
                                                <span class="datetime">20:40</span>
                                                <span class="body"> Alright. I just emailed it to you. </span>
                                            </div>
                                        </div>
                                        <div class="post out">
                                            <img class="avatar" alt="" src="../web/assets/6df06715/img/user2-160x160.jpg">
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Bob Nilson</a>
                                                <span class="datetime">20:17</span>
                                                <span class="body"> Great! Thanks. Will check it right away. </span>
                                            </div>
                                        </div>
                                        <div class="post in">
                                            <img class="avatar" alt="" src="../web/assets/6df06715/img/user2-160x160.jpg">
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Ella Wong</a>
                                                <span class="datetime">20:40</span>
                                                <span class="body"> Please let me know if you have any comment. </span>
                                            </div>
                                        </div>
                                        <div class="post out">
                                            <img class="avatar" alt="" src="../web/assets/6df06715/img/user2-160x160.jpg">
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Bob Nilson</a>
                                                <span class="datetime">20:17</span>
                                                <span class="body"> Sure. I will check and buzz you if anything needs to be corrected. </span>
                                            </div>
                                        </div>
                                    </div><div class="slimScrollBar" style="background: rgb(187, 187, 187); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 72.5971px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(234, 234, 234); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                                    <div class="page-quick-sidebar-chat-user-form">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Type a message here...">
                                            <div class="input-group-btn">
                                                <button type="button" class="btn green">
                                                    <i class="icon-paper-clip"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
                            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 402px;"><div class="page-quick-sidebar-alerts-list" data-height="402" data-initialized="1" style="overflow: hidden; width: auto; height: 402px;">
                                <h3 class="list-heading">General</h3>
                                <ul class="feeds list-items">
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-info">
                                                        <i class="fa fa-check"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> You have 4 pending tasks.
                                                        <span class="label label-sm label-warning "> Take action
                                                            <i class="fa fa-share"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> Just now </div>
                                        </div>
                                    </li>
                                    
                                    
                                    
                                    
                                  
                                 
                                </ul>
                                <h3 class="list-heading">System</h3>
                                <ul class="feeds list-items">
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-info">
                                                        <i class="fa fa-check"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> You have 4 pending tasks.
                                                        <span class="label label-sm label-warning "> Take action
                                                            <i class="fa fa-share"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> Just now </div>
                                        </div>
                                    </li>
                                   
                                    <li>
                                        <a href="javascript:;">
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-briefcase"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> IPO Report for year 2013 has been released. </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 20 mins </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div><div class="slimScrollBar" style="background: rgb(187, 187, 187); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(234, 234, 234); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                        </div>
                        
                    </div>
                </div>
            </div>
    <p align="right">
        <?= Html::a('<i class="fa fa-plus"></i> สร้างโครงการ', ['create'], ['class' => 'btn btn-success','style'=>'text-align: right;']) ?>
    </p>
   	<div class="site-index">
	<div class="box box-solid">
		<div class="box-header with-border">
		<?php $form = ActiveForm::begin(); ?>
			<div class="row">
				<div class="col-md-4">
					<?php echo Html::textInput('name', $name, ['id'=> 'project_name', 'class'=> 'form-control', 'placeholder'=> 'ชื่อโครงการ', 'onchange'=>'this.form.submit()']);?>
				</div>
				<div class="col-md-4">
					<select id="status" name="status" class="form-control input" onchange="this.form.submit()">
						<option value="" <?php if($status == "") echo "selected";?>>--ทั้งหมด--</option>
                        <option value="1" <?php if($status == 1) echo "selected";?>>เปิด</option>
						<option value="2" <?php if($status == 2) echo "selected";?>>ปิด</option>
						<option value="3" <?php if($status == 3) echo "selected";?>>ยกเลิก</option>
						<option value="4" <?php if($status == 4) echo "selected";?>>ถูกลบ</option>
					</select>
				</div>
				<div class="col-md-4">
					<?php echo Html::textInput('sort', $sort, ['id'=> 'sort', 'class'=> 'form-control', 'placeholder'=> 'จัดเรียง', 'onchange'=>'this.form.submit()']);?>
				</div>
			</div>
		<?php ActiveForm::end(); ?>
		</div>
	</div>
	<?php $count = 0; ?>
	<?php foreach ($value as $field): ?>
	<?php $count++; ?>
	<?php if($count == 1){?>
		<div class="row">
		<?php } ?>
			<div class="col-md-4">
				<div class="box box-solid">
				<a href="<?php echo $baseUrl."/index.php?r=task"?>"?>  
					<div class="box-header with-border box-height">
						<div class="text-right">
							<?php echo $lebel[$field->status]; ?>
						</div>
						<div class="text-left">
							<?php echo $field->project_name; ?>
						</div>
					</div></a>
					
					<div class="box-body-height">
						<div class="">
							<div class="text-right">
								<a href="javascript:;" class="dropdown dropdown-extended quick-sidebar-toggler">
									<span>รายละเอียด</span>
									<i class="fa fa-angle-right"></i>&nbsp;
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php if($count == 3 ){ $count = 0;?>
		</div>
		<?php } ?>
	<?php endforeach; ?>
	</div>
	
</div>
