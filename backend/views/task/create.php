<?php

use yii\helpers\Html;
use backend\assets\createTaskAsset;


/* @var $this yii\web\View */
/* @var $model backend\models\Task */
createTaskAsset::register ( $this );
$this->title = '';


?>
<div class="task-create">


   <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <!-- BEGIN PORTLET-->
                            <div class="portlet light bordered" id="form_wizard_1">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class=" icon-layers font-red"></i>
                                        <span class="caption-subject font-red bold uppercase"> สร้างงาน -
                                            <span class="step-title"> Step 1 of 3 </span>
                                        </span>
                                    </div>
                                    
                                </div>
                                <div class="portlet-body form">
                                    <form action="#" class="form-horizontal" id="submit_form" method="POST" novalidate="novalidate">
                                        <div class="form-wizard">
                                            <div class="form-body">
                                                <ul class="nav nav-pills nav-justified steps">
                                                    <li class="active">
                                                        <a href="#tab1" data-toggle="tab" class="step" aria-expanded="true">
                                                            <span class="number"> 1 </span>
                                                            <span class="desc">
                                                                <i class="fa fa-check"></i> ข้อมูลพื้นฐานโครงการ </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab2" data-toggle="tab" class="step">
                                                            <span class="number"> 2 </span>
                                                            <span class="desc">
                                                                <i class="fa fa-check"></i> สมาชิกในโครงการ </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab3" data-toggle="tab" class="step active">
                                                            <span class="number"> 3 </span>
                                                            <span class="desc">
                                                                <i class="fa fa-check"></i> สร้างทีมในโครงการ </span>
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
                                        <label class="col-md-3 control-label" style="align:right;">ชื่อโครงการ<span style="color:red;"> * </span></label>
                                        <div class="col-md-6"><input type="text" class="form-control" placeholder="ชื่อโครงการ"></div>
                                    </div>
                                    <p></p>
                                    <div class="row">
                                        <label class="col-md-3 control-label" style="align:right;">วันที่เริ่มต้น<span style="color:red;"> * </span></label>
                                        <div class="col-md-6"><input class="form-control form-control-inline date-picker" size="16" type="text" value="" placeholder="วันที่เริ่มต้น"/></div>
                                    </div>
                                    <p></p>
                                    <div class="row">
                                        <label class="col-md-3 control-label" style="align:right;">วันที่สิ้นสุด<span style="color:red;"> * </span></label>
                                        <div class="col-md-6"><input class="form-control form-control-inline date-picker" size="16" type="text" value="" placeholder="วันที่สิ้นสุด"/></div>
                                    </div>
                                    <p></p>
                                    <div class="row">
                                        <label class="col-md-3 control-label" style="align:right;">คำอธิบาย</label>
                                        <div class="col-md-6">
                                            <textarea class="form-control" rows="4" placeholder="คำอธิบาย"></textarea><br>
                                        </div>
                                    </div>
                                    <p></p>
                                    <div class="row">
                                       <label class="col-md-3 control-label" style="align:right;">ประเภทโครงการ<span style="color:red;"> * </span></label>
                                        <div class="col-md-6">
                                            <select class="form-control">
                                            <option class="form-control"></option>
                                                <option class="form-control">โครงการ</option>
                                                <option class="form-control">อีเว้นท์</option>
                                            </select>
                                        </div>
                                    </div>
                                    <p></p>
                                    <div class="row">
                                       <label class="col-md-3 control-label" style="align:right;">แผนก</label>
                                        <div class="col-md-6">
                                            <select class="form-control">
                                            <option class="form-control"></option>
                                                <option class="form-control">วิจัยและพัฒนาเทคโนโลยี</option>
                                                <option class="form-control">บุคคล</option>
                                                <option class="form-control">บัญชี</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                                    </div>
                                                    
                                                       
                         <div class="tab-pane" id="tab2">
                         <div class="row">
                        
						<div class="col-md-12" >
						<div class="col-md-8" >
						<ul class="nav nav-tabs">
						<li class="active"><a href="#tab_0" data-toggle="tab" aria-expanded="true"> ทีม </a></li>
						<li><a href="#tab_1" data-toggle="tab" > สมาชิก </a></li>
						 </ul>
						<div class="tab-content">
								<div id="tab_0" class="tab-pane active">
                              <div class="row">
                                        <div class="col-md-8">
                                        
										<div class="col-md-8">
                                             <input id="mepEmnNo" name="mepEmnNo" type="text" placeholder="ชื่อทีม" class="form-control input-circle">
                                       </div>
											
                                        
                                        
                                        </div>
                                   </div>
                               <br><br>
                                
                                 <div class="col-md-8">
                                    <table  width="100%" >
                                        <thead>
                                            <tr>
                                                <th>ชื่อทีม</th>
                                                <th ></th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr  height=70>
                                                
                                                <td>ทีมการจัดการโปรเจค</td>
											  
                                               
                                              <td width="5%">
                                              <p align="center"><a href="javascript:;" class="btn btn-circle btn-icon-only red">
                                                                        <i class="fa fa-minus" style="font-size:20px"></i>
                                                                    </a></p></td>
                                            </tr>
											<tr height=70>
                                                
                                                <td>ทีมปฏิทิน</td>
												
                                              
                                               
                                                <td width="5%">
                                              <p align="center"><a href="javascript:;" class="btn btn-circle btn-icon-only green">
                                                                        <i class="fa fa-plus" style="font-size:20px"></i>
                                                                    </a></p></td>
                                           
                                               
                                            </tr>
											<tr height=70>
                                                
                                                <td>ทีมออกแบบ</td>
												
                                                
										   <td width="5%">
                                              <p align="center"><a href="javascript:;" class="btn btn-circle btn-icon-only green">
                                                                        <i class="fa fa-plus" style="font-size:20px"></i>
                                                                    </a></p></td>
																	
                                            </tr>
                                            
                                        </tbody>
                                    </table>
										</div>
									
									
                                </div>
 
                    
                    

	    <div id="tab_1" class="tab-pane">
 
                           
                            
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
                    </div></div>
               
                
                        <div class="col-md-4">
                        <div class="portlet light portlet-fit portlet-form bordered">
                        
                        <center><h5>พนักงานภายในโครงการ</h5></center>
               			<table  width="100%">
                                        <thead>
                                            <tr>
                                                <th ></th>
                                                <th ></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr  height=20>
                                           
                                              <td style="text-align:center"><input type="checkbox" name="checkbox-1" id="checkbox-1" checked/></td>
                                                                    <td>ทีมการจัดการโครงการ <i class="fa fa-users" style="color:green"></i>
                                                                    
                                                                    </td>
                                            </tr>
                                            <tr>
                                           
                                              <td ></td>
                                                                    <td>
                                                                    <input type="checkbox" name="checkbox-1" id="checkbox-1" checked/>ประทีป คงกล้า 
                                                                    <i class="fa fa-user" style="color:#32c5d2"></i>
                                                                    <br><input type="checkbox" name="checkbox-1" id="checkbox-1" checked/>กฤษฎา หมัดอะดัม
                                                                     <i class="fa fa-user" style="color:#32c5d2"></i>
                                                                    <br><input type="checkbox" name="checkbox-1" id="checkbox-1" checked/>สากีริน ขามิ๊
                                                                    <i class="fa fa-user" style="color:#32c5d2"></i>
                                                                    <br><input type="checkbox" name="checkbox-1" id="checkbox-1" checked/>อัศม์เดช โส้สมัน
                                                                    <i class="fa fa-user" style="color:#32c5d2"></i>
                                                                    <br><input type="checkbox" name="checkbox-1" id="checkbox-1" checked/>นัทธพงศ์ ซุ่นสั้น
                                                                    <i class="fa fa-user" style="color:#32c5d2"></i>
                                                                    </td>
                                            </tr>
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
                                                    <div class="tab-pane" id="tab3">
                                                        <div class="col-md-12" >
                                                        
                                                        <div class="row">
                                                    <div class="col-md-2" >ต้องการสร้างทีมใหม่หรือไม่ </div><div class="col-md-3" >    ต้องการ<input type="radio" name="checkbox-1" id="checkbox-1" checked/>
                                                    ไม่ต้องการ<input type="radio" name="checkbox-1" id="checkbox-1" />
                                                        </div></div>
                                                        <br>
                                                       
                                                    </div>
                                                    <div class="col-md-12" >
                                                    <div class="row">
                                                <label class="col-md-2 control-label" style="align:right;">ชื่อทีม<span style="color:red;"> * </span></label>
                                                <div class="col-md-3" >
                                                <input class="form-control form-control-inline " size="16" type="text" value="" placeholder="ชื่อทีม"/>
                                                    </div></div>
                                                     <br> <br> <br>
                                                    </div></div>
                                                   
                                            
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <a href="javascript:;" class="btn default button-previous disabled" style="display: none;">
                                                            <i class="fa fa-angle-left"></i> กลับ </a>
                                                        <a href="javascript:;" class="btn btn-outline green button-next"> ถัดไป
                                                            <i class="fa fa-angle-right"></i>
                                                        </a>
                                                        <a href="javascript:;" class="btn green button-submit" style="display: none;"> สร้าง
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