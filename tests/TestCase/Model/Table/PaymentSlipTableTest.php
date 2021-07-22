<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PaymentSlipTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PaymentSlipTable Test Case
 */
class PaymentSlipTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PaymentSlipTable
     */
    protected $PaymentSlip;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.PaymentSlip',
        'app.PremiumMembership',
        'app.User',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('PaymentSlip') ? [] : ['className' => PaymentSlipTable::class];
        $this->PaymentSlip = $this->getTableLocator()->get('PaymentSlip', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->PaymentSlip);

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
