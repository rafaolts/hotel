<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Telefone Model
 *
 * @property \App\Model\Table\ClienteTable&\Cake\ORM\Association\BelongsTo $Cliente
 * @property \App\Model\Table\FuncionarioTable&\Cake\ORM\Association\BelongsTo $Funcionario
 *
 * @method \App\Model\Entity\Telefone newEmptyEntity()
 * @method \App\Model\Entity\Telefone newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Telefone> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Telefone get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Telefone findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Telefone patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Telefone> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Telefone|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Telefone saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Telefone>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Telefone>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Telefone>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Telefone> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Telefone>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Telefone>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Telefone>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Telefone> deleteManyOrFail(iterable $entities, array $options = [])
 */
class TelefoneTable extends Table
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

        $this->setTable('telefone');
        $this->setDisplayField('numero');
        $this->setPrimaryKey('id');

        $this->belongsTo('Cliente', [
            'foreignKey' => 'cliente_id',
        ]);
        $this->belongsTo('Funcionario', [
            'foreignKey' => 'funcionario_id',
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
            ->scalar('numero')
            ->maxLength('numero', 20)
            ->requirePresence('numero', 'create')
            ->notEmptyString('numero');

        $validator
            ->scalar('tipo_contato')
            ->maxLength('tipo_contato', 20)
            ->requirePresence('tipo_contato', 'create')
            ->notEmptyString('tipo_contato');

        $validator
            ->integer('cliente_id')
            ->allowEmptyString('cliente_id');

        $validator
            ->integer('funcionario_id')
            ->allowEmptyString('funcionario_id');

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
        $rules->add($rules->existsIn(['cliente_id'], 'Cliente'), ['errorField' => 'cliente_id']);
        $rules->add($rules->existsIn(['funcionario_id'], 'Funcionario'), ['errorField' => 'funcionario_id']);

        return $rules;
    }
}
