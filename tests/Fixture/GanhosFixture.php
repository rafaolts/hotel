<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GanhosFixture
 */
class GanhosFixture extends TestFixture
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
                'hospedagem_id' => 1,
                'valor_ganho' => 1.5,
                'data_ganho' => '2024-10-14',
            ],
        ];
        parent::init();
    }
}
