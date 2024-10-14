<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QuartoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QuartoTable Test Case
 */
class QuartoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\QuartoTable
     */
    protected $Quarto;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Quarto',
        'app.Reserva',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Quarto') ? [] : ['className' => QuartoTable::class];
        $this->Quarto = $this->getTableLocator()->get('Quarto', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Quarto);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\QuartoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
