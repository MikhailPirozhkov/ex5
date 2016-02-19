<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "task".
 *
 * @property integer $id
 * @property string $task
 * @property string $date0
 * @property integer $execute
 */
class Task extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'task';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['task', 'execute'], 'required'],
            [['task'], 'string'],
            [['date0'], 'string'],
            [['execute'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
           // 'id' => 'ID',
            'task' => 'Задание',
            'date0' => 'Когда сделать',
            'execute' => 'Выполненно',
        ];
    }
}
