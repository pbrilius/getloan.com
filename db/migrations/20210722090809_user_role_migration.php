<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class UserRoleMigration extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
      $userRole = $this->table('user_role');
      $userRole->addColumn('user_id', 'integer', ['null' => false]);
      $userRole->addColumn('role_id', 'integer', ['null' => false]);
      $userRole->changeComment('Users roles generic connector');

      $userRole->addForeignKey('user_id', 'user', 'id', ['delete' => 'CASCADE', 'update' => 'NO_ACTION']);
      $userRole->addForeignKey('role_id', 'role', 'id', ['delete' => 'CASCADE', 'update' => 'NO_ACTION']);

      $userRole->save();
    }
}
