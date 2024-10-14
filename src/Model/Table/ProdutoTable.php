<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Produto Model
 *
 * @property \App\Model\Table\EstoqueTable&\Cake\ORM\Association\HasMany $Estoque
 * @property \App\Model\Table\GastosTable&\Cake\ORM\Association\HasMany $Gastos
 * @property \App\Model\Table\HospedagemTable&\Cake\ORM\Association\BelongsToMany $Hospedagem
 *
 * @method \App\Model\Entity\Produto newEmptyEntity()
 * @method \App\Model\Entity\Produto newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Produto> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Produto get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Produto findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Produto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Produto> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Produto|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Produto saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Produto>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Produto>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Produto>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Produto> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Produto>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Produto>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Produto>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Produto> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ProdutoTable extends Table
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

        $this->setTable('produto');
        $this->setDisplayField('tipo_produto');
        $this->setPrimaryKey('id');

        $this->hasMany('Estoque', [
            'foreignKey' => 'produto_id',
        ]);
        $this->hasMany('Gastos', [
            'foreignKey' => 'produto_id',
        ]);
        $this->belongsToMany('Hospedagem', [
            'foreignKey' => 'produto_id',
            'targetForeignKey' => 'hospedagem_id',
            'joinTable' => 'hospedagem_produto',
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
            ->scalar('tipo_produto')
            ->maxLength('tipo_produto', 20)
            ->requirePresence('tipo_produto', 'create')
            ->notEmptyString('tipo_produto');

        $validator
            ->scalar('produto')
            ->maxLength('produto', 30)
            ->requirePresence('produto', 'create')
            ->notEmptyString('produto');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 100)
            ->requirePresence('descricao', 'create')
            ->notEmptyString('descricao');

        return $validator;
    }
}
