<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class EventoMigration_100
 */
class EventoMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('evento', [
                'columns' => [
                    new Column(
                        'id',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'autoIncrement' => true,
                            'size' => 11,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'nome',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 255,
                            'after' => 'id'
                        ]
                    ),
                    new Column(
                        'dataInicioInscricao',
                        [
                            'type' => Column::TYPE_DATETIME,
                            'size' => 1,
                            'after' => 'nome'
                        ]
                    ),
                    new Column(
                        'dataFimInscricao',
                        [
                            'type' => Column::TYPE_DATETIME,
                            'size' => 1,
                            'after' => 'dataInicioInscricao'
                        ]
                    ),
                    new Column(
                        'dataEvento',
                        [
                            'type' => Column::TYPE_DATETIME,
                            'size' => 1,
                            'after' => 'dataFimInscricao'
                        ]
                    ),
                    new Column(
                        'limiteParticipantes',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'size' => 11,
                            'after' => 'dataEvento'
                        ]
                    ),
                    new Column(
                        'localEvento',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 255,
                            'after' => 'limiteParticipantes'
                        ]
                    ),
                    new Column(
                        'logradouro',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 255,
                            'after' => 'localEvento'
                        ]
                    ),
                    new Column(
                        'numero',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 255,
                            'after' => 'logradouro'
                        ]
                    ),
                    new Column(
                        'bairro',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 255,
                            'after' => 'numero'
                        ]
                    ),
                    new Column(
                        'cidade',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 255,
                            'after' => 'bairro'
                        ]
                    ),
                    new Column(
                        'estado',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 255,
                            'after' => 'cidade'
                        ]
                    ),
                    new Column(
                        'cep',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'size' => 11,
                            'after' => 'estado'
                        ]
                    ),
                    new Column(
                        'Organizador_Credencial_id',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 36,
                            'after' => 'cep'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('PRIMARY', ['id'], 'PRIMARY'),
                    new Index('fk_Evento_Organizador1_idx', ['Organizador_Credencial_id'], null)
                ],
                'references' => [
                    new Reference(
                        'fk_Evento_Organizador1',
                        [
                            'referencedSchema' => 'peleja',
                            'referencedTable' => 'organizador',
                            'columns' => ['Organizador_Credencial_id'],
                            'referencedColumns' => ['Credencial_id'],
                            'onUpdate' => 'NO ACTION',
                            'onDelete' => 'NO ACTION'
                        ]
                    )
                ],
                'options' => [
                    'TABLE_TYPE' => 'BASE TABLE',
                    'AUTO_INCREMENT' => '1',
                    'ENGINE' => 'InnoDB',
                    'TABLE_COLLATION' => 'utf8_general_ci'
                ],
            ]
        );
    }

    /**
     * Run the migrations
     *
     * @return void
     */
    public function up()
    {

    }

    /**
     * Reverse the migrations
     *
     * @return void
     */
    public function down()
    {

    }

}
