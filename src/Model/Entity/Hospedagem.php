<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Hospedagem Entity
 *
 * @property int $id
 * @property int $funcionario_id
 * @property int $reserva_id
 * @property \Cake\I18n\DateTime $data_hospedagem
 * @property string $valor_total
 * @property string $tipo_pagamento
 *
 * @property \App\Model\Entity\Funcionario $funcionario
 * @property \App\Model\Entity\Reserva $reserva
 * @property \App\Model\Entity\Ganho[] $ganhos
 * @property \App\Model\Entity\Produto[] $produto
 * @property \App\Model\Entity\Servico[] $servico
 */
class Hospedagem extends Entity
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
        'funcionario_id' => true,
        'reserva_id' => true,
        'data_hospedagem' => true,
        'valor_total' => true,
        'tipo_pagamento' => true,
        'funcionario' => true,
        'reserva' => true,
        'ganhos' => true,
        'produto' => true,
        'servico' => true,
    ];
}
