<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class RoleMigration extends AbstractMigration
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
      $role = $this->table('role');
      $role->addColumn('label','string', ['limit' => 256]);
      $role->addColumn('priority', 'integer');
      $role->changeComment('Role generic table');
      $role->addIndex(['label', 'priority'], ['unique' => true]);

      $role->save();
    }
}
