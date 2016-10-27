<?php

namespace PhpComRapadura\Peleja\Model;

class Evento extends \Phalcon\Mvc\Model
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
    protected $nome;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $dataInicioInscricao;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $dataFimInscricao;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $dataEvento;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $limiteParticipantes;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    protected $localEvento;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    protected $logradouro;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    protected $numero;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    protected $bairro;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    protected $cidade;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    protected $estado;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $cep;

    /**
     *
     * @var string
     * @Column(type="string", length=36, nullable=false)
     */
    protected $Organizador_Credencial_id;

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
     * Method to set the value of field nome
     *
     * @param string $nome
     * @return $this
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Method to set the value of field dataInicioInscricao
     *
     * @param string $dataInicioInscricao
     * @return $this
     */
    public function setDataInicioInscricao($dataInicioInscricao)
    {
        $this->dataInicioInscricao = $dataInicioInscricao;

        return $this;
    }

    /**
     * Method to set the value of field dataFimInscricao
     *
     * @param string $dataFimInscricao
     * @return $this
     */
    public function setDataFimInscricao($dataFimInscricao)
    {
        $this->dataFimInscricao = $dataFimInscricao;

        return $this;
    }

    /**
     * Method to set the value of field dataEvento
     *
     * @param string $dataEvento
     * @return $this
     */
    public function setDataEvento($dataEvento)
    {
        $this->dataEvento = $dataEvento;

        return $this;
    }

    /**
     * Method to set the value of field limiteParticipantes
     *
     * @param integer $limiteParticipantes
     * @return $this
     */
    public function setLimiteParticipantes($limiteParticipantes)
    {
        $this->limiteParticipantes = $limiteParticipantes;

        return $this;
    }

    /**
     * Method to set the value of field localEvento
     *
     * @param string $localEvento
     * @return $this
     */
    public function setLocalEvento($localEvento)
    {
        $this->localEvento = $localEvento;

        return $this;
    }

    /**
     * Method to set the value of field logradouro
     *
     * @param string $logradouro
     * @return $this
     */
    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;

        return $this;
    }

    /**
     * Method to set the value of field numero
     *
     * @param string $numero
     * @return $this
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Method to set the value of field bairro
     *
     * @param string $bairro
     * @return $this
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;

        return $this;
    }

    /**
     * Method to set the value of field cidade
     *
     * @param string $cidade
     * @return $this
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Method to set the value of field estado
     *
     * @param string $estado
     * @return $this
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Method to set the value of field cep
     *
     * @param integer $cep
     * @return $this
     */
    public function setCep($cep)
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * Method to set the value of field Organizador_Credencial_id
     *
     * @param string $Organizador_Credencial_id
     * @return $this
     */
    public function setOrganizadorCredencialId($Organizador_Credencial_id)
    {
        $this->Organizador_Credencial_id = $Organizador_Credencial_id;

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
     * Returns the value of field nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Returns the value of field dataInicioInscricao
     *
     * @return string
     */
    public function getDataInicioInscricao()
    {
        return $this->dataInicioInscricao;
    }

    /**
     * Returns the value of field dataFimInscricao
     *
     * @return string
     */
    public function getDataFimInscricao()
    {
        return $this->dataFimInscricao;
    }

    /**
     * Returns the value of field dataEvento
     *
     * @return string
     */
    public function getDataEvento()
    {
        return $this->dataEvento;
    }

    /**
     * Returns the value of field limiteParticipantes
     *
     * @return integer
     */
    public function getLimiteParticipantes()
    {
        return $this->limiteParticipantes;
    }

    /**
     * Returns the value of field localEvento
     *
     * @return string
     */
    public function getLocalEvento()
    {
        return $this->localEvento;
    }

    /**
     * Returns the value of field logradouro
     *
     * @return string
     */
    public function getLogradouro()
    {
        return $this->logradouro;
    }

    /**
     * Returns the value of field numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Returns the value of field bairro
     *
     * @return string
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * Returns the value of field cidade
     *
     * @return string
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Returns the value of field estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Returns the value of field cep
     *
     * @return integer
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Returns the value of field Organizador_Credencial_id
     *
     * @return string
     */
    public function getOrganizadorCredencialId()
    {
        return $this->Organizador_Credencial_id;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("peleja");
        $this->belongsTo('Organizador_Credencial_id', 'PhpComRapadura\Peleja\Model\Organizador', 'Credencial_id', ['alias' => 'Organizador']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'evento';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Evento[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Evento
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
            'nome' => 'nome',
            'dataInicioInscricao' => 'dataInicioInscricao',
            'dataFimInscricao' => 'dataFimInscricao',
            'dataEvento' => 'dataEvento',
            'limiteParticipantes' => 'limiteParticipantes',
            'localEvento' => 'localEvento',
            'logradouro' => 'logradouro',
            'numero' => 'numero',
            'bairro' => 'bairro',
            'cidade' => 'cidade',
            'estado' => 'estado',
            'cep' => 'cep',
            'Organizador_Credencial_id' => 'Organizador_Credencial_id'
        ];
    }

}
