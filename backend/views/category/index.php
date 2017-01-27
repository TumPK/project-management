<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Category;
use backend\assets\indextadk;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ประเภทโครงการ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    

    <p>
       <a class="btn btn-success" data-toggle="modal" href="#createcate"> <span>สร้างประเภท</span></a> 
    </p>
    
                           
                           
   <table  width="100%" >
    <thead>
                                            <tr height=50>
                                                <th>ประเภท</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach( $dataProvider as $category) :?>
                                            <tr height=50>
                                                	
                                                <td><?php echo $category->category_name ?></td>
											    <td><?php echo $category->description ?>   </td>
                                                <td> 
                                                <?php if ($category->status == 1):?>เปิด<?php else:?>ปิด<?php  endif;?>
                                                       </td>
                                            <td width="10%">
                                            <a class="btn btn-circle btn-icon-only btn-default" data-toggle="modal" href="#deletecate"> 
                                             
                                        <i class="fa fa-folder-open-o"></i>
                                    </a>
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    </td>
                                    </tr>
                                            <?php endforeach;?>
                                            </tbody>
                                            </table>
                                            
                                            
</div>
 
		<!-- /.modal -->
                                    <div class="modal fade" id="createcate" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title">สร้างประเภทโครงการ</h4>
                                                </div>
                                        <div class="modal-body">
                                              <div class="row">
                                        <label class="col-md-3 control-label" style="align:right;">ชื่อประเภท<span style="color:red;"> * </span></label>
                                        <div class="col-md-6"><input type="text" class="form-control" placeholder="ชื่อประเภท"></div>
                                    </div>
                                    <p></p>
                                    
                                    <p></p>
                                    <div class="row">
                                        <label class="col-md-3 control-label" style="align:right;">คำอธิบาย</label>
                                        <div class="col-md-6">
                                            <textarea class="form-control" rows="4" placeholder="คำอธิบาย"></textarea>
                                        </div>
                                    
			            				
			            				
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
                                    <div class="modal fade" id="deletecate" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title">แก้ไขประเภทโครงการ</h4>
                                                </div>
                                        <div class="modal-body">
                                              <div class="row">
                                        <label class="col-md-3 control-label" style="align:right;">ชื่อประเภท<span style="color:red;"> * </span></label>
                                        <div class="col-md-6"><input type="text" class="form-control" placeholder="ชื่อประเภท"></div>
                                    </div>
                                    <p></p>
                                    
                                    <p></p>
                                    <div class="row">
                                        <label class="col-md-3 control-label" style="align:right;">คำอธิบาย</label>
                                        <div class="col-md-6">
                                            <textarea class="form-control" rows="4" placeholder="คำอธิบาย"></textarea>
                                        </div>
                                    
			            				
			            				
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
