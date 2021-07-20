<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\UserComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\UserComponent Test Case
 */
class UserComponentTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Controller\Component\UserComponent
     */
    protected $User;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->User = new UserComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->User);

        parent::tearDown();
    }

    public function testUserObjective()
    {
      $this->assertIsObject($this->User);
    }
}
