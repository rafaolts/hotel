<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Hospedagem Model
 *
 * @property \App\Model\Table\FuncionarioTable&\Cake\ORM\Association\BelongsTo $Funcionario
 * @property \App\Model\Table\ReservaTable&\Cake\ORM\Association\BelongsTo $Reserva
 * @property \App\Model\Table\GanhosTable&\Cake\ORM\Association\HasMany $Ganhos
 * @property \App\Model\Table\ProdutoTable&\Cake\ORM\Association\BelongsToMany $Produto
 * @property \App\Model\Table\ServicoTable&\Cake\ORM\Association\BelongsToMany $Servico
 *
 * @method \App\Model\Entity\Hospedagem newEmptyEntity()
 * @method \App\Model\Entity\Hospedagem newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Hospedagem> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Hospedagem get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Hospedagem findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Hospedagem patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Hospedagem> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Hospedagem|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Hospedagem saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Hospedagem>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Hospedagem>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Hospedagem>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Hospedagem> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Hospedagem>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Hospedagem>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Hospedagem>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Hospedagem> deleteManyOrFail(iterable $entities, array $options = [])
 */
class HospedagemTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('hospedagem');
        $this->setDisplayField('tipo_pagamento');
        $this->setPrimaryKey('id');

        $this->belongsTo('Funcionario', [
            'foreignKey' => 'funcionario_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Reserva', [
            'foreignKey' => 'reserva_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Ganhos', [
            'foreignKey' => 'hospedagem_id',
        ]);
        $this->belongsToMany('Produto', [
            'foreignKey' => 'hospedagem_id',
            'targetForeignKey' => 'produto_id',
            'joinTable' => 'hospedagem_produto',
        ]);
        $this->belongsToMany('Servico', [
            'foreignKey' => 'hospedagem_id',
            'targetForeignKey' => 'servico_id',
            'joinTable' => 'hospedagem_servico',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('funcionario_id')
            ->notEmptyString('funcionario_id');

        $validator
            ->integer('reserva_id')
            ->notEmptyString('reserva_id');

        $validator
            ->dateTime('data_hospedagem')
            ->requirePresence('data_hospedagem', 'create')
            ->notEmptyDateTime('data_hospedagem');

        $validator
            ->decimal('valor_total')
            ->requirePresence('valor_total', 'create')
            ->notEmptyString('valor_total');

        $validator
            ->scalar('tipo_pagamento')
            ->maxLength('tipo_pagamento', 20)
            ->requirePresence('tipo_pagamento', 'create')
            ->notEmptyString('tipo_pagamento');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['funcionario_id'], 'Funcionario'), ['errorField' => 'funcionario_id']);
        $rules->add($rules->existsIn(['reserva_id'], 'Reserva'), ['errorField' => 'reserva_id']);

        return $rules;
    }
}
