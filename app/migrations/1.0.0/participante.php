<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class ParticipanteMigration_100
 */
class ParticipanteMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('participante', [
                'columns' => [
                    new Column(
                        'Credencial_id',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 36,
                            'first' => true
                        ]
                    )
                ],
                'indexes' => [
                    new Index('PRIMARY', ['Credencial_id'], 'PRIMARY')
                ],
                'references' => [
                    new Reference(
                        'fk_Participante_Credencial1',
                        [
                            'referencedSchema' => 'peleja',
                            'referencedTable' => 'credencial',
                            'columns' => ['Credencial_id'],
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
