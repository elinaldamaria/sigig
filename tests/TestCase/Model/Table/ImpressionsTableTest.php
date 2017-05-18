<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ImpressionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ImpressionsTable Test Case
 */
class ImpressionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ImpressionsTable
     */
    public $Impressions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.impressions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Impressions') ? [] : ['className' => 'App\Model\Table\ImpressionsTable'];
        $this->Impressions = TableRegistry::get('Impressions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Impressions);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
