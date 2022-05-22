<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LandingPagesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LandingPagesTable Test Case
 */
class LandingPagesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LandingPagesTable
     */
    protected $LandingPages;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.LandingPages',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('LandingPages') ? [] : ['className' => LandingPagesTable::class];
        $this->LandingPages = $this->getTableLocator()->get('LandingPages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->LandingPages);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\LandingPagesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
