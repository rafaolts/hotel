<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ganhos Model
 *
 * @property \App\Model\Table\HospedagemTable&\Cake\ORM\Association\BelongsTo $Hospedagem
 * @property \App\Model\Table\FinanceiroTable&\Cake\ORM\Association\HasMany $Financeiro
 *
 * @method \App\Model\Entity\Ganho newEmptyEntity()
 * @method \App\Model\Entity\Ganho newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Ganho> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ganho get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Ganho findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Ganho patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Ganho> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ganho|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Ganho saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Ganho>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Ganho>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Ganho>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Ganho> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Ganho>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Ganho>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Ganho>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Ganho> deleteManyOrFail(iterable $entities, array $options = [])
 */
class GanhosTable extends Table
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

        $this->setTable('ganhos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Hospedagem', [
            'foreignKey' => 'hospedagem_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Financeiro', [
            'foreignKey' => 'ganho_id',
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
            ->integer('hospedagem_id')
            ->notEmptyString('hospedagem_id');

        $validator
            ->decimal('valor_ganho')
            ->requirePresence('valor_ganho', 'create')
            ->notEmptyString('valor_ganho');

        $validator
            ->date('data_ganho')
            ->requirePresence('data_ganho', 'create')
            ->notEmptyDate('data_ganho');

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
        $rules->add($rules->existsIn(['hospedagem_id'], 'Hospedagem'), ['errorField' => 'hospedagem_id']);

        return $rules;
    }
}
