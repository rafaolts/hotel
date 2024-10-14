<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\HospedagemController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\HospedagemController Test Case
 *
 * @uses \App\Controller\HospedagemController
 */
class HospedagemControllerTest extends TestCase
{
    use IntegrationTestTrait;

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
        'app.HospedagemProduto',
        'app.HospedagemServico',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\HospedagemController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\HospedagemController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\HospedagemController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\HospedagemController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\HospedagemController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
