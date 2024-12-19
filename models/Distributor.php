<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "distributor".
 *
 * @property int $ID_Distributor
 * @property string|null $Nama_Distributor
 * @property string|null $Kontak_Distributor
 * @property string|null $Alamat_Distributor
 * @property int $Jumlah_Produksi
 *
 * @property Customer[] $customers
 * @property Produksi $jumlahProduksi
 */
class Distributor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'distributor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_Distributor', 'Jumlah_Produksi'], 'required'],
            [['ID_Distributor', 'Jumlah_Produksi'], 'integer'],
            [['Nama_Distributor', 'Kontak_Distributor', 'Alamat_Distributor'], 'string', 'max' => 45],
            [['ID_Distributor'], 'unique'],
            [['Jumlah_Produksi'], 'exist', 'skipOnError' => true, 'targetClass' => Produksi::class, 'targetAttribute' => ['Jumlah_Produksi' => 'Jumlah_Produksi']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_Distributor' => 'Id Distributor',
            'Nama_Distributor' => 'Nama Distributor',
            'Kontak_Distributor' => 'Kontak Distributor',
            'Alamat_Distributor' => 'Alamat Distributor',
            'Jumlah_Produksi' => 'Jumlah Produksi',
        ];
    }

    /**
     * Gets query for [[Customers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomers()
    {
        return $this->hasMany(Customer::class, ['ID_Distributor' => 'ID_Distributor']);
    }

    /**
     * Gets query for [[JumlahProduksi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJumlahProduksi()
    {
        return $this->hasOne(Produksi::class, ['Jumlah_Produksi' => 'Jumlah_Produksi']);
    }
}
