<?php

namespace PhpComRapadura\Peleja\Model;

class Inscricao extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     * @Primary
     * @Column(type="string", length=36, nullable=false)
     */
    protected $Participante_Credencial_id;

    /**
     *
     * @var integer
     * @Primary
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $Evento_id;

    /**
     * Method to set the value of field Participante_Credencial_id
     *
     * @param string $Participante_Credencial_id
     * @return $this
     */
    public function setParticipanteCredencialId($Participante_Credencial_id)
    {
        $this->Participante_Credencial_id = $Participante_Credencial_id;

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
     * Returns the value of field Participante_Credencial_id
     *
     * @return string
     */
    public function getParticipanteCredencialId()
    {
        return $this->Participante_Credencial_id;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("peleja");
        $this->belongsTo('Evento_id', 'PhpComRapadura\Peleja\Model\Evento', 'id', ['alias' => 'Evento']);
        $this->belongsTo('Participante_Credencial_id', 'PhpComRapadura\Peleja\Model\Participante', 'Credencial_id', ['alias' => 'Participante']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'inscricao';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Inscricao[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Inscricao
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
            'Participante_Credencial_id' => 'Participante_Credencial_id',
            'Evento_id' => 'Evento_id'
        ];
    }

}
