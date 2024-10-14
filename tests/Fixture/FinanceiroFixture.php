<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FinanceiroFixture
 */
class FinanceiroFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'financeiro';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'funcionario_id' => 1,
                'ganho_id' => 1,
                'gastos_id' => 1,
                'valor_liquido' => 1.5,
                'mes_fechamento' => 'Lorem ip',
                'data_lancada' => '2024-10-14',
                'ano' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
