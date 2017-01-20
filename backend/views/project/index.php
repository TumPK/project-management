<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Project;
use yii\widgets\ActiveForm;

$baseUrl = \Yii::getAlias('@web');
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'โครงการ';
$this->params['breadcrumbs'][] = $this->title;

include 'extend.php';
?>

<div class="project-index">
    <p align="right">
        <?= Html::a('<i class="fa fa-plus"></i> สร้างโครงการ', ['create'], ['class' => 'btn btn-success','style'=>'text-align: right;']) ?>
    </p>
   	<div class="site-index">
	<div class="box box-solid">
		<div class="box-header with-border">
		<?php $form = ActiveForm::begin(); ?>
			<div class="row">
				<div class="col-md-4">
					<?php echo Html::textInput('name', $name, ['id'=> 'project_name', 'class'=> 'form-control', 'placeholder'=> 'ชื่อโครงการ', 'onchange'=>'this.form.submit()']);?>
				</div>
				<div class="col-md-4">
					<select id="status" name="status" class="form-control input" onchange="this.form.submit()">
						<option value="" <?php if($status == "") echo "selected";?>>--ทั้งหมด--</option>
                        <option value="1" <?php if($status == 1) echo "selected";?>>เปิด</option>
						<option value="2" <?php if($status == 2) echo "selected";?>>ปิด</option>
						<option value="3" <?php if($status == 3) echo "selected";?>>ยกเลิก</option>
						<option value="4" <?php if($status == 4) echo "selected";?>>ถูกลบ</option>
					</select>
				</div>
				<div class="col-md-4">
					<?php echo Html::textInput('sort', $sort, ['id'=> 'sort', 'class'=> 'form-control', 'placeholder'=> 'จัดเรียง', 'onchange'=>'this.form.submit()']);?>
				</div>
			</div>
		<?php ActiveForm::end(); ?>
		</div>
	</div>
	<?php $count = 0; ?>
	<?php foreach ($value as $field): ?>
	<?php $count++; ?>
	<?php if($count == 1){?>
		<div class="row">
		<?php } ?>
			<div class="col-md-4">
				<div class="box box-solid">
					<div class="box-header with-border box-height">
						<div class="text-right">
							<?php echo $lebel[$field->status]; ?>
						</div>
						<div class="text-left">
							<?php echo $field->project_name; ?>
						</div>
					</div>
					<div class="box-body-height">
						<div class="">
							<div class="text-right">
								<a class="btn btn-circle btn-icon-only" href="#">
									<span>รายละเอียด</span>
									<i class="fa fa-angle-right"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php if($count == 3 ){ $count = 0;?>
		</div>
		<?php } ?>
	<?php endforeach; ?>
	</div>
	
</div>
