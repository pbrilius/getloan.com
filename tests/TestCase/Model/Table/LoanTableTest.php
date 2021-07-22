<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LoanTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LoanTable Test Case
 */
class LoanTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LoanTable
     */
    protected $Loan;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Loan',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Loan') ? [] : ['className' => LoanTable::class];
        $this->Loan = $this->getTableLocator()->get('Loan', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Loan);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
