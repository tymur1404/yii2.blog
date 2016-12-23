<?php
/**
 * Created by PhpStorm.
 * User: timur
 * Date: 23.12.16
 * Time: 16:28
 */

namespace app\models;

use yii\db\ActiveRecord;

class Post extends ActiveRecord
{
    public static function tableName()
    {
        return 'post';
    }
}