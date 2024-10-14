<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * HospedagemServico Entity
 *
 * @property int $hospedagem_id
 * @property int $servico_id
 *
 * @property \App\Model\Entity\Hospedagem $hospedagem
 * @property \App\Model\Entity\Servico $servico
 */
class HospedagemServico extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'hospedagem' => true,
        'servico' => true,
    ];
}
