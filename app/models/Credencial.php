<?php

namespace PhpComRapadura\Peleja\Model;

use Phalcon\Mvc\Model\Validator\Email as Email;

class Credencial extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     * @Primary
     * @Column(type="string", length=36, nullable=false)
     */
    protected $id;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    protected $nome;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    protected $senha;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    protected $email;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    protected $facebook;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    protected $twitter;

    /**
     * Method to set the value of field id
     *
     * @param string $id
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
     * Method to set the value of field senha
     *
     * @param string $senha
     * @return $this
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }

    /**
     * Method to set the value of field email
     *
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Method to set the value of field facebook
     *
     * @param string $facebook
     * @return $this
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Method to set the value of field twitter
     *
     * @param string $twitter
     * @return $this
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * Returns the value of field id
     *
     * @return string
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
     * Returns the value of field senha
     *
     * @return string
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Returns the value of field email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Returns the value of field facebook
     *
     * @return string
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Returns the value of field twitter
     *
     * @return string
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Validations and business logic
     *
     * @return boolean
     */
    public function validation()
    {
        $this->validate(
            new Email(
                [
                    'field'    => 'email',
                    'required' => true,
                ]
            )
        );

        if ($this->validationHasFailed() == true) {
            return false;
        }

        return true;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("peleja");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'credencial';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Credencial[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Credencial
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
            'senha' => 'senha',
            'email' => 'email',
            'facebook' => 'facebook',
            'twitter' => 'twitter'
        ];
    }

}
