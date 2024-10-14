<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ganho Entity
 *
 * @property int $id
 * @property int $hospedagem_id
 * @property string $valor_ganho
 * @property \Cake\I18n\Date $data_ganho
 *
 * @property \App\Model\Entity\Hospedagem $hospedagem
 * @property \App\Model\Entity\Financeiro[] $financeiro
 */
class Ganho extends Entity
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
        'hospedagem_id' => true,
        'valor_ganho' => true,
        'data_ganho' => true,
        'hospedagem' => true,
        'financeiro' => true,
    ];
}
