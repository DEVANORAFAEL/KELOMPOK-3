<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bahan".
 *
 * @property int $ID_Bahan
 * @property string $Nama_Bahan
 * @property string|null $Jumlah
 * @property string|null $Tanggal_Kadaluarsa
 * @property int $ID_Supplier
 *
 * @property Produksi[] $produksis
 * @property Supplier $supplier
 */
class Bahan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bahan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_Bahan', 'Nama_Bahan', 'ID_Supplier'], 'required'],
            [['ID_Bahan', 'ID_Supplier'], 'integer'],
            [['Tanggal_Kadaluarsa'], 'safe'],
            [['Nama_Bahan', 'Jumlah'], 'string', 'max' => 45],
            [['ID_Bahan'], 'unique'],
            [['ID_Supplier'], 'exist', 'skipOnError' => true, 'targetClass' => Supplier::class, 'targetAttribute' => ['ID_Supplier' => 'ID_Supplier']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_Bahan' => 'Id Bahan',
            'Nama_Bahan' => 'Nama Bahan',
            'Jumlah' => 'Jumlah',
            'Tanggal_Kadaluarsa' => 'Tanggal Kadaluarsa',
            'ID_Supplier' => 'Id Supplier',
        ];
    }

    /**
     * Gets query for [[Produksis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduksis()
    {
        return $this->hasMany(Produksi::class, ['ID_Bahan' => 'ID_Bahan']);
    }

    /**
     * Gets query for [[Supplier]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSupplier()
    {
        return $this->hasOne(Supplier::class, ['ID_Supplier' => 'ID_Supplier']);
    }
}
