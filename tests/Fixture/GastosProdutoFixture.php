<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GastosProdutoFixture
 */
class GastosProdutoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'gastos_produto';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'cod_gastos' => 1,
                'cod_produto' => 1,
            ],
        ];
        parent::init();
    }
}
