<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RoleTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RoleTable Test Case
 */
class RoleTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RoleTable
     */
    protected $Role;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Role',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Role') ? [] : ['className' => RoleTable::class];
        $this->Role = $this->getTableLocator()->get('Role', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Role);

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
