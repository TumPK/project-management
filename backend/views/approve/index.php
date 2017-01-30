<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\assets\indextadk;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
indextadk::register ( $this );
$this->title = 'อนุมัติงาน';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-index">

   
    
              <div class="portlet light bordered">               
                           
   <table  width="100%" >
    <thead>
                                            <tr height=50>
                                                <th>ประเภท</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                            <tr height=50>
                                                	
                                                <td>Task1</td>
											  
                                                <td> 
                                               
                                                       </td>
                                            <td width="10%">
                                            <a class="btn btn-circle btn-icon-only btn-default" data-toggle="modal" href="#approvetask"> 
                                             
                                        <i class="fa fa-pencil"></i>
                                    </a>
                               
                                    </td>
                                    </tr>
                                    <tr height=50>
                                                	
                                                <td>Task2</td>
											  
                                                <td> 
                                               
                                                       </td>
                                            <td width="10%">
                                            <a class="btn btn-circle btn-icon-only btn-default" data-toggle="modal" href="#approvetask"> 
                                             
                                        <i class="fa fa-pencil"></i>
                                    </a>

                                    </td>
                                    </tr>
                                            
                                            </tbody>
                                            </table>
                                            
                                            
</div></div>
 
		<!-- /.modal -->
                                    <div class="modal fade" id="approvetask" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title">อนุมัติงาน  Task1</h4>
                                                </div>
                                        <div class="modal-body">
                                                
                                                        <div class="row">
                                                        <div class="col-md-4"></div>
                                                        <div class="col-md-4">
                                                 <span>อนุมัติ  </span><input type="radio" name="checkbox-1" id="checkbox-1" />
                                                  <span>    ไม่อนุมัติ  </span><input type="radio" name="checkbox-1" id="checkbox-1" /></div>
                                                        </div>
                                                                                                             
                                                   <br>  <br>
                                                   
                                                     <div class="row">
                                                 <label class="col-md-3 control-label" style="align:right;">ความคิดเห็น</label>
                                               
                                                <div class="col-md-6">
                                            		<textarea class="form-control" rows="4" placeholder="ความคิดเห็น"></textarea>
                                       			 </div>
                                               </div>    
                                                    
                                                   
                                    
			            			
			            				
                                       
                                                <div class="modal-footer">
                                               
                                                    <button type="button" data-dismiss="modal" class="btn green">ยกเลิก</button>
                                                    <button id="saveEdit" type="button" class="btn green" >ตกลง</button>
                                                
                                                </div>
                                          </div>
                                        </div>
                                    </div>
                      <!-- /.modal -->  
                          