<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FuncionarioFixture
 */
class FuncionarioFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'funcionario';
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
                'nome' => 'Lorem ipsum dolor sit amet',
                'cpf' => 'Lorem ips',
                'data_nascimento' => '2024-10-14',
                'endereco' => 'Lorem ipsum dolor sit amet',
                'funcao' => 'Lorem ipsum dolor ',
                'salario' => 1.5,
                'avaliacao' => 1,
                'data_admissao' => '2024-10-14 22:06:43',
            ],
        ];
        parent::init();
    }
}
