<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LogFixture
 */
class LogFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'log';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'date' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => false, 'default' => null, 'comment' => ''],
        'level' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'loan_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'payment_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'loan_id' => ['type' => 'index', 'columns' => ['loan_id'], 'length' => []],
            'payment_id' => ['type' => 'index', 'columns' => ['payment_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'log_ibfk_1' => ['type' => 'foreign', 'columns' => ['loan_id'], 'references' => ['loan', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'log_ibfk_2' => ['type' => 'foreign', 'columns' => ['payment_id'], 'references' => ['payments', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'date' => '2021-07-22 17:04:51',
                'level' => 'Lorem ipsum dolor sit amet',
                'loan_id' => 1,
                'payment_id' => 1,
            ],
        ];
        parent::init();
    }
}
