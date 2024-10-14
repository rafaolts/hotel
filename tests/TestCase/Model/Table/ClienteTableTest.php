<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClienteTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClienteTable Test Case
 */
class ClienteTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ClienteTable
     */
    protected $Cliente;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Cliente',
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
        $config = $this->getTableLocator()->exists('Cliente') ? [] : ['className' => ClienteTable::class];
        $this->Cliente = $this->getTableLocator()->get('Cliente', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Cliente);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ClienteTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ClienteTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
