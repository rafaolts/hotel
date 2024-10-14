<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TelefoneTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TelefoneTable Test Case
 */
class TelefoneTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TelefoneTable
     */
    protected $Telefone;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Telefone',
        'app.Cliente',
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
        $config = $this->getTableLocator()->exists('Telefone') ? [] : ['className' => TelefoneTable::class];
        $this->Telefone = $this->getTableLocator()->get('Telefone', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Telefone);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TelefoneTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\TelefoneTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
