<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HospedagemProdutoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HospedagemProdutoTable Test Case
 */
class HospedagemProdutoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\HospedagemProdutoTable
     */
    protected $HospedagemProduto;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.HospedagemProduto',
        'app.Hospedagem',
        'app.Produto',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('HospedagemProduto') ? [] : ['className' => HospedagemProdutoTable::class];
        $this->HospedagemProduto = $this->getTableLocator()->get('HospedagemProduto', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->HospedagemProduto);

        parent::tearDown();
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\HospedagemProdutoTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
