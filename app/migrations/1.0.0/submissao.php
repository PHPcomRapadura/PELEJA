<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class SubmissaoMigration_100
 */
class SubmissaoMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('submissao', [
                'columns' => [
                    new Column(
                        'Palestra_id',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 11,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'Evento_id',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 11,
                            'after' => 'Palestra_id'
                        ]
                    ),
                    new Column(
                        'Aceita',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'size' => 1,
                            'after' => 'Evento_id'
                        ]
                    ),
                    new Column(
                        'Votos',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'size' => 11,
                            'after' => 'Aceita'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('PRIMARY', ['Palestra_id', 'Evento_id'], 'PRIMARY'),
                    new Index('fk_Submisao_Evento_idx', ['Evento_id'], null),
                    new Index('fk_Submisao_Palestra_idx', ['Palestra_id'], null)
                ],
                'references' => [
                    new Reference(
                        'fk_Palestra_has_Evento_Evento1',
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
                        'fk_Palestra_has_Evento_Palestra1',
                        [
                            'referencedSchema' => 'peleja',
                            'referencedTable' => 'palestra',
                            'columns' => ['Palestra_id'],
                            'referencedColumns' => ['id'],
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
