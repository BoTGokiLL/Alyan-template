<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "obat17".
 *
 * @property int $id
 * @property int $kode_obat
 * @property string $harga
 * @property int $stork_obat
 */
class Obat17 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'obat17';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_obat', 'harga', 'stork_obat'], 'required'],
            [['kode_obat', 'stork_obat'], 'integer'],
            [['harga'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode_obat' => 'Kode Obat',
            'harga' => 'Harga',
            'stork_obat' => 'Stork Obat',
        ];
    }
}
