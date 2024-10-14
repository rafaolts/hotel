<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GastosProdutoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GastosProdutoTable Test Case
 */
class GastosProdutoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GastosProdutoTable
     */
    protected $GastosProduto;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.GastosProduto',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('GastosProduto') ? [] : ['className' => GastosProdutoTable::class];
        $this->GastosProduto = $this->getTableLocator()->get('GastosProduto', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->GastosProduto);

        parent::tearDown();
    }
}
