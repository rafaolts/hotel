<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProdutoFixture
 */
class ProdutoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'produto';
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
                'tipo_produto' => 'Lorem ipsum dolor ',
                'produto' => 'Lorem ipsum dolor sit amet',
                'descricao' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
