<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cliente Model
 *
 * @property \App\Model\Table\ReservaTable&\Cake\ORM\Association\HasMany $Reserva
 * @property \App\Model\Table\TelefoneTable&\Cake\ORM\Association\HasMany $Telefone
 *
 * @method \App\Model\Entity\Cliente newEmptyEntity()
 * @method \App\Model\Entity\Cliente newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Cliente> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cliente get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Cliente findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Cliente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Cliente> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cliente|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Cliente saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Cliente>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Cliente>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Cliente>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Cliente> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Cliente>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Cliente>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Cliente>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Cliente> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ClienteTable extends Table
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

        $this->setTable('cliente');
        $this->setDisplayField('nome');
        $this->setPrimaryKey('id');

        $this->hasMany('Reserva', [
            'foreignKey' => 'cliente_id',
        ]);
        $this->hasMany('Telefone', [
            'foreignKey' => 'cliente_id',
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
            ->scalar('endereco')
            ->maxLength('endereco', 150)
            ->requirePresence('endereco', 'create')
            ->notEmptyString('endereco');

        $validator
            ->scalar('cidade')
            ->maxLength('cidade', 60)
            ->requirePresence('cidade', 'create')
            ->notEmptyString('cidade');

        $validator
            ->scalar('estado')
            ->maxLength('estado', 60)
            ->requirePresence('estado', 'create')
            ->notEmptyString('estado');

        $validator
            ->scalar('pais')
            ->maxLength('pais', 85)
            ->requirePresence('pais', 'create')
            ->notEmptyString('pais');

        $validator
            ->scalar('motivo_visita')
            ->maxLength('motivo_visita', 20)
            ->requirePresence('motivo_visita', 'create')
            ->notEmptyString('motivo_visita');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('redes_sociais')
            ->maxLength('redes_sociais', 30)
            ->requirePresence('redes_sociais', 'create')
            ->notEmptyString('redes_sociais');

        $validator
            ->scalar('profissao')
            ->maxLength('profissao', 30)
            ->requirePresence('profissao', 'create')
            ->notEmptyString('profissao');

        $validator
            ->scalar('doc_pessoal')
            ->maxLength('doc_pessoal', 20)
            ->requirePresence('doc_pessoal', 'create')
            ->notEmptyString('doc_pessoal');

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
