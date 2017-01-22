<?php

use yii\helpers\Html;

use backend\assets\createTaskAsset;


/* @var $this yii\web\View */
/* @var $model backend\models\Task */
createTaskAsset::register ( $this );


$this->title = 'สร้างทีม';
$this->params['breadcrumbs'][] = ['label' => 'ทีม', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;



?>
<div class="team-create">

    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <!-- BEGIN PORTLET-->
                            <div class="portlet light bordered" id="form_wizard_1">
                                <div class="portlet-body form">
                                    <form action="#" class="form-horizontal" id="submit_form" method="POST" novalidate="novalidate">
                                        <div class="form-wizard">
                                            <div class="form-body">
                                                <ul class="nav nav-pills nav-justified steps">
                                                    <li class="active">
                                                        <a href="#tab1" data-toggle="tab" class="step" aria-expanded="true">
                                                            <span class="number"> 1 </span>
                                                            <span class="desc">
                                                                <i class="fa fa-check"></i> ข้อมูลพื้นฐานทีม </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab2" data-toggle="tab" class="step">
                                                            <span class="number"> 2 </span>
                                                            <span class="desc">
                                                                <i class="fa fa-check"></i> สมาชิกในทีม </span>
                                                        </a>
                                                    </li>
                                                    
                                                    
                                                </ul>
                                                <div id="bar" class="progress progress-striped" role="progressbar">
                                                    <div class="progress-bar progress-bar-success" style="width: 25%;"> </div>
                                                </div>
                                                <div class="tab-content">
                                                    <div class="alert alert-danger display-none">
                                                        <button class="close" data-dismiss="alert"></button> You have some form errors. Please check below. </div>
                                                    <div class="alert alert-success display-none">
                                                        <button class="close" data-dismiss="alert"></button> Your form validation is successful! </div>
                                                    <div class="tab-pane active" id="tab1">
                                                        
                                                        <div class="portlet-body">
                                    <div class="row">
                                        <label class="col-md-3 control-label" style="align:right;">ชื่อทีม<span style="color:red;"> * </span></label>
                                        <div class="col-md-6"><input type="text" class="form-control" placeholder="ชื่อโครงการ"></div>
                                    </div>
                                    <p></p>
                                    <div class="row">
                                        <label class="col-md-3 control-label" style="align:right;">คำอธิบาย</label>
                                        <div class="col-md-6">
                                            <textarea class="form-control" rows="4" placeholder="คำอธิบาย"></textarea>
                                        </div>
                                    </div>
                                      </div>
                                    
                                                    </div>
                                                    
                                                       
                         <div class="tab-pane" id="tab2">
                         <div class="row">
                        
						<div class="col-md-12" >
						<div class="col-md-8" >
						<ul class="nav nav-tabs">
						
						<li> สมาชิก </li>
						 </ul>
						
 
                           
                            
                                  <div class="row">
                                        <div class="col-md-8">
                                        
										<div class="col-md-8">
                                             <input id="mepEmnNo" name="mepEmnNo" type="text" placeholder="ชื่อ-สกุล" class="form-control input-circle">
                                       </div>
											
                                        
                                        
                                        </div>
                                   </div>
                               <br><br>
                                 <div class="col-md-8">
                                    <table  width="100%" >
                                        <thead>
                                            <tr>
                                                <th >ชื่อ-นามสกุล</th>
                                                <th ></th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr  height=70>
                                                
                                                <td>เจนสันต์ ริยาพันธ์</td>
											    
                                               
                                              <td width="30%" align="right">
                                              <a href="javascript:;" class="btn btn-circle btn-icon-only red">
                                                                        <i class="fa fa-minus" style="font-size:20px"></i>
                                                                    </a></td>
                                            </tr>
											<tr height=70>
                                                
                                                <td>กฤษต เหนือคลอง</td>
												
                                                
                                               
                                                <td width="30%" align="right">
                                              <a href="javascript:;" class="btn btn-circle btn-icon-only green">
                                                                        <i class="fa fa-plus" style="font-size:20px"></i>
                                                                    </a></td>
                                           
                                               
                                            </tr>
											<tr height=70>
                                                
                                                <td>ชัยสิทธิ์ ลิ่มสกุล</td>
												
                                                
										   <td width="30%" align="right">
                                              <a href="javascript:;" class="btn btn-circle btn-icon-only red">
                                                                        <i class="fa fa-minus" style="font-size:20px"></i>
                                                                    </a></td>
																	
                                            </tr>
                                            
                                        </tbody>
                                    </table>
									</div>
									
									
                                
                            
                            
                    </div>
                    
               
                
                        <div class="col-md-4">
                        <div class="portlet light portlet-fit portlet-form bordered">
                        
                        <center><h5>สมาชิกภายในทีม</h5></center>
               			<table  width="100%">
                                        <thead>
                                            <tr>
                                                <th ></th>
                                                <th ></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            
											<tr height=50>
                                       
                                               <td style="text-align:center"><input type="checkbox" name="checkbox-1" id="checkbox-1" checked/></td>
                                                                    
                                           <td>เจนสันต์ ริยาพันธ์ <i class="fa fa-user" style="color:#32c5d2"></i></td>
                                               
                                            </tr>
											<tr height=50>
                                       
										   <td style="text-align:center"><input type="checkbox" name="checkbox-1" id="checkbox-1" checked/></td>
													<td>ชัยสิทธิ์ ลิ่มสกุล <i class="fa fa-user" style="color:#32c5d2"></i></td>				
                                            </tr>
                                            
                                        </tbody>
                                    </table>
               </div>
                
           </div></div></div>
        
    
                                                    </div>
                                                   
                                                   
                                            
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <a href="javascript:;" class="btn default button-previous disabled" style="display: none;">
                                                            <i class="fa fa-angle-left"></i> กลับ </a>
                                                        <a href="javascript:;" class="btn btn-outline green button-next"> ถัดไป
                                                            <i class="fa fa-angle-right"></i>
                                                        </a>
                                                        <a href="javascript:;" class="btn green button-submit" style="display: none;"> บันทึก
                                                            <i class="fa fa-check"></i>
                                                        </a>
                                                    </div></div>
                                                </div>
                                            </div></div>
                                        </div>
                                    </form></div>
                                </div>
                            </div>
                        </div>

</div>
