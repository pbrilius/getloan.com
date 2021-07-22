<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InterestRatesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InterestRatesTable Test Case
 */
class InterestRatesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InterestRatesTable
     */
    protected $InterestRates;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.InterestRates',
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
        $config = $this->getTableLocator()->exists('InterestRates') ? [] : ['className' => InterestRatesTable::class];
        $this->InterestRates = $this->getTableLocator()->get('InterestRates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->InterestRates);

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
