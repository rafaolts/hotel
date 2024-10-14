<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Produto Entity
 *
 * @property int $id
 * @property string $tipo_produto
 * @property string $produto
 * @property string $descricao
 *
 * @property \App\Model\Entity\Estoque[] $estoque
 * @property \App\Model\Entity\Gasto[] $gastos
 * @property \App\Model\Entity\Hospedagem[] $hospedagem
 */
class Produto extends Entity
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
        'tipo_produto' => true,
        'produto' => true,
        'descricao' => true,
        'estoque' => true,
        'gastos' => true,
        'hospedagem' => true,
    ];
}
