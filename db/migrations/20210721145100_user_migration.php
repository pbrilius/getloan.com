<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class UserMigration extends AbstractMigration
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
      $table = $this->table('user');
      $table->addColumn('username', 'string', ['limit' => 64]);
      $table->addColumn('email', 'string', ['limit' => 256]);
      $table->addColumn('password', 'string',  ['limit' => 256]);
      $table->addIndex(['username', 'email'], ['unique' => true]);
      $table->changeComment('Users entity list created table.');
      $table->create();
    }
}
