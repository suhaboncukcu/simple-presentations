<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PresentationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PresentationsTable Test Case
 */
class PresentationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PresentationsTable
     */
    public $Presentations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.presentations',
        'app.slides'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Presentations') ? [] : ['className' => PresentationsTable::class];
        $this->Presentations = TableRegistry::getTableLocator()->get('Presentations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Presentations);

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
