<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WorldToursTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WorldToursTable Test Case
 */
class WorldToursTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\WorldToursTable
     */
    protected $WorldTours;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.WorldTours',
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
        $config = $this->getTableLocator()->exists('WorldTours') ? [] : ['className' => WorldToursTable::class];
        $this->WorldTours = $this->getTableLocator()->get('WorldTours', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->WorldTours);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\WorldToursTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\WorldToursTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
