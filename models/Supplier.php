<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "supplier".
 *
 * @property int $ID_Supplier
 * @property string $Nama_Supplier
 * @property string|null $Email_Supplier
 * @property int $Kontak
 *
 * @property Bahan[] $bahans
 */
class Supplier extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'supplier';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_Supplier', 'Nama_Supplier', 'Kontak'], 'required'],
            [['ID_Supplier', 'Kontak'], 'integer'],
            [['Nama_Supplier'], 'string', 'max' => 45],
            [['Email_Supplier'], 'string', 'max' => 100],
            [['ID_Supplier'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_Supplier' => 'Id Supplier',
            'Nama_Supplier' => 'Nama Supplier',
            'Email_Supplier' => 'Email Supplier',
            'Kontak' => 'Kontak',
        ];
    }

    /**
     * Gets query for [[Bahans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBahans()
    {
        return $this->hasMany(Bahan::class, ['ID_Supplier' => 'ID_Supplier']);
    }
}
