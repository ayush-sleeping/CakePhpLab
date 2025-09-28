<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

// UsersTable handles all database logic for the users table
class UsersTable extends Table
{
    // Set up table config and behaviors
    public function initialize(array $config): void
    {
        parent::initialize($config);
        $this->setTable('users'); // Table name in DB
        $this->setDisplayField('name'); // Field to show in dropdowns/lists
        $this->setPrimaryKey('id'); // Primary key column
        $this->addBehavior('Timestamp'); // Auto-manage created/modified fields
    }

    // Define validation rules for user fields
    public function validationDefault(Validator $validator): Validator
    {
        // Name: required, not empty, max 255 chars
        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        // Email: required, must be valid, unique
        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email')
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        // Password: required, not empty, min 6 chars
        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmptyString('password')
            ->minLength('password', 6, 'Password must be at least 6 characters long');

        // Confirm password: must match password
        $validator
            ->scalar('confirm_password')
            ->requirePresence('confirm_password', 'create')
            ->notEmptyString('confirm_password')
            ->add('confirm_password', 'compareWith', [
                'rule' => ['compareWith', 'password'],
                'message' => 'Password confirmation does not match password'
            ]);

        return $validator;
    }

    // Add application integrity rules
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        // Email must be unique in users table
        $rules->add($rules->isUnique(['email']), ['errorField' => 'email']);
        return $rules;
    }
}
