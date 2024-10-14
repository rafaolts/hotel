<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Gastos Model
 *
 * @property \App\Model\Table\FuncionarioTable&\Cake\ORM\Association\BelongsTo $Funcionario
 * @property \App\Model\Table\ProdutoTable&\Cake\ORM\Association\BelongsTo $Produto
 *
 * @method \App\Model\Entity\Gasto newEmptyEntity()
 * @method \App\Model\Entity\Gasto newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Gasto> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Gasto get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Gasto findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Gasto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Gasto> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Gasto|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Gasto saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Gasto>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Gasto>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Gasto>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Gasto> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Gasto>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Gasto>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Gasto>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Gasto> deleteManyOrFail(iterable $entities, array $options = [])
 */
class GastosTable extends Table
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

        $this->setTable('gastos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Funcionario', [
            'foreignKey' => 'funcionario_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Produto', [
            'foreignKey' => 'produto_id',
            'joinType' => 'INNER',
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
            ->integer('produto_id')
            ->notEmptyString('produto_id');

        $validator
            ->decimal('valor_gastos')
            ->requirePresence('valor_gastos', 'create')
            ->notEmptyString('valor_gastos');

        $validator
            ->date('data_gastos')
            ->requirePresence('data_gastos', 'create')
            ->notEmptyDate('data_gastos');

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
        $rules->add($rules->existsIn(['produto_id'], 'Produto'), ['errorField' => 'produto_id']);

        return $rules;
    }
}
