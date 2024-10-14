<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GastosFixture
 */
class GastosFixture extends TestFixture
{
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
                'produto_id' => 1,
                'valor_gastos' => 1.5,
                'data_gastos' => '2024-10-14',
            ],
        ];
        parent::init();
    }
}
