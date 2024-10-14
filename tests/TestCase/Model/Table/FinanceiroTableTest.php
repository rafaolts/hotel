<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FinanceiroTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FinanceiroTable Test Case
 */
class FinanceiroTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FinanceiroTable
     */
    protected $Financeiro;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Financeiro',
        'app.Funcionario',
        'app.Ganhos',
        'app.Gastos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Financeiro') ? [] : ['className' => FinanceiroTable::class];
        $this->Financeiro = $this->getTableLocator()->get('Financeiro', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Financeiro);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\FinanceiroTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\FinanceiroTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
