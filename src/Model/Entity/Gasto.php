<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Gasto Entity
 *
 * @property int $id
 * @property int $funcionario_id
 * @property int $produto_id
 * @property string $valor_gastos
 * @property \Cake\I18n\Date $data_gastos
 *
 * @property \App\Model\Entity\Funcionario $funcionario
 * @property \App\Model\Entity\Produto $produto
 */
class Gasto extends Entity
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
        'produto_id' => true,
        'valor_gastos' => true,
        'data_gastos' => true,
        'funcionario' => true,
        'produto' => true,
    ];
}
