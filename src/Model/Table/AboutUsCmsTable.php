<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AboutUsCms Model
 *
 * @method \App\Model\Entity\AboutUsCm newEmptyEntity()
 * @method \App\Model\Entity\AboutUsCm newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\AboutUsCm[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AboutUsCm get($primaryKey, $options = [])
 * @method \App\Model\Entity\AboutUsCm findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\AboutUsCm patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AboutUsCm[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\AboutUsCm|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AboutUsCm saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AboutUsCm[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\AboutUsCm[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\AboutUsCm[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\AboutUsCm[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AboutUsCmsTable extends Table
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

        $this->setTable('about_us_cms');
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
            ->scalar('Banner_Photo_1')
            ->maxLength('Banner_Photo_1', 512)
            ->allowEmptyString('Banner_Photo_1');

        $validator
            ->scalar('S1_Title')
            ->allowEmptyString('S1_Title');

        $validator
            ->scalar('S1_Body')
            ->allowEmptyString('S1_Body');

        $validator
            ->scalar('S1_Sub_Title_1')
            ->allowEmptyString('S1_Sub_Title_1');

        $validator
            ->scalar('S1_Sub_Body_1')
            ->allowEmptyString('S1_Sub_Body_1');

        $validator
            ->scalar('S1_Sub_Title_2')
            ->allowEmptyString('S1_Sub_Title_2');

        $validator
            ->scalar('S1_Sub_Body_2')
            ->allowEmptyString('S1_Sub_Body_2');

        $validator
            ->scalar('S1_Sub_Title_3')
            ->allowEmptyString('S1_Sub_Title_3');

        $validator
            ->scalar('S1_Sub_Body_3')
            ->allowEmptyString('S1_Sub_Body_3');

        $validator
            ->scalar('S2_Title')
            ->allowEmptyString('S2_Title');

        $validator
            ->scalar('S2_Body')
            ->allowEmptyString('S2_Body');

        $validator
            ->scalar('S2_Sub_Title')
            ->allowEmptyString('S2_Sub_Title');

        $validator
            ->scalar('S2_Sub_Body')
            ->allowEmptyString('S2_Sub_Body');

        $validator
            ->scalar('S2_Sub_Photo')
            ->maxLength('S2_Sub_Photo', 512)
            ->allowEmptyString('S2_Sub_Photo');

        $validator
            ->scalar('S3_Title')
            ->allowEmptyString('S3_Title');

        $validator
            ->scalar('S3_Sub_Title_1')
            ->allowEmptyString('S3_Sub_Title_1');

        $validator
            ->scalar('S3_Sub_Body_1')
            ->allowEmptyString('S3_Sub_Body_1');

        $validator
            ->scalar('S3_Sub_Title_2')
            ->allowEmptyString('S3_Sub_Title_2');

        $validator
            ->scalar('S3_Sub_Body_2')
            ->allowEmptyString('S3_Sub_Body_2');

        $validator
            ->scalar('S3_Photo')
            ->allowEmptyString('S3_Photo');

        return $validator;
    }
}
