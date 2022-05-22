<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LandingPages Model
 *
 * @method \App\Model\Entity\LandingPage newEmptyEntity()
 * @method \App\Model\Entity\LandingPage newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\LandingPage[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LandingPage get($primaryKey, $options = [])
 * @method \App\Model\Entity\LandingPage findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\LandingPage patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LandingPage[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\LandingPage|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LandingPage saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LandingPage[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\LandingPage[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\LandingPage[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\LandingPage[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class LandingPagesTable extends Table
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

        $this->setTable('landing_pages');
        $this->setDisplayField('title');
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
            ->scalar('title')
            ->maxLength('title', 100)
            ->allowEmptyString('title');

        $validator
            ->scalar('subtitle')
            ->maxLength('subtitle', 250)
            ->allowEmptyString('subtitle');

        $validator
            ->scalar('minititle')
            ->maxLength('minititle', 250)
            ->allowEmptyString('minititle');

        $validator
            ->scalar('photo')
            ->maxLength('photo', 250)
            ->allowEmptyString('photo');

        $validator
            ->scalar('bio')
            ->maxLength('bio', 250)
            ->allowEmptyString('bio');

        $validator
            ->scalar('copywrite')
            ->maxLength('copywrite', 250)
            ->allowEmptyString('copywrite');

        $validator
            ->scalar('path')
            ->maxLength('path', 128)
            ->allowEmptyString('path');

        return $validator;
    }
}
