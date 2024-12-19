<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produksi".
 *
 * @property int $Jumlah_Produksi
 * @property int $ID_Bahan
 *
 * @property Bahan $bahan
 * @property Distributor[] $distributors
 */
class Produksi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produksi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Jumlah_Produksi', 'ID_Bahan'], 'required'],
            [['Jumlah_Produksi', 'ID_Bahan'], 'integer'],
            [['Jumlah_Produksi'], 'unique'],
            [['ID_Bahan'], 'exist', 'skipOnError' => true, 'targetClass' => Bahan::class, 'targetAttribute' => ['ID_Bahan' => 'ID_Bahan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Jumlah_Produksi' => 'Jumlah Produksi',
            'ID_Bahan' => 'Id Bahan',
        ];
    }

    /**
     * Gets query for [[Bahan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBahan()
    {
        return $this->hasOne(Bahan::class, ['ID_Bahan' => 'ID_Bahan']);
    }

    /**
     * Gets query for [[Distributors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDistributors()
    {
        return $this->hasMany(Distributor::class, ['Jumlah_Produksi' => 'Jumlah_Produksi']);
    }
}
