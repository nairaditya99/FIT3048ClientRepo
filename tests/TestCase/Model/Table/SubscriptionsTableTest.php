<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SubscriptionsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SubscriptionsTable Test Case
 */
class SubscriptionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SubscriptionsTable
     */
    protected $Subscriptions;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Subscriptions',
        'app.Users',
        'app.Fandoms',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Subscriptions') ? [] : ['className' => SubscriptionsTable::class];
        $this->Subscriptions = $this->getTableLocator()->get('Subscriptions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Subscriptions);

        parent::tearDown();
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\SubscriptionsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
