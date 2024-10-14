<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Reserva Entity
 *
 * @property int $id
 * @property int $cliente_id
 * @property int $quarto_id
 * @property int|null $funcionario_id
 * @property \Cake\I18n\DateTime $data_reserva
 * @property \Cake\I18n\DateTime $data_entrada
 * @property \Cake\I18n\DateTime $data_saida
 * @property int $pessoas
 * @property int $criancas
 * @property string $valor_reserva
 *
 * @property \App\Model\Entity\Cliente $cliente
 * @property \App\Model\Entity\Quarto $quarto
 * @property \App\Model\Entity\Funcionario $funcionario
 * @property \App\Model\Entity\Hospedagem[] $hospedagem
 */
class Reserva extends Entity
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
        'cliente_id' => true,
        'quarto_id' => true,
        'funcionario_id' => true,
        'data_reserva' => true,
        'data_entrada' => true,
        'data_saida' => true,
        'pessoas' => true,
        'criancas' => true,
        'valor_reserva' => true,
        'cliente' => true,
        'quarto' => true,
        'funcionario' => true,
        'hospedagem' => true,
    ];
}
