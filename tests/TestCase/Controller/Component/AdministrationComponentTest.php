<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\AdministrationComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\AdministrationComponent Test Case
 */
class AdministrationComponentTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Controller\Component\AdministrationComponent
     */
    protected $Administration;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->Administration = new AdministrationComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Administration);

        parent::tearDown();
    }

    public function testObjective()
    {
      $this->assertIsObject($this->Administration);
    }
}
