<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Category;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    

    <p>
        <?= Html::a('Create Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
   <table>
    <thead>
                                            <tr>
                                                <th>ประเภท</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach( $dataProvider as $category) :?>
                                            <tr>
                                                	
                                                <td><?php echo $category->category_name ?></td>
											    <td><?php echo $category->description ?>   </td>
                                                <td> <?php echo $category->status ?>        </td>
                                            </tr>
                                            <?php endforeach;?>
                                            </table>
                                            </table>
</div>
