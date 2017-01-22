<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Team;
use yii\widgets\ActiveForm;
use backend\assets\indextadk;

$baseUrl = \Yii::getAlias('@web');
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ทีม';
$this->params['breadcrumbs'][] = $this->title;
indextadk::register ( $this );

?>

<div class="team-index">
<div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">
            <a href="javascript:;" class="page-quick-sidebar-toggler">
                <i class="icon-login"></i>
            </a>
                <div class="page-quick-sidebar">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab" aria-expanded="true"> Team
                                
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
                                <h1 class="list-heading" style="text-align:center">ทีมทดสอบ</h1>
                                <center><div>
                                 
                                    <a class="btn btn-circle btn-icon-only btn-default" href="http://localhost/project-management/backend/web/index.php?r=team/update">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                   
                                </div></center>
                                <ul >
                                    <li >
                                        
                                        
                                        <div>
                                            <h5>คำอธิบายทีม      สุดยอด</h4>
                                           
                                        </div>
                                    </li>
                                    <li >
                                        <div>
                                            <h5>จำนวนสมาชิก      50</h4>
                                           
                                        </div>
                                    </li>
                                    <li >
                                        <div>
                                            <h5>วันที่สร้าง        12/31/2016</h4>
                                           
                                        </div>
                                    </li>
                                   
                                </ul>
                               
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
        <?= Html::a('<i class="fa fa-plus"></i> สร้างทีม', ['create'], ['class' => 'btn btn-success','style'=>'text-align: right;']) ?>
    </p>
   	<div class="site-index">
	<div class="box box-solid">
		<div class="box-header with-border">
		<?php $form = ActiveForm::begin(); ?>
			<div class="row">
				<div class="col-md-4">
					<?php echo Html::textInput('name', $name, ['id'=> 'team_name', 'class'=> 'form-control', 'placeholder'=> 'ชื่อทีม', 'onchange'=>'this.form.submit()']);?>
				</div>
				<div class="col-md-4">
					<select id="status" name="status" class="form-control input" onchange="this.form.submit()">
						<option value="" >--ทั้งหมด--</option>
                        <option value="1">เปิด</option>
						<option value="2" >ปิด</option>
						<option value="3" >ยกเลิก</option>
						<option value="4" >ถูกลบ</option>
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
				<a href="http://localhost/project-management/backend/web/index.php?r=team/view"?>  
					<div class="box-header with-border box-height">
						
						<div class="text-left">
							<?php echo $field->team_name; ?>
						</div>
					</div></a>
					
					<div class="box-body-height">
						<div class="">
							<div class="text-right">
								<a href="javascript:;" class="dropdown dropdown-extended quick-sidebar-toggler">
									<span>รายละเอียด</span>
									<i class="fa fa-angle-right"></i>
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
