<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Funcionario $funcionario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Funcionario'), ['action' => 'edit', $funcionario->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Funcionario'), ['action' => 'delete', $funcionario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $funcionario->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Funcionario'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Funcionario'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="funcionario view content">
            <h3><?= h($funcionario->nome) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($funcionario->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cpf') ?></th>
                    <td><?= h($funcionario->cpf) ?></td>
                </tr>
                <tr>
                    <th><?= __('Endereco') ?></th>
                    <td><?= h($funcionario->endereco) ?></td>
                </tr>
                <tr>
                    <th><?= __('Funcao') ?></th>
                    <td><?= h($funcionario->funcao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($funcionario->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Salario') ?></th>
                    <td><?= $this->Number->format($funcionario->salario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Avaliacao') ?></th>
                    <td><?= $this->Number->format($funcionario->avaliacao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Nascimento') ?></th>
                    <td><?= h($funcionario->data_nascimento) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Admissao') ?></th>
                    <td><?= h($funcionario->data_admissao) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Estoque') ?></h4>
                <?php if (!empty($funcionario->estoque)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Produto Id') ?></th>
                            <th><?= __('Funcionario Id') ?></th>
                            <th><?= __('Quantidade') ?></th>
                            <th><?= __('Data Lancamento') ?></th>
                            <th><?= __('Data Baixa') ?></th>
                            <th><?= __('Tipo Operacao') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($funcionario->estoque as $estoque) : ?>
                        <tr>
                            <td><?= h($estoque->id) ?></td>
                            <td><?= h($estoque->produto_id) ?></td>
                            <td><?= h($estoque->funcionario_id) ?></td>
                            <td><?= h($estoque->quantidade) ?></td>
                            <td><?= h($estoque->data_lancamento) ?></td>
                            <td><?= h($estoque->data_baixa) ?></td>
                            <td><?= h($estoque->tipo_operacao) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Estoque', 'action' => 'view', $estoque->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Estoque', 'action' => 'edit', $estoque->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Estoque', 'action' => 'delete', $estoque->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estoque->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Financeiro') ?></h4>
                <?php if (!empty($funcionario->financeiro)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Funcionario Id') ?></th>
                            <th><?= __('Ganho Id') ?></th>
                            <th><?= __('Gastos Id') ?></th>
                            <th><?= __('Valor Liquido') ?></th>
                            <th><?= __('Mes Fechamento') ?></th>
                            <th><?= __('Data Lancada') ?></th>
                            <th><?= __('Ano') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($funcionario->financeiro as $financeiro) : ?>
                        <tr>
                            <td><?= h($financeiro->id) ?></td>
                            <td><?= h($financeiro->funcionario_id) ?></td>
                            <td><?= h($financeiro->ganho_id) ?></td>
                            <td><?= h($financeiro->gastos_id) ?></td>
                            <td><?= h($financeiro->valor_liquido) ?></td>
                            <td><?= h($financeiro->mes_fechamento) ?></td>
                            <td><?= h($financeiro->data_lancada) ?></td>
                            <td><?= h($financeiro->ano) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Financeiro', 'action' => 'view', $financeiro->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Financeiro', 'action' => 'edit', $financeiro->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Financeiro', 'action' => 'delete', $financeiro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $financeiro->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Gastos') ?></h4>
                <?php if (!empty($funcionario->gastos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Funcionario Id') ?></th>
                            <th><?= __('Produto Id') ?></th>
                            <th><?= __('Valor Gastos') ?></th>
                            <th><?= __('Data Gastos') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($funcionario->gastos as $gasto) : ?>
                        <tr>
                            <td><?= h($gasto->id) ?></td>
                            <td><?= h($gasto->funcionario_id) ?></td>
                            <td><?= h($gasto->produto_id) ?></td>
                            <td><?= h($gasto->valor_gastos) ?></td>
                            <td><?= h($gasto->data_gastos) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Gastos', 'action' => 'view', $gasto->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Gastos', 'action' => 'edit', $gasto->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Gastos', 'action' => 'delete', $gasto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gasto->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Hospedagem') ?></h4>
                <?php if (!empty($funcionario->hospedagem)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Funcionario Id') ?></th>
                            <th><?= __('Reserva Id') ?></th>
                            <th><?= __('Data Hospedagem') ?></th>
                            <th><?= __('Valor Total') ?></th>
                            <th><?= __('Tipo Pagamento') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($funcionario->hospedagem as $hospedagem) : ?>
                        <tr>
                            <td><?= h($hospedagem->id) ?></td>
                            <td><?= h($hospedagem->funcionario_id) ?></td>
                            <td><?= h($hospedagem->reserva_id) ?></td>
                            <td><?= h($hospedagem->data_hospedagem) ?></td>
                            <td><?= h($hospedagem->valor_total) ?></td>
                            <td><?= h($hospedagem->tipo_pagamento) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Hospedagem', 'action' => 'view', $hospedagem->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Hospedagem', 'action' => 'edit', $hospedagem->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Hospedagem', 'action' => 'delete', $hospedagem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hospedagem->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Reserva') ?></h4>
                <?php if (!empty($funcionario->reserva)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Cliente Id') ?></th>
                            <th><?= __('Quarto Id') ?></th>
                            <th><?= __('Funcionario Id') ?></th>
                            <th><?= __('Data Reserva') ?></th>
                            <th><?= __('Data Entrada') ?></th>
                            <th><?= __('Data Saida') ?></th>
                            <th><?= __('Pessoas') ?></th>
                            <th><?= __('Criancas') ?></th>
                            <th><?= __('Valor Reserva') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($funcionario->reserva as $reserva) : ?>
                        <tr>
                            <td><?= h($reserva->id) ?></td>
                            <td><?= h($reserva->cliente_id) ?></td>
                            <td><?= h($reserva->quarto_id) ?></td>
                            <td><?= h($reserva->funcionario_id) ?></td>
                            <td><?= h($reserva->data_reserva) ?></td>
                            <td><?= h($reserva->data_entrada) ?></td>
                            <td><?= h($reserva->data_saida) ?></td>
                            <td><?= h($reserva->pessoas) ?></td>
                            <td><?= h($reserva->criancas) ?></td>
                            <td><?= h($reserva->valor_reserva) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Reserva', 'action' => 'view', $reserva->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Reserva', 'action' => 'edit', $reserva->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Reserva', 'action' => 'delete', $reserva->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reserva->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Telefone') ?></h4>
                <?php if (!empty($funcionario->telefone)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Numero') ?></th>
                            <th><?= __('Tipo Contato') ?></th>
                            <th><?= __('Cliente Id') ?></th>
                            <th><?= __('Funcionario Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($funcionario->telefone as $telefone) : ?>
                        <tr>
                            <td><?= h($telefone->id) ?></td>
                            <td><?= h($telefone->numero) ?></td>
                            <td><?= h($telefone->tipo_contato) ?></td>
                            <td><?= h($telefone->cliente_id) ?></td>
                            <td><?= h($telefone->funcionario_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Telefone', 'action' => 'view', $telefone->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Telefone', 'action' => 'edit', $telefone->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Telefone', 'action' => 'delete', $telefone->id], ['confirm' => __('Are you sure you want to delete # {0}?', $telefone->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>