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
class mahasiswa17 extends \yii\db\ActiveRecord
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
            'nim' => 'Nim',
            'nama' => 'Nama',
            'kelas' => 'Kelas',
            'jurusan' => 'Jurusan',
        ];
    }
}
