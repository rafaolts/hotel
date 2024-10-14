<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * HospedagemProdutoFixture
 */
class HospedagemProdutoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'hospedagem_produto';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'hospedagem_id' => 1,
                'produto_id' => 1,
            ],
        ];
        parent::init();
    }
}
