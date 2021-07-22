<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PremiumMembershipTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PremiumMembershipTable Test Case
 */
class PremiumMembershipTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PremiumMembershipTable
     */
    protected $PremiumMembership;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.PremiumMembership',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('PremiumMembership') ? [] : ['className' => PremiumMembershipTable::class];
        $this->PremiumMembership = $this->getTableLocator()->get('PremiumMembership', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->PremiumMembership);

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
