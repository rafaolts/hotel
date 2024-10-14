<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ServicoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ServicoTable Test Case
 */
class ServicoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ServicoTable
     */
    protected $Servico;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Servico',
        'app.Hospedagem',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Servico') ? [] : ['className' => ServicoTable::class];
        $this->Servico = $this->getTableLocator()->get('Servico', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Servico);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ServicoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
