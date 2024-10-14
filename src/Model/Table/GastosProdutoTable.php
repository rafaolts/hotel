<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GastosProduto Model
 *
 * @method \App\Model\Entity\GastosProduto newEmptyEntity()
 * @method \App\Model\Entity\GastosProduto newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\GastosProduto> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GastosProduto get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\GastosProduto findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\GastosProduto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\GastosProduto> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\GastosProduto|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\GastosProduto saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\GastosProduto>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\GastosProduto>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\GastosProduto>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\GastosProduto> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\GastosProduto>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\GastosProduto>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\GastosProduto>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\GastosProduto> deleteManyOrFail(iterable $entities, array $options = [])
 */
class GastosProdutoTable extends Table
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

        $this->setTable('gastos_produto');
        $this->setDisplayField(['cod_gastos', 'cod_produto']);
        $this->setPrimaryKey(['cod_gastos', 'cod_produto']);
    }
}
