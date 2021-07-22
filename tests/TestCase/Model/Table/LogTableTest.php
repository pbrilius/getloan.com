<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LogTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LogTable Test Case
 */
class LogTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LogTable
     */
    protected $Log;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Log',
        'app.Loan',
        'app.Payments',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Log') ? [] : ['className' => LogTable::class];
        $this->Log = $this->getTableLocator()->get('Log', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Log);

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
