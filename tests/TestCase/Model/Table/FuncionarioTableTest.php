<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FuncionarioTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FuncionarioTable Test Case
 */
class FuncionarioTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FuncionarioTable
     */
    protected $Funcionario;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Funcionario',
        'app.Estoque',
        'app.Financeiro',
        'app.Gastos',
        'app.Hospedagem',
        'app.Reserva',
        'app.Telefone',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Funcionario') ? [] : ['className' => FuncionarioTable::class];
        $this->Funcionario = $this->getTableLocator()->get('Funcionario', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Funcionario);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\FuncionarioTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\FuncionarioTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
