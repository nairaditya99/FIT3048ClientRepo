<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * News Model
 *
 * @property \App\Model\Table\FandomsTable&\Cake\ORM\Association\BelongsTo $Fandoms
 *
 * @method \App\Model\Entity\News newEmptyEntity()
 * @method \App\Model\Entity\News newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\News[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\News get($primaryKey, $options = [])
 * @method \App\Model\Entity\News findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\News patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\News[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\News|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\News saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\News[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\News[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\News[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\News[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class NewsTable extends Table
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

        $this->setTable('news');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->belongsTo('Fandoms', [
            'foreignKey' => 'fandom_id',
            'joinType' => 'INNER',
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('title')
            ->maxLength('title', 128)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        $validator
            ->scalar('source')
            ->maxLength('source', 64)
            ->requirePresence('source', 'create')
            ->notEmptyString('source');

        $validator
            ->scalar('content')
            ->maxLength('content', 256)
            ->requirePresence('content', 'create')
            ->notEmptyString('content');

        $validator
            ->date('date')
            ->requirePresence('date', 'create')
            ->notEmptyDate('date');

        $validator
            ->scalar('location')
            ->maxLength('location', 64)
            ->requirePresence('location', 'create')
            ->notEmptyString('location');

        $validator
            ->scalar('photo')
            ->maxLength('photo', 128)
            ->requirePresence('photo', 'create')
            ->notEmptyString('photo');

        $validator
            ->scalar('link')
            ->maxLength('link', 128)
            ->requirePresence('link', 'create')
            ->notEmptyString('link');

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
        $rules->add($rules->existsIn('fandom_id', 'Fandoms'), ['errorField' => 'fandom_id']);

        return $rules;
    }
}
