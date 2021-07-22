<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PaymentsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PaymentsTable Test Case
 */
class PaymentsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PaymentsTable
     */
    protected $Payments;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Payments',
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
        $config = $this->getTableLocator()->exists('Payments') ? [] : ['className' => PaymentsTable::class];
        $this->Payments = $this->getTableLocator()->get('Payments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Payments);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
