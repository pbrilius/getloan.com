<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LoanFixture
 */
class LoanFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'loan';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'lender' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'borrower' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'lender' => ['type' => 'index', 'columns' => ['lender'], 'length' => []],
            'borrower' => ['type' => 'index', 'columns' => ['borrower'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'loan_ibfk_1' => ['type' => 'foreign', 'columns' => ['lender'], 'references' => ['user', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
            'loan_ibfk_2' => ['type' => 'foreign', 'columns' => ['borrower'], 'references' => ['user', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
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
                'lender' => 1,
                'borrower' => 1,
            ],
        ];
        parent::init();
    }
}
