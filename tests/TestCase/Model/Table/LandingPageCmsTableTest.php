<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LandingPageCmsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LandingPageCmsTable Test Case
 */
class LandingPageCmsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LandingPageCmsTable
     */
    protected $LandingPageCms;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.LandingPageCms',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('LandingPageCms') ? [] : ['className' => LandingPageCmsTable::class];
        $this->LandingPageCms = $this->getTableLocator()->get('LandingPageCms', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->LandingPageCms);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\LandingPageCmsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
