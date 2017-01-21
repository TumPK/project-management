<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\assets\indextadk;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tasks';
$this->params['breadcrumbs'][] = $this->title;
indextadk::register ( $this );
?>
<div class="task-index">

     

    <p>
        <?= Html::a('Create Task', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <div class="col-md-12">
    
  	 <div class="col-md-4">
  	
    <div class="portlet light bordered">
           <p align="center">    TO DO</p>
                
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
