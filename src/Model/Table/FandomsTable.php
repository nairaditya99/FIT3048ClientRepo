<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Fandoms Model
 *
 * @method \App\Model\Entity\Fandom newEmptyEntity()
 * @method \App\Model\Entity\Fandom newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Fandom[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Fandom get($primaryKey, $options = [])
 * @method \App\Model\Entity\Fandom findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Fandom patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Fandom[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Fandom|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fandom saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fandom[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Fandom[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Fandom[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Fandom[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class FandomsTable extends Table
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

        $this->setTable('fandoms');
        $this->setDisplayField('name');
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
            ->scalar('name')
            ->maxLength('name', 64)
            ->allowEmptyString('name');

        $validator
            ->scalar('Home_Page_Title')
            ->allowEmptyString('Home_Page_Title');

        $validator
            ->scalar('Home_Page_Subheading')
            ->allowEmptyString('Home_Page_Subheading');

        $validator
            ->scalar('Home_Page_Photo')
            ->maxLength('Home_Page_Photo', 512)
            ->allowEmptyString('Home_Page_Photo');

        $validator
            ->scalar('Section_One_Title')
            ->allowEmptyString('Section_One_Title');

        $validator
            ->scalar('Section_One_Body')
            ->allowEmptyString('Section_One_Body');

        $validator
            ->scalar('Section_One_Video_URL')
            ->maxLength('Section_One_Video_URL', 512)
            ->allowEmptyString('Section_One_Video_URL');

        $validator
            ->scalar('Section_Two_Title')
            ->allowEmptyString('Section_Two_Title');

        $validator
            ->scalar('Section_Two_Body')
            ->allowEmptyString('Section_Two_Body');

        $validator
            ->scalar('Section_Two_Photo')
            ->maxLength('Section_Two_Photo', 512)
            ->allowEmptyString('Section_Two_Photo');

        $validator
            ->scalar('Section_Three_Title')
            ->allowEmptyString('Section_Three_Title');

        $validator
            ->scalar('Section_Three_Body')
            ->allowEmptyString('Section_Three_Body');

        $validator
            ->scalar('Section_Three_Video_URL')
            ->maxLength('Section_Three_Video_URL', 512)
            ->allowEmptyString('Section_Three_Video_URL');

        $validator
            ->scalar('Section_Four_Title')
            ->allowEmptyString('Section_Four_Title');

        $validator
            ->scalar('Section_Four_Body')
            ->allowEmptyString('Section_Four_Body');

        $validator
            ->scalar('Section_Four_Video_URL')
            ->maxLength('Section_Four_Video_URL', 512)
            ->allowEmptyString('Section_Four_Video_URL');

        $validator
            ->scalar('Section_Five_Title')
            ->allowEmptyString('Section_Five_Title');

        $validator
            ->scalar('Section_Five_Body')
            ->allowEmptyString('Section_Five_Body');

        $validator
            ->scalar('Section_Five_Video_URL')
            ->maxLength('Section_Five_Video_URL', 512)
            ->allowEmptyString('Section_Five_Video_URL');

        $validator
            ->scalar('Section_Six_Title')
            ->allowEmptyString('Section_Six_Title');

        $validator
            ->scalar('Section_Six_Body')
            ->allowEmptyString('Section_Six_Body');

        $validator
            ->scalar('Section_Six_Video_URL')
            ->maxLength('Section_Six_Video_URL', 512)
            ->allowEmptyString('Section_Six_Video_URL');

        $validator
            ->scalar('Section_Seven_Title')
            ->allowEmptyString('Section_Seven_Title');

        $validator
            ->scalar('Section_Seven_Body')
            ->allowEmptyString('Section_Seven_Body');

        $validator
            ->scalar('Section_Seven_Photo')
            ->maxLength('Section_Seven_Photo', 512)
            ->allowEmptyString('Section_Seven_Photo');

        $validator
            ->scalar('Section_Eight_Title')
            ->allowEmptyString('Section_Eight_Title');

        $validator
            ->scalar('Section_Eight_Photo')
            ->maxLength('Section_Eight_Photo', 512)
            ->allowEmptyString('Section_Eight_Photo');

        $validator
            ->scalar('Section_Eight_Body')
            ->allowEmptyString('Section_Eight_Body');

        $validator
            ->scalar('Section_Nine_Title')
            ->allowEmptyString('Section_Nine_Title');

        $validator
            ->scalar('Section_Nine_Photo')
            ->maxLength('Section_Nine_Photo', 512)
            ->allowEmptyString('Section_Nine_Photo');

        $validator
            ->scalar('Section_Nine_Body')
            ->allowEmptyString('Section_Nine_Body');

        $validator
            ->scalar('Section_Nine_Video_URL')
            ->maxLength('Section_Nine_Video_URL', 512)
            ->allowEmptyString('Section_Nine_Video_URL');

        $validator
            ->scalar('Section_Ten_Title')
            ->allowEmptyString('Section_Ten_Title');

        $validator
            ->scalar('Section_Ten_Photo')
            ->maxLength('Section_Ten_Photo', 512)
            ->allowEmptyString('Section_Ten_Photo');

        $validator
            ->scalar('Section_Ten_Body_One')
            ->allowEmptyString('Section_Ten_Body_One');

        $validator
            ->scalar('Section_Ten_Video_One_URL')
            ->maxLength('Section_Ten_Video_One_URL', 512)
            ->allowEmptyString('Section_Ten_Video_One_URL');

        $validator
            ->scalar('Section_Ten_Video_Two_URL')
            ->maxLength('Section_Ten_Video_Two_URL', 512)
            ->allowEmptyString('Section_Ten_Video_Two_URL');

        $validator
            ->scalar('Section_Ten_Body_Two')
            ->allowEmptyString('Section_Ten_Body_Two');

        $validator
            ->scalar('Section_Eleven_Title')
            ->allowEmptyString('Section_Eleven_Title');

        $validator
            ->scalar('Section_Eleven_Photo')
            ->maxLength('Section_Eleven_Photo', 512)
            ->allowEmptyString('Section_Eleven_Photo');

        $validator
            ->scalar('Section_Eleven_Body')
            ->allowEmptyString('Section_Eleven_Body');

        $validator
            ->scalar('Section_Twelve_Title')
            ->allowEmptyString('Section_Twelve_Title');

        $validator
            ->scalar('Section_Twelve_Photo')
            ->maxLength('Section_Twelve_Photo', 512)
            ->allowEmptyString('Section_Twelve_Photo');

        $validator
            ->scalar('Section_Twelve_Body')
            ->allowEmptyString('Section_Twelve_Body');

        $validator
            ->scalar('Section_Thirteen_Title')
            ->allowEmptyString('Section_Thirteen_Title');

        $validator
            ->scalar('Section_Thirteen_Photo')
            ->maxLength('Section_Thirteen_Photo', 512)
            ->allowEmptyString('Section_Thirteen_Photo');

        $validator
            ->scalar('Section_Thirteen_Body')
            ->allowEmptyString('Section_Thirteen_Body');

        $validator
            ->scalar('Section_Fourteen_Title')
            ->allowEmptyString('Section_Fourteen_Title');

        $validator
            ->scalar('Section_Fourteen_Photo')
            ->maxLength('Section_Fourteen_Photo', 512)
            ->allowEmptyString('Section_Fourteen_Photo');

        $validator
            ->scalar('Section_Fourteen_Body')
            ->allowEmptyString('Section_Fourteen_Body');

        $validator
            ->scalar('Section_Fifteen_Title')
            ->allowEmptyString('Section_Fifteen_Title');

        $validator
            ->scalar('Section_Fifteen_Photo')
            ->maxLength('Section_Fifteen_Photo', 512)
            ->allowEmptyString('Section_Fifteen_Photo');

        $validator
            ->scalar('Section_Fifteen_Body')
            ->allowEmptyString('Section_Fifteen_Body');

        $validator
            ->scalar('Section_Fifteen_Video_URL')
            ->maxLength('Section_Fifteen_Video_URL', 512)
            ->allowEmptyString('Section_Fifteen_Video_URL');

        return $validator;
    }
}
