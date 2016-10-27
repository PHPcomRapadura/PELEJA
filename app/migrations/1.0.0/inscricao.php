<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class InscricaoMigration_100
 */
class InscricaoMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('inscricao', [
                'columns' => [
                    new Column(
                        'Participante_Credencial_id',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 36,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'Evento_id',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 11,
                            'after' => 'Participante_Credencial_id'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('PRIMARY', ['Participante_Credencial_id', 'Evento_id'], 'PRIMARY'),
                    new Index('fk_Inscricao_Evento_idx', ['Evento_id'], null),
                    new Index('fk_Inscricao_Participante_idx', ['Participante_Credencial_id'], null)
                ],
                'references' => [
                    new Reference(
                        'fk_Participante_has_Evento_Evento1',
                        [
                            'referencedSchema' => 'peleja',
                            'referencedTable' => 'evento',
                            'columns' => ['Evento_id'],
                            'referencedColumns' => ['id'],
                            'onUpdate' => 'NO ACTION',
                            'onDelete' => 'NO ACTION'
                        ]
                    ),
                    new Reference(
                        'fk_Participante_has_Evento_Participante1',
                        [
                            'referencedSchema' => 'peleja',
                            'referencedTable' => 'participante',
                            'columns' => ['Participante_Credencial_id'],
                            'referencedColumns' => ['Credencial_id'],
                            'onUpdate' => 'NO ACTION',
                            'onDelete' => 'NO ACTION'
                        ]
                    )
                ],
                'options' => [
                    'TABLE_TYPE' => 'BASE TABLE',
                    'AUTO_INCREMENT' => '',
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
