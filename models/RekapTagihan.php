<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rekap_tagihan".
 *
 * @property int $id
 * @property int $nim
 * @property string $terbayar
 * @property string $sisa_tagihan
 * @property int $idstatus
 *
 * @property StaticMahasiswa $nim0
 * @property HelperStatus $idstatus0
 */
class RekapTagihan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rekap_tagihan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'terbayar', 'sisa_tagihan', 'idstatus'], 'required'],
            [['nim', 'idstatus'], 'integer'],
            [['terbayar', 'sisa_tagihan'], 'string', 'max' => 255],
            [['nim'], 'exist', 'skipOnError' => true, 'targetClass' => StaticMahasiswa::className(), 'targetAttribute' => ['nim' => 'id']],
            [['idstatus'], 'exist', 'skipOnError' => true, 'targetClass' => HelperStatus::className(), 'targetAttribute' => ['idstatus' => 'id']],
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
            'terbayar' => 'Terbayar',
            'sisa_tagihan' => 'Sisa Tagihan',
            'idstatus' => 'Idstatus',
        ];
    }

    /**
     * Gets query for [[Nim0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNim0()
    {
        return $this->hasOne(StaticMahasiswa::className(), ['id' => 'nim']);
    }

    /**
     * Gets query for [[Idstatus0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdstatus0()
    {
        return $this->hasOne(HelperStatus::className(), ['id' => 'idstatus']);
    }
}
