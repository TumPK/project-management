<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Role;
use backend\assets\indextadk;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
indextadk::register ( $this );
$this->title = 'บทบาท';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="role-index">

    

    <p>
       <a class="btn btn-success" data-toggle="modal" href="#createrole"> <span>สร้างบทบาท</span></a> 
    </p>
    <div class="portlet light bordered">
                           
                           
      <table  width="100%" >
    <thead>
                                            <tr height=50>
                                                <th>ชื่อบทบาท</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                       
                                            <tr height=50>
                                                	
                                                <td>ผู้ดูแลระบบ</td>
											    <td>รายละเอียด</td>
                                                <td> 
                                             			   เปิด
                                                       </td>
                                            <td width="10%">
                                            <a class="btn btn-circle btn-icon-only btn-default" data-toggle="modal" href="#deleterole"> 
                                             
                                        <i class="fa fa-folder-open-o"></i>
                                    </a>
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    </td>
                                    </tr>
                                      <tr height=50>
                                                	
                                                <td>ผู้ใช้งานทั่วไป</td>
											    <td>รายละเอียด</td>
                                                <td> 
                                             			   เปิด
                                                       </td>
                                            <td width="10%">
                                            <a class="btn btn-circle btn-icon-only btn-default" data-toggle="modal" href="#deleterole"> 
                                             
                                        <i class="fa fa-folder-open-o"></i>
                                    </a>
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    </td>
                                    </tr>
                                      <tr height=50>
                                                	
                                                <td>หัวหน้าแผนก</td>
											    <td>รายละเอียด</td>
                                                <td> 
                                             			   เปิด
                                                       </td>
                                            <td width="10%">
                                            <a class="btn btn-circle btn-icon-only btn-default" data-toggle="modal" href="#deleterole"> 
                                             
                                        <i class="fa fa-folder-open-o"></i>
                                    </a>
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    </td>
                                    </tr>
                                            
                                            </tbody>
                                            </table>
    
                                            
                                            
</div></div>
 
		<!-- /.modal -->
                                    <div class="modal fade" id="createrole" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title">สร้างบทบาท</h4>
                                                </div>
                                        <div class="modal-body">
                                              <div class="row">
                                        <label class="col-md-3 control-label" style="align:right;">ชื่อบทบาท<span style="color:red;"> * </span></label>
                                        <div class="col-md-6"><input type="text" class="form-control" placeholder="ชื่อประเภท"></div>
                                    </div>
                                    
			            				</div>
			            				
                                       
                                                <div class="modal-footer">
                                               
                                                    <button type="button" data-dismiss="modal" class="btn green">ยกเลิก</button>
                                                    <button id="saveEdit" type="button" class="btn green" >สร้าง</button>
                                                
                                                </div>
                                          </div>
                                        </div>
                                    </div>
                      <!-- /.modal -->  
                      <!-- /.modal -->
                                    <div class="modal fade" id="deleterole" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title">แก้ไขบทบาท</h4>
                                                </div>
                                        <div class="modal-body">
                                              <div class="row">
                                        <label class="col-md-3 control-label" style="align:right;">ชื่อบทบาท<span style="color:red;"> * </span></label>
                                        <div class="col-md-6"><input type="text" class="form-control" placeholder="ชื่อบทบาท"></div>
                                    </div>
                                  
			            				</div>
			            				
                                       
                                                <div class="modal-footer">
                                               
                                                    <button type="button" data-dismiss="modal" class="btn green">ยกเลิก</button>
                                                    <button id="saveEdit" type="button" class="btn green" >บันทึก</button>
                                                
                                                </div>
                                          </div>
                                        </div>
                                    </div>
                      <!-- /.modal -->                 
