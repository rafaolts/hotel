<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HospedagemProduto Model
 *
 * @property \App\Model\Table\HospedagemTable&\Cake\ORM\Association\BelongsTo $Hospedagem
 * @property \App\Model\Table\ProdutoTable&\Cake\ORM\Association\BelongsTo $Produto
 *
 * @method \App\Model\Entity\HospedagemProduto newEmptyEntity()
 * @method \App\Model\Entity\HospedagemProduto newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\HospedagemProduto> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\HospedagemProduto get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\HospedagemProduto findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\HospedagemProduto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\HospedagemProduto> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\HospedagemProduto|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\HospedagemProduto saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\HospedagemProduto>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\HospedagemProduto>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\HospedagemProduto>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\HospedagemProduto> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\HospedagemProduto>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\HospedagemProduto>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\HospedagemProduto>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\HospedagemProduto> deleteManyOrFail(iterable $entities, array $options = [])
 */
class HospedagemProdutoTable extends Table
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

        $this->setTable('hospedagem_produto');
        $this->setDisplayField(['hospedagem_id', 'produto_id']);
        $this->setPrimaryKey(['hospedagem_id', 'produto_id']);

        $this->belongsTo('Hospedagem', [
            'foreignKey' => 'hospedagem_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Produto', [
            'foreignKey' => 'produto_id',
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
        $rules->add($rules->existsIn(['produto_id'], 'Produto'), ['errorField' => 'produto_id']);

        return $rules;
    }
}
