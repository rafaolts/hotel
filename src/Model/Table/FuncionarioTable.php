<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Funcionario Model
 *
 * @property \App\Model\Table\EstoqueTable&\Cake\ORM\Association\HasMany $Estoque
 * @property \App\Model\Table\FinanceiroTable&\Cake\ORM\Association\HasMany $Financeiro
 * @property \App\Model\Table\GastosTable&\Cake\ORM\Association\HasMany $Gastos
 * @property \App\Model\Table\HospedagemTable&\Cake\ORM\Association\HasMany $Hospedagem
 * @property \App\Model\Table\ReservaTable&\Cake\ORM\Association\HasMany $Reserva
 * @property \App\Model\Table\TelefoneTable&\Cake\ORM\Association\HasMany $Telefone
 *
 * @method \App\Model\Entity\Funcionario newEmptyEntity()
 * @method \App\Model\Entity\Funcionario newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Funcionario> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Funcionario get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Funcionario findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Funcionario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Funcionario> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Funcionario|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Funcionario saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Funcionario>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Funcionario>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Funcionario>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Funcionario> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Funcionario>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Funcionario>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Funcionario>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Funcionario> deleteManyOrFail(iterable $entities, array $options = [])
 */
class FuncionarioTable extends Table
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

        $this->setTable('funcionario');
        $this->setDisplayField('nome');
        $this->setPrimaryKey('id');

        $this->hasMany('Estoque', [
            'foreignKey' => 'funcionario_id',
        ]);
        $this->hasMany('Financeiro', [
            'foreignKey' => 'funcionario_id',
        ]);
        $this->hasMany('Gastos', [
            'foreignKey' => 'funcionario_id',
        ]);
        $this->hasMany('Hospedagem', [
            'foreignKey' => 'funcionario_id',
        ]);
        $this->hasMany('Reserva', [
            'foreignKey' => 'funcionario_id',
        ]);
        $this->hasMany('Telefone', [
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
            ->scalar('nome')
            ->maxLength('nome', 50)
            ->requirePresence('nome', 'create')
            ->notEmptyString('nome');

        $validator
            ->scalar('cpf')
            ->maxLength('cpf', 11)
            ->requirePresence('cpf', 'create')
            ->notEmptyString('cpf')
            ->add('cpf', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->date('data_nascimento')
            ->requirePresence('data_nascimento', 'create')
            ->notEmptyDate('data_nascimento');

        $validator
            ->scalar('endereco')
            ->maxLength('endereco', 150)
            ->requirePresence('endereco', 'create')
            ->notEmptyString('endereco');

        $validator
            ->scalar('funcao')
            ->maxLength('funcao', 20)
            ->requirePresence('funcao', 'create')
            ->notEmptyString('funcao');

        $validator
            ->decimal('salario')
            ->requirePresence('salario', 'create')
            ->notEmptyString('salario');

        $validator
            ->integer('avaliacao')
            ->requirePresence('avaliacao', 'create')
            ->notEmptyString('avaliacao');

        $validator
            ->dateTime('data_admissao')
            ->requirePresence('data_admissao', 'create')
            ->notEmptyDateTime('data_admissao');

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
        $rules->add($rules->isUnique(['cpf']), ['errorField' => 'cpf']);

        return $rules;
    }
}
