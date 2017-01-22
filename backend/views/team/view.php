<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\assets\indextadk;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'สมาชิกในทีม';
$this->params['breadcrumbs'][] = ['label' => 'ทีม', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

indextadk::register ( $this );
?>
<div class="team-view">

   <div class="row">
                        <div class="col-md-12 col-sm-12">
                           
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                   <div class="row">
                                        <div class="form-group col-md-12">
										<div class="col-md-4">
                                            
											 
                                            
                                                <input id="mepEmnNo" name="mepEmnNo" type="text" placeholder="ชื่อ-สกุล" class="form-control input-circle">
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
											    
                                              <td width="5%">
                                              <!-- <p align="center"><a href="javascript:;" class="btn btn-circle btn-icon-only red">
                                                                        <i class="fa fa-times" style="font-size:20px"></i>
                                                                    </a></p> -->
                                                                </td>
                                            </tr>
											<tr height=70>
                                                
                                                <td>กฤษฎา หมัดอะดัม</td>
												
                                                
                                                <td width="10%">
                                              <p align="center"><a href="javascript:;" class="btn btn-circle btn-icon-only red">
                                                                        <i class="fa fa-times" style="font-size:20px"></i>
                                                                    </a></p></td>
                                          
                                               
                                            </tr>
											<tr height=70>
                                                
                                                <td>สากีริน ขามิ๊</td>
												
                                                
										   <td width="5%">
                                              <p align="center"><a href="javascript:;" class="btn btn-circle btn-icon-only red">
                                                                        <i class="fa fa-times" style="font-size:20px"></i>
                                                                    </a></p></td>
																	
                                            </tr>
                                            <tr height=70>
                                                
                                                <td>อัศม์เดช โส้สมัน</td>
												
                                               
										   <td width="5%">
                                              <p align="center"><a href="javascript:;" class="btn btn-circle btn-icon-only red">
                                                                        <i class="fa fa-times" style="font-size:20px"></i>
                                                                    </a></p></td>
																	
                                            </tr>
                                            <tr height=70>
                                                
                                                <td>นัทธพงศ์ ซุ่นสั้น</td>
												
                                                
										   <td width="5%">
                                              <p align="center"><a href="javascript:;" class="btn btn-circle btn-icon-only red">
                                                                        <i class="fa fa-times" style="font-size:20px"></i>
                                                                    </a></p></td>
																	
                                            </tr>
                                             <tr height=70>
                                                
                                                <td>เจนสันต์ ริยาพันธ์</td>
												
                                                
										   <td width="5%">
                                              <p align="center"><a href="javascript:;" class="btn btn-circle btn-icon-only red">
                                                                        <i class="fa fa-times" style="font-size:20px"></i>
                                                                    </a></p></td>
																	
                                            </tr>
                                             <tr height=70>
                                                
                                                <td>ชัยสิทธิ์ ลิ่มสกุล</td>
												
                                                
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

</div>
