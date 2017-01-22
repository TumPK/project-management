<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\assets\indextadk;
use yii\widgets\ActiveForm;
$baseUrl = \Yii::getAlias('@web');
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'MyTasks';
$this->params['breadcrumbs'][] = $this->title;
indextadk::register ( $this );
?>
<div class="task-index">

     

    <p>
        <?= Html::a('Create Task', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
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
                                <h1 class="list-heading" style="text-align:center">Task1</h1>
                                <center><div>
                                 
                                    <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo $baseUrl."/index.php?r=task/update";?>">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                  
                                </div></center>
                                <ul >
                                    <li >
                                        <div>
                                            <h5>คำอธิบายงาน      สุดยอด</h4>
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
                                            <h5>ผู้รับผิดชอบ     เป้ลี่ อยากมียูเอฟโอ</h4>
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
    <div class="box box-solid">
		<div class="box-header with-border">
		<?php $form = ActiveForm::begin(); ?>
			<div class="row">
				<div class="col-md-4">
					   <input class="form-control"  placeholder="ชื่องาน"></input>
				</div>
				<div class="col-md-4">
					<select id="status" name="status" class="form-control input" onchange="this.form.submit()">
						<option value="" >--สถานะ--</option>
                        <option value="1" >เปิด</option>
						<option value="2" >ปิด</option>
						<option value="3" >ยกเลิก</option>
						<option value="4" >ถูกลบ</option>
					</select>
				</div>
				<div class="col-md-4">
					   <input class="form-control" placeholder="จัดเรียง"></input>
				</div>
			</div>
		<?php ActiveForm::end(); ?>
		</div>
	</div>
    <div class="col-md-12">
    
  	 <div class="col-md-4">
  	
    <div class="portlet light bordered">
           <p align="center">    TO DO</p>
                
                  <a href="javascript:;" class="dropdown dropdown-extended quick-sidebar-toggler">
                  <div class="dashboard-stat2 bordered blue">
                           
                             <div class="display"> 
                                    <div class="number">
                                        
                                            <span>task1</span>
                                            
                                    
                                       
                                    </div>
                                   
                                    
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 76%;" class="progress-bar progress-bar-success green-sharp">
                                            <span class="sr-only">76% progress</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> progress </div>
                                        <div class="status-number"> 76% </div>
                                    </div>
                                </div>
                            </div></a>
                            <div class="dashboard-stat2 bordered blue">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-green-sharp">
                                            <span>task2</span>
                                            
                                        </h3>
                                        
                                    </div>
                                    
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 76%;" class="progress-bar progress-bar-success green-sharp">
                                            <span class="sr-only">76% progress</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> progress </div>
                                        <div class="status-number"> 76% </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-stat2 bordered blue">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-green-sharp">
                                            <span>task3</span>
                                            
                                        </h3>
                                        
                                    </div>
                                    
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 76%;" class="progress-bar progress-bar-success green-sharp">
                                            <span class="sr-only">76% progress</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> progress </div>
                                        <div class="status-number"> 76% </div>
                                    </div>
                                </div>
                            </div>
                            </div></div>
       <div class="col-md-4">
  	
    <div class="portlet light bordered">
    			<p align="center">  DOING</p>
                    <div class="dashboard-stat2 bordered blue">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-green-sharp">
                                            <span>task1</span>
                                            
                                        </h3>
                                        
                                    </div>
                                    
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 76%;" class="progress-bar progress-bar-success green-sharp">
                                            <span class="sr-only">76% progress</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> progress </div>
                                        <div class="status-number"> 76% </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-stat2 bordered blue">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-green-sharp">
                                            <span>task2</span>
                                            
                                        </h3>
                                        
                                    </div>
                                    
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 76%;" class="progress-bar progress-bar-success green-sharp">
                                            <span class="sr-only">76% progress</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> progress </div>
                                        <div class="status-number"> 76% </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-stat2 bordered blue">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-green-sharp">
                                            <span>task3</span>
                                            
                                        </h3>
                                        
                                    </div>
                                    
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 76%;" class="progress-bar progress-bar-success green-sharp">
                                            <span class="sr-only">76% progress</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> progress </div>
                                        <div class="status-number"> 76% </div>
                                    </div>
                                </div>
                            </div>
           				 </div>
          			  </div>
             <div class="col-md-4">
   			 <div class="portlet light bordered">
              <p align="center">   DONE</p>
                
                   <div class="dashboard-stat2 bordered blue">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-green-sharp">
                                            <span>task1</span>
                                            
                                        </h3>
                                        
                                    </div>
                                    
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 76%;" class="progress-bar progress-bar-success green-sharp">
                                            <span class="sr-only">76% progress</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> progress </div>
                                        <div class="status-number"> 76% </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-stat2 bordered blue">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-green-sharp">
                                            <span>task2</span>
                                            
                                        </h3>
                                        
                                    </div>
                                    
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 76%;" class="progress-bar progress-bar-success green-sharp">
                                            <span class="sr-only">76% progress</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> progress </div>
                                        <div class="status-number"> 76% </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-stat2 bordered blue">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-green-sharp">
                                            <span>task3</span>
                                            
                                        </h3>
                                        
                                    </div>
                                    
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 76%;" class="progress-bar progress-bar-success green-sharp">
                                            <span class="sr-only">76% progress</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> progress </div>
                                        <div class="status-number"> 76% </div>
                                    </div>
                                </div>
            </div>
            </div>
            </div>
    </div>
    
</div>
