<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EstoqueFixture
 */
class EstoqueFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'estoque';
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
                'produto_id' => 1,
                'funcionario_id' => 1,
                'quantidade' => 1,
                'data_lancamento' => '2024-10-14 22:06:06',
                'data_baixa' => '2024-10-14 22:06:06',
                'tipo_operacao' => 'L',
            ],
        ];
        parent::init();
    }
}
