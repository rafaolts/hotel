<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * HospedagemServicoFixture
 */
class HospedagemServicoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'hospedagem_servico';
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
                'servico_id' => 1,
            ],
        ];
        parent::init();
    }
}
