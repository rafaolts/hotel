<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ClienteFixture
 */
class ClienteFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'cliente';
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
                'endereco' => 'Lorem ipsum dolor sit amet',
                'cidade' => 'Lorem ipsum dolor sit amet',
                'estado' => 'Lorem ipsum dolor sit amet',
                'pais' => 'Lorem ipsum dolor sit amet',
                'motivo_visita' => 'Lorem ipsum dolor ',
                'email' => 'Lorem ipsum dolor sit amet',
                'redes_sociais' => 'Lorem ipsum dolor sit amet',
                'profissao' => 'Lorem ipsum dolor sit amet',
                'doc_pessoal' => 'Lorem ipsum dolor ',
            ],
        ];
        parent::init();
    }
}
