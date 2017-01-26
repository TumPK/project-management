<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for collection "role".
 *
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property mixed $role_name
 * @property mixed $description
 * @property mixed $status
 */
class Role extends \yii\mongodb\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function collectionName()
    {
        return ['db_pm', 'role'];
    }

    /**
     * @inheritdoc
     */
    public function attributes()
    {
        return [
            '_id',
            'role_name',
            'description',
            'status',
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['role_name', 'description', 'status'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'role_name' => 'Role Name',
            'description' => 'Description',
            'status' => 'Status',
        ];
    }
}
