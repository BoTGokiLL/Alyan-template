<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa_017".
 *
 * @property int $id
 * @property int $nim
 * @property string $nama
 * @property string $kelas
 * @property string $jurusan
 */
class mahasiswa_017 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa_017';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'nama', 'kelas', 'jurusan'], 'required'],
            [['nim'], 'integer'],
            [['nama'], 'string', 'max' => 15],
            [['kelas'], 'string', 'max' => 11],
            [['jurusan'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'No Induk Mahasiswa',
            'nama' => 'Nama Mahasiswa',
            'kelas' => 'Kelas',
            'jurusan' => 'Jurusan',
        ];
    }

    public function getprofil_017()
    {
        return $this->hasOne(profil_017::className(), ['id' => 'id']);
    }
}
