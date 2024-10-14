<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HospedagemServicoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HospedagemServicoTable Test Case
 */
class HospedagemServicoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\HospedagemServicoTable
     */
    protected $HospedagemServico;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.HospedagemServico',
        'app.Hospedagem',
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
        $config = $this->getTableLocator()->exists('HospedagemServico') ? [] : ['className' => HospedagemServicoTable::class];
        $this->HospedagemServico = $this->getTableLocator()->get('HospedagemServico', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->HospedagemServico);

        parent::tearDown();
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\HospedagemServicoTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
