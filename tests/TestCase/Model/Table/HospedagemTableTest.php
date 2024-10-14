<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HospedagemTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HospedagemTable Test Case
 */
class HospedagemTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\HospedagemTable
     */
    protected $Hospedagem;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Hospedagem',
        'app.Funcionario',
        'app.Reserva',
        'app.Ganhos',
        'app.Produto',
        'app.Servico',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Hospedagem') ? [] : ['className' => HospedagemTable::class];
        $this->Hospedagem = $this->getTableLocator()->get('Hospedagem', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Hospedagem);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\HospedagemTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\HospedagemTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
