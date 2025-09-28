<?php
declare(strict_types=1);

namespace App\Model\Entity;
use Cake\Utility\Security;
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 */
class User extends Entity
{
    // Fields that can be mass assigned
    protected array $_accessible = [
        'name' => true,
        'email' => true,
        'password' => true,
        'confirm_password' => true,
        'created' => true,
        'modified' => true,
    ];

    // Fields hidden from JSON or array output
    protected array $_hidden = [
        'password',
    ];

    // Hash password before saving to database
    protected function _setPassword(string $password): ?string
    {
        if (strlen($password) > 0) {
            return password_hash($password, PASSWORD_DEFAULT);
        }
        return null;
    }

    /**
     * Check if given password matches the stored hash
     * @param string $password Plain text password
     * @return bool True if match, false otherwise
    */
    public function verifyPassword(string $password): bool
    {
        return password_verify($password, $this->password);
    }
}
