<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Quarto Entity
 *
 * @property int $id
 * @property string $tipo_quarto
 * @property string $descricao
 * @property int $numero_camas
 * @property string $valor_diaria
 * @property int $num_quarto
 * @property string $status
 *
 * @property \App\Model\Entity\Reserva[] $reserva
 */
class Quarto extends Entity
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
        'tipo_quarto' => true,
        'descricao' => true,
        'numero_camas' => true,
        'valor_diaria' => true,
        'num_quarto' => true,
        'status' => true,
        'reserva' => true,
    ];
}
