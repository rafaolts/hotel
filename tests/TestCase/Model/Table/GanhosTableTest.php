<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GanhosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GanhosTable Test Case
 */
class GanhosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GanhosTable
     */
    protected $Ganhos;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Ganhos',
        'app.Hospedagem',
        'app.Financeiro',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Ganhos') ? [] : ['className' => GanhosTable::class];
        $this->Ganhos = $this->getTableLocator()->get('Ganhos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Ganhos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\GanhosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\GanhosTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
