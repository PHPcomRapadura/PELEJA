<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class PalestraMigration_100
 */
class PalestraMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('palestra', [
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
                        'titulo',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 255,
                            'after' => 'id'
                        ]
                    ),
                    new Column(
                        'resumo',
                        [
                            'type' => Column::TYPE_BLOB,
                            'size' => 1,
                            'after' => 'titulo'
                        ]
                    ),
                    new Column(
                        'Palestrante_Credencial_id',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 36,
                            'after' => 'resumo'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('PRIMARY', ['id'], 'PRIMARY'),
                    new Index('fk_Palestra_Palestrante_idx', ['Palestrante_Credencial_id'], null)
                ],
                'references' => [
                    new Reference(
                        'fk_Palestra_Palestrante1',
                        [
                            'referencedSchema' => 'peleja',
                            'referencedTable' => 'palestrante',
                            'columns' => ['Palestrante_Credencial_id'],
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
