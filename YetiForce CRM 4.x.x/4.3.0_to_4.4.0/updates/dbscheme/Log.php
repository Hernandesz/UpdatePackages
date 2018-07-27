<?php
namespace Importers;

/**
 * Class that imports log database
 * @package YetiForce.Install
 * @copyright YetiForce Sp. z o.o.
 * @license YetiForce Public License 3.0 (licenses/LicenseEN.txt or yetiforce.com)
 * @author Mariusz Krzaczkowski <m.krzaczkowski@yetiforce.com>
 */
class Log extends \App\Db\Importers\Base
{

	public $dbType = 'log';

	public function scheme()
	{
		$this->tables = [
			'l_#__batchmethod' => [
				'columns' => [
					'id' => $this->primaryKeyUnsigned(11)->notNull(),
					'method' => $this->stringType(50)->notNull(),
					'params' => $this->text(),
					'status' => $this->smallInteger(1)->unsigned()->notNull(),
					'userid' => $this->integer(),
					'date' => $this->date(),
					'message' => $this->text(),
				],
				'columns_mysql' => [
					'status' => $this->tinyInteger(1)->unsigned()->notNull(),
				],
				'engine' => 'InnoDB',
				'charset' => 'utf8'
			],
			'l_#__profile' => [
				'columns' => [
					'id' => $this->integer(10)->unsigned()->notNull()->defaultValue(0),
					'category' => $this->stringType()->notNull(),
					'info' => $this->text(),
					'log_time' => $this->stringType(20)->notNull(),
					'trace' => $this->text(),
					'level' => $this->stringType(),
					'duration' => $this->decimal('7,3')->notNull(), //
				],
				'index' => [
					['id', 'id'],
					['category', 'category'],
				],
				'engine' => 'InnoDB',
				'charset' => 'utf8'
			],
			'l_#__settings_tracker_basic' => [
				'columns' => [
					'user_id' => $this->integer(10)->unsigned(), //
				],
				'engine' => 'InnoDB',
				'charset' => 'utf8'
			],
		];
	}
}
