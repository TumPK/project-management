<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for collection "task".
 *
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property mixed $task_name
 * @property mixed $start_date
 * @property mixed $end_date
 * @property mixed $status
 * @property mixed $create_date
 * @property mixed $create_by
 * @property mixed $member
 * @property mixed $description
 */
class Task extends \yii\mongodb\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function collectionName()
    {
        return ['db_pm', 'task'];
    }

    /**
     * @inheritdoc
     */
    public function attributes()
    {
        return [
            '_id',
            'task_name',
            'start_date',
            'end_date',
            'status',
            'create_date',
            'create_by',
            'member',
            'description',
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['task_name', 'start_date', 'end_date', 'status', 'create_date', 'create_by', 'member', 'description'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'task_name' => 'Task Name',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'status' => 'Status',
            'create_date' => 'Create Date',
            'create_by' => 'Create By',
            'member' => 'Member',
            'description' => 'Description',
        ];
    }
}
