<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Impressions Model
 *
 * @method \App\Model\Entity\Impression get($primaryKey, $options = [])
 * @method \App\Model\Entity\Impression newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Impression[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Impression|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Impression patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Impression[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Impression findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ImpressionsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('impressions');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
        $this->belongsto('files');
        

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('solicitante')
            ->allowEmpty('solicitante');

        $validator
            ->integer('arquivo')
            ->allowEmpty('arquivo');

        $validator
            ->integer('num_copias')
            ->allowEmpty('num_copias');

        $validator
            ->boolean('frente_verso')
            ->allowEmpty('frente_verso');

        $validator
            ->allowEmpty('observacao');

        $validator
            ->allowEmpty('status');

        $validator
            ->allowEmpty('retorno');

        return $validator;
    }
}
