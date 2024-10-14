<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Estoque Entity
 *
 * @property int $id
 * @property int $produto_id
 * @property int $funcionario_id
 * @property int $quantidade
 * @property \Cake\I18n\DateTime|null $data_lancamento
 * @property \Cake\I18n\DateTime|null $data_baixa
 * @property string $tipo_operacao
 *
 * @property \App\Model\Entity\Produto $produto
 * @property \App\Model\Entity\Funcionario $funcionario
 */
class Estoque extends Entity
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
        'produto_id' => true,
        'funcionario_id' => true,
        'quantidade' => true,
        'data_lancamento' => true,
        'data_baixa' => true,
        'tipo_operacao' => true,
        'produto' => true,
        'funcionario' => true,
    ];
}
