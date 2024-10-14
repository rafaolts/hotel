<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Telefone Entity
 *
 * @property int $id
 * @property string $numero
 * @property string $tipo_contato
 * @property int|null $cliente_id
 * @property int|null $funcionario_id
 *
 * @property \App\Model\Entity\Cliente $cliente
 * @property \App\Model\Entity\Funcionario $funcionario
 */
class Telefone extends Entity
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
        'numero' => true,
        'tipo_contato' => true,
        'cliente_id' => true,
        'funcionario_id' => true,
        'cliente' => true,
        'funcionario' => true,
    ];
}
