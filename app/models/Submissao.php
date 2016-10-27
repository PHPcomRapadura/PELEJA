<?php

namespace PhpComRapadura\Peleja\Model;

class Submissao extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $Palestra_id;

    /**
     *
     * @var integer
     * @Primary
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $Evento_id;

    /**
     *
     * @var integer
     * @Column(type="integer", length=1, nullable=true)
     */
    protected $Aceita;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $Votos;

    /**
     * Method to set the value of field Palestra_id
     *
     * @param integer $Palestra_id
     * @return $this
     */
    public function setPalestraId($Palestra_id)
    {
        $this->Palestra_id = $Palestra_id;

        return $this;
    }

    /**
     * Method to set the value of field Evento_id
     *
     * @param integer $Evento_id
     * @return $this
     */
    public function setEventoId($Evento_id)
    {
        $this->Evento_id = $Evento_id;

        return $this;
    }

    /**
     * Method to set the value of field Aceita
     *
     * @param integer $Aceita
     * @return $this
     */
    public function setAceita($Aceita)
    {
        $this->Aceita = $Aceita;

        return $this;
    }

    /**
     * Method to set the value of field Votos
     *
     * @param integer $Votos
     * @return $this
     */
    public function setVotos($Votos)
    {
        $this->Votos = $Votos;

        return $this;
    }

    /**
     * Returns the value of field Palestra_id
     *
     * @return integer
     */
    public function getPalestraId()
    {
        return $this->Palestra_id;
    }

    /**
     * Returns the value of field Evento_id
     *
     * @return integer
     */
    public function getEventoId()
    {
        return $this->Evento_id;
    }

    /**
     * Returns the value of field Aceita
     *
     * @return integer
     */
    public function getAceita()
    {
        return $this->Aceita;
    }

    /**
     * Returns the value of field Votos
     *
     * @return integer
     */
    public function getVotos()
    {
        return $this->Votos;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("peleja");
        $this->belongsTo('Evento_id', 'PhpComRapadura\Peleja\Model\Evento', 'id', ['alias' => 'Evento']);
        $this->belongsTo('Palestra_id', 'PhpComRapadura\Peleja\Model\Palestra', 'id', ['alias' => 'Palestra']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'submissao';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Submissao[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Submissao
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
            'Palestra_id' => 'Palestra_id',
            'Evento_id' => 'Evento_id',
            'Aceita' => 'Aceita',
            'Votos' => 'Votos'
        ];
    }

}
