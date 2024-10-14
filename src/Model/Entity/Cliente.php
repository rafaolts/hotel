<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cliente Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $cpf
 * @property string $endereco
 * @property string $cidade
 * @property string $estado
 * @property string $pais
 * @property string $motivo_visita
 * @property string $email
 * @property string $redes_sociais
 * @property string $profissao
 * @property string $doc_pessoal
 *
 * @property \App\Model\Entity\Reserva[] $reserva
 * @property \App\Model\Entity\Telefone[] $telefone
 */
class Cliente extends Entity
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
        'nome' => true,
        'cpf' => true,
        'endereco' => true,
        'cidade' => true,
        'estado' => true,
        'pais' => true,
        'motivo_visita' => true,
        'email' => true,
        'redes_sociais' => true,
        'profissao' => true,
        'doc_pessoal' => true,
        'reserva' => true,
        'telefone' => true,
    ];
}
