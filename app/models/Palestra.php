<?php

namespace PhpComRapadura\Peleja\Model;

class Palestra extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $id;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    protected $titulo;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $resumo;

    /**
     *
     * @var string
     * @Column(type="string", length=36, nullable=false)
     */
    protected $Palestrante_Credencial_id;

    /**
     * Method to set the value of field id
     *
     * @param integer $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Method to set the value of field titulo
     *
     * @param string $titulo
     * @return $this
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Method to set the value of field resumo
     *
     * @param string $resumo
     * @return $this
     */
    public function setResumo($resumo)
    {
        $this->resumo = $resumo;

        return $this;
    }

    /**
     * Method to set the value of field Palestrante_Credencial_id
     *
     * @param string $Palestrante_Credencial_id
     * @return $this
     */
    public function setPalestranteCredencialId($Palestrante_Credencial_id)
    {
        $this->Palestrante_Credencial_id = $Palestrante_Credencial_id;

        return $this;
    }

    /**
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the value of field titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Returns the value of field resumo
     *
     * @return string
     */
    public function getResumo()
    {
        return $this->resumo;
    }

    /**
     * Returns the value of field Palestrante_Credencial_id
     *
     * @return string
     */
    public function getPalestranteCredencialId()
    {
        return $this->Palestrante_Credencial_id;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("peleja");
        $this->belongsTo('Palestrante_Credencial_id', 'PhpComRapadura\Peleja\Model\Palestrante', 'Credencial_id', ['alias' => 'Palestrante']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'palestra';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Palestra[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Palestra
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    /**
     * Independent Column Mapping.
     * Keys are the real names in the table and the values their names in the application
     *
     * @return array
     */
    public function columnMap()
    {
        return [
            'id' => 'id',
            'titulo' => 'titulo',
            'resumo' => 'resumo',
            'Palestrante_Credencial_id' => 'Palestrante_Credencial_id'
        ];
    }

}
