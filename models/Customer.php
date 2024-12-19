<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property int $ID_Customer
 * @property string|null $Nama_Customer
 * @property string|null $Alamat_Customer
 * @property string|null $Kontak_Customer
 * @property int $ID_Distributor
 *
 * @property Distributor $distributor
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_Customer', 'ID_Distributor'], 'required'],
            [['ID_Customer', 'ID_Distributor'], 'integer'],
            [['Nama_Customer', 'Kontak_Customer'], 'string', 'max' => 45],
            [['Alamat_Customer'], 'string', 'max' => 100],
            [['ID_Customer'], 'unique'],
            [['ID_Distributor'], 'exist', 'skipOnError' => true, 'targetClass' => Distributor::class, 'targetAttribute' => ['ID_Distributor' => 'ID_Distributor']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_Customer' => 'Id Customer',
            'Nama_Customer' => 'Nama Customer',
            'Alamat_Customer' => 'Alamat Customer',
            'Kontak_Customer' => 'Kontak Customer',
            'ID_Distributor' => 'Id Distributor',
        ];
    }

    /**
     * Gets query for [[Distributor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDistributor()
    {
        return $this->hasOne(Distributor::class, ['ID_Distributor' => 'ID_Distributor']);
    }
}
