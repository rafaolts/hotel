<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HospedagemServico Model
 *
 * @property \App\Model\Table\HospedagemTable&\Cake\ORM\Association\BelongsTo $Hospedagem
 * @property \App\Model\Table\ServicoTable&\Cake\ORM\Association\BelongsTo $Servico
 *
 * @method \App\Model\Entity\HospedagemServico newEmptyEntity()
 * @method \App\Model\Entity\HospedagemServico newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\HospedagemServico> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\HospedagemServico get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\HospedagemServico findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\HospedagemServico patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\HospedagemServico> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\HospedagemServico|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\HospedagemServico saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\HospedagemServico>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\HospedagemServico>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\HospedagemServico>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\HospedagemServico> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\HospedagemServico>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\HospedagemServico>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\HospedagemServico>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\HospedagemServico> deleteManyOrFail(iterable $entities, array $options = [])
 */
class HospedagemServicoTable extends Table
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

        $this->setTable('hospedagem_servico');
        $this->setDisplayField(['hospedagem_id', 'servico_id']);
        $this->setPrimaryKey(['hospedagem_id', 'servico_id']);

        $this->belongsTo('Hospedagem', [
            'foreignKey' => 'hospedagem_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Servico', [
            'foreignKey' => 'servico_id',
            'joinType' => 'INNER',
        ]);
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
        $rules->add($rules->existsIn(['servico_id'], 'Servico'), ['errorField' => 'servico_id']);

        return $rules;
    }
}
