<?php
declare(strict_types=1);
use Migrations\BaseMigration;

// Migration to create the 'users' table with required columns and unique email index
class CreateUsers extends BaseMigration
{
    public function change(): void
    {
        // Create 'users' table
        $table = $this->table('users');

        // Add 'name' column (string, required)
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);

        // Add 'email' column (string, required)
        $table->addColumn('email', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);

        // Add 'password' column (string, required, hashed password)
        $table->addColumn('password', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);

        // Add 'created' timestamp column (required)
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);

        // Add 'modified' timestamp column (required)
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);

        // Add unique index on 'email' column
        $table->addIndex([
            'email',
        ], [
            'name' => 'UNIQUE_EMAIL',
            'unique' => true,
        ]);

        // Create the table in the database
        $table->create();
    }
}
