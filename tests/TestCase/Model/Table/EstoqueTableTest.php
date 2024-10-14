<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EstoqueTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EstoqueTable Test Case
 */
class EstoqueTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EstoqueTable
     */
    protected $Estoque;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Estoque',
        'app.Produto',
        'app.Funcionario',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Estoque') ? [] : ['className' => EstoqueTable::class];
        $this->Estoque = $this->getTableLocator()->get('Estoque', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Estoque);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\EstoqueTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\EstoqueTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
