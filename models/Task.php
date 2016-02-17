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
    // объект таблицы
    public static function tableName()
    {
        return 'task';
    }

    // проверка введенных данных
    public function rules()
    {
        return [
            [['task', 'execute'], 'required'],
            [['task'], 'string'],
            [['date0'], 'string'],
            [['execute'], 'integer']
        ];
    }

    // названия столбцов
    public function attributeLabels()
    {
        return [
            'task' => 'Задание',
            'date0' => 'Когда сделать',
            'execute' => 'Выполненно',
        ];
    }
}
