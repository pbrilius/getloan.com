<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PremiumMembership Model
 *
 * @method \App\Model\Entity\PremiumMembership newEmptyEntity()
 * @method \App\Model\Entity\PremiumMembership newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\PremiumMembership[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PremiumMembership get($primaryKey, $options = [])
 * @method \App\Model\Entity\PremiumMembership findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\PremiumMembership patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PremiumMembership[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\PremiumMembership|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PremiumMembership saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PremiumMembership[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\PremiumMembership[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\PremiumMembership[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\PremiumMembership[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PremiumMembershipTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('premium_membership');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('type')
            ->maxLength('type', 256)
            ->requirePresence('type', 'create')
            ->notEmptyString('type');

        $validator
            ->integer('scorepointed')
            ->requirePresence('scorepointed', 'create')
            ->notEmptyString('scorepointed');

        return $validator;
    }
}
