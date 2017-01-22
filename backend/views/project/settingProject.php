<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\assets\indextadk;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ตั้งค่าโครงการ';
$this->params['breadcrumbs'][] = $this->title;
indextadk::register ( $this );
?>
<div class="project-setting">
<div class="tabbable-line boxless tabbable-reversed">
						
						<div class="col-md-12" >
						<ul class="nav nav-tabs">
						<li class="active"><a href="#tab_0" data-toggle="tab" aria-expanded="true"> กำหนดประเภท </a></li>
						<li><a href="#tab_1" data-toggle="tab" > กำหนดสิทธิ์ </a></li>
						 </ul>
						</div></div>
						
						<div class="tab-content">
				
					<div id="tab_0" class="tab-pane active">
                        <div class="page-toolbar">
                           
                        </div>
                        <div class="row">
                        <div class="col-md-12 col-sm-12">
                           
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                   <div class="row">
                                        <div class="form-group col-md-12">
										<div class="col-md-4">
                                            
											 
                                            
                                                <input id="mepEmnNo" name="mepEmnNo" type="text" placeholder="ชื่อ-สกุล" class="form-control input-circle">
                                       </div>
                                       <div class="form-group col-md-4">
											
											 <center><h4>กำหนดประเภทพนักงาน</h4></center>
                                        
                                        
                                        </div>
                                   </div>
                                </div>
                                <div class="portlet-body">
                                    <table  width="100%" >
                                        <thead>
                                            <tr>
                                                <th>ชื่อ-นามสกุล</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr  height=70>
                                                
                                                <td>ประทีป คงกล้า</td>
											    <td width="18%">
                                                <select class="form-control" name="delivery" disabled>
                                                    <option value=""></option>
                                                    <option value="1" selected>ผู้ดูแลโครงการ</option>
                                                    <option value="2">ผู้เยี่ยมชมโครงการ</option>
                                                    <option value="3">พนักงาน</option>
                                                </select>
                                             </td>
                                              <td width="5%">
                                              <!-- <p align="center"><a href="javascript:;" class="btn btn-circle btn-icon-only red">
                                                                        <i class="fa fa-times" style="font-size:20px"></i>
                                                                    </a></p> -->
                                                                </td>
                                            </tr>
											<tr height=70>
                                                
                                                <td>กฤษฎา หมัดอะดัม</td>
												
                                                <td width="15%">
                                                <select class="form-control" name="delivery">
                                                    <option value=""></option>
                                                    <option value="1">ผู้ดูแลโครงการ</option>
                                                    <option value="2" selected>ผู้เยี่ยมชมโครงการ</option>
                                                    <option value="3">พนักงาน</option>
                                                </select>
                                                <td width="10%">
                                              <p align="center"><a href="javascript:;" class="btn btn-circle btn-icon-only red">
                                                                        <i class="fa fa-times" style="font-size:20px"></i>
                                                                    </a></p></td>
                                          
                                               
                                            </tr>
											<tr height=70>
                                                
                                                <td>สากีริน ขามิ๊</td>
												
                                                <td width="15%">
												
                                                <select class="form-control" name="delivery">
                                                    <option value=""></option>
                                                    <option value="1">ผู้ดูแลโครงการ</option>
                                                    <option value="2">ผู้เยี่ยมชมโครงการ</option>
                                                    <option value="3" selected>พนักงาน</option>
                                                </select>
												
                                               
                                           </td>
										   <td width="5%">
                                              <p align="center"><a href="javascript:;" class="btn btn-circle btn-icon-only red">
                                                                        <i class="fa fa-times" style="font-size:20px"></i>
                                                                    </a></p></td>
																	
                                            </tr>
                                            <tr height=70>
                                                
                                                <td>อัศม์เดช โส้สมัน</td>
												
                                                <td width="15%">
												
                                                <select class="form-control" name="delivery">
                                                    <option value=""></option>
                                                    <option value="1">ผู้ดูแลโครงการ</option>
                                                    <option value="2">ผู้เยี่ยมชมโครงการ</option>
                                                    <option value="3" selected>พนักงาน</option>
                                                </select>
												
                                               
                                           </td>
										   <td width="5%">
                                              <p align="center"><a href="javascript:;" class="btn btn-circle btn-icon-only red">
                                                                        <i class="fa fa-times" style="font-size:20px"></i>
                                                                    </a></p></td>
																	
                                            </tr>
                                            <tr height=70>
                                                
                                                <td>นัทธพงศ์ ซุ่นสั้น</td>
												
                                                <td width="15%">
												
                                                <select class="form-control" name="delivery">
                                                    <option value=""></option>
                                                    <option value="1">ผู้ดูแลโครงการ</option>
                                                    <option value="2">ผู้เยี่ยมชมโครงการ</option>
                                                    <option value="3" selected>พนักงาน</option>
                                                </select>
												
                                               
                                           </td>
										   <td width="5%">
                                              <p align="center"><a href="javascript:;" class="btn btn-circle btn-icon-only red">
                                                                        <i class="fa fa-times" style="font-size:20px"></i>
                                                                    </a></p></td>
																	
                                            </tr>
                                             <tr height=70>
                                                
                                                <td>เจนสันต์ ริยาพันธ์</td>
												
                                                <td width="15%">
												
                                                <select class="form-control" name="delivery">
                                                    <option value=""></option>
                                                    <option value="1">ผู้ดูแลโครงการ</option>
                                                    <option value="2">ผู้เยี่ยมชมโครงการ</option>
                                                    <option value="3" selected>พนักงาน</option>
                                                </select>
												
                                               
                                           </td>
										   <td width="5%">
                                              <p align="center"><a href="javascript:;" class="btn btn-circle btn-icon-only red">
                                                                        <i class="fa fa-times" style="font-size:20px"></i>
                                                                    </a></p></td>
																	
                                            </tr>
                                             <tr height=70>
                                                
                                                <td>ชัยสิทธิ์ ลิ่มสกุล</td>
												
                                                <td width="15%">
												
                                                <select class="form-control" name="delivery">
                                                    <option value=""></option>
                                                    <option value="1">ผู้ดูแลโครงการ</option>
                                                    <option value="2">ผู้เยี่ยมชมโครงการ</option>
                                                    <option value="3" selected>พนักงาน</option>
                                                </select>
												
                                               
                                           </td>
										   <td width="5%">
                                              <p align="center"><a href="javascript:;" class="btn btn-circle btn-icon-only red">
                                                                        <i class="fa fa-times" style="font-size:20px"></i>
                                                                    </a></p></td>
																	
                                            </tr>
                                           
                                        </tbody>
                                    </table>
									<div class="col-md-12">
									
    									<div class="col-md-6">
    									   <a href="ui_project.html" type="button" class="btn green">กลับ</a>
                                        </div>
    									
    									<div class="col-md-6 text-right">
    									   <button type="button" class="btn green">บันทึก</button>
                                        </div>
									
									</div>
                                </div>
                            
                            
                        </div>
                    </div>
               
                
           
        
    </div></div></div>
	    <div id="tab_1" class="tab-pane">
       
                        <div class="page-toolbar">
                           
                        </div>
                        
                    
                    
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                           
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                     <div class="row">
                                        <div class="form-group col-md-12">
										<div class="col-md-4">
                                                <input id="mepEmnNo" name="mepEmnNo" type="text" placeholder="ชื่อ-สกุล" class="form-control input-circle">
                                         </div>
                                         <div class="form-group col-md-4">
											
											 <center><h4>กำหนดสิทธิ์พนักงาน</h4></center>
                                        
                                        
                                        </div>
                                   </div>
                                </div>
                                </div>
                                <div class="portlet-body">
                                    <table  width="100%" >
                                        <thead>
                                            <tr>
                                                <th>ชื่อ-นามสกุล</th>
                                             
                                                
                                              
												  
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr height=70>
                                                <td><p valign="middle">สากีริน ขามิ๊</p></td>
                                                <td width="5%"><p valign="middle"><a class="btn btn-circle btn-icon-only btn-default" data-toggle="modal" href="#responsive"> <i class="icon-wrench"></i></a> </p></td>
                                               
                                            </tr>
											<tr height=70>
                                                <td><p valign="middle">อัศม์เดช โส้สมัน</p></td>
                                                <td width="5%"><p valign="middle"><a class="btn btn-circle btn-icon-only btn-default" data-toggle="modal" href="#responsive"> <i class="icon-wrench"></i></a> </p></td>
                                            </tr>
											<tr height=70>
                                                <td><p valign="middle">นัทธพงศ์ ซุ่นสั้น</p></td>
                                                <td width="5%"><p valign="middle"><a class="btn btn-circle btn-icon-only btn-default" data-toggle="modal" href="#responsive"> <i class="icon-wrench"></i></a> </p></td>
                                               
                                            </tr>
                                            <tr height=70>
                                                <td><p valign="middle">เจนสันต์ ริยาพันธ์</p></td>
                                                <td width="5%"><p valign="middle"><a class="btn btn-circle btn-icon-only btn-default" data-toggle="modal" href="#responsive"> <i class="icon-wrench"></i></a> </p></td>
                                               
                                            </tr>
                                            <tr height=70>
                                                <td><p valign="middle">ชัยสิทธิ์ ลิ่มสกุล</p></td>
                                                <td width="5%"><p valign="middle"><a class="btn btn-circle btn-icon-only btn-default" data-toggle="modal" href="#responsive"> <i class="icon-wrench"></i></a> </p></td>
                                               
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                    <p ><a href="ui_project.html"><button id="saveEdit" type="button" class="btn green">กลับ</button></a></p>
                                </div>
                            </div>
                            <!-- END PORTLET-->
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
       
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
    
	
                        
        
		<!-- /.modal -->
                                    <div class="modal fade" id="responsive" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title">กำหนดสิทธิ์</h4>
                                                </div>
												


                                        <div class="modal-body">
                                             <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_3">
											 <thead><tr>
											 <th style="text-align:center"><input type="checkbox" name="select-all" id="select-all" /></th>
											 <th style="text-align:center">ชื่อสิทธิ์</th>
											 </tr></thead>
											 <tbody>
											 <td style="text-align:center"><input type="checkbox" name="checkbox-1" id="checkbox-1" /></td>
											 <td style="text-align:center">ปิดโครงการ</td>
											</tbody>
											<tbody>
											 <td style="text-align:center"><input type="checkbox" name="checkbox-2" id="checkbox-2" /></td>
											 <td style="text-align:center">อนุมัติปิดงาน</td>
											</tbody>
											<tbody>
											 <td style="text-align:center"><input type="checkbox" name="checkbox-3" id="checkbox-3" /></td>
											 <td style="text-align:center">แก้ไขโครงการ</td>
											</tbody>
											<tbody>
											 <td style="text-align:center"><input type="checkbox" name="checkbox-4" id="checkbox-4" /></td>
											 <td style="text-align:center">ลบโครงการ</td>
											</tbody>
											<tbody>
											 <td style="text-align:center"><input type="checkbox" name="checkbox-5" id="checkbox-5" /></td>
											 <td style="text-align:center">ตั้งค่าโครงการ</td>
											</tbody></table>
								                
		                                   </div>
                                                <div class="modal-footer">
                                               
                                                    <button type="button" data-dismiss="modal" class="btn green">ยกเลิก</button>
                                                    <button type="button" data-dismiss="modal" class="btn green" >บันทึก</button>
                                                
                                                </div>
                                          
                                        </div>
                                    </div>
       
                                    </div> </div>