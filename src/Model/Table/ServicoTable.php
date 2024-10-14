<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Servico Model
 *
 * @property \App\Model\Table\HospedagemTable&\Cake\ORM\Association\BelongsToMany $Hospedagem
 *
 * @method \App\Model\Entity\Servico newEmptyEntity()
 * @method \App\Model\Entity\Servico newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Servico> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Servico get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Servico findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Servico patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Servico> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Servico|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Servico saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Servico>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Servico>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Servico>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Servico> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Servico>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Servico>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Servico>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Servico> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ServicoTable extends Table
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

        $this->setTable('servico');
        $this->setDisplayField('tipo_servico');
        $this->setPrimaryKey('id');

        $this->belongsToMany('Hospedagem', [
            'foreignKey' => 'servico_id',
            'targetForeignKey' => 'hospedagem_id',
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
            ->scalar('tipo_servico')
            ->maxLength('tipo_servico', 30)
            ->requirePresence('tipo_servico', 'create')
            ->notEmptyString('tipo_servico');

        $validator
            ->decimal('valor_servico')
            ->requirePresence('valor_servico', 'create')
            ->notEmptyString('valor_servico');

        return $validator;
    }
}
