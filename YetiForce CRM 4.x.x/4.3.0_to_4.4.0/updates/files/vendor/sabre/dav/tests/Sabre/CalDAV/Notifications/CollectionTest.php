<?php

namespace Sabre\CalDAV\Notifications;

use Sabre\CalDAV;

class CollectionTest extends \PHPUnit_Framework_TestCase
{
	protected $caldavBackend;
	protected $principalUri;
	protected $notification;

	public function getInstance()
	{
		$this->principalUri = 'principals/user1';

		$this->notification = new CalDAV\Xml\Notification\SystemStatus(1, '"1"');

		$this->caldavBackend = new CalDAV\Backend\MockSharing([], [], [
			'principals/user1' => [
				$this->notification
			]
		]);

		return new Collection($this->caldavBackend, $this->principalUri);
	}

	public function testGetChildren()
	{
		$col = $this->getInstance();
		$this->assertSame('notifications', $col->getName());

		$this->assertSame([
			new Node($this->caldavBackend, $this->principalUri, $this->notification)
		], $col->getChildren());
	}

	public function testGetOwner()
	{
		$col = $this->getInstance();
		$this->assertSame('principals/user1', $col->getOwner());
	}

	public function testGetGroup()
	{
		$col = $this->getInstance();
		$this->assertNull($col->getGroup());
	}

	public function testGetACL()
	{
		$col = $this->getInstance();
		$expected = [
			[
				'privilege' => '{DAV:}all',
				'principal' => '{DAV:}owner',
				'protected' => true,
			],
		];

		$this->assertSame($expected, $col->getACL());
	}

	/**
	 * @expectedException \Sabre\DAV\Exception\Forbidden
	 */
	public function testSetACL()
	{
		$col = $this->getInstance();
		$col->setACL([]);
	}

	public function testGetSupportedPrivilegeSet()
	{
		$col = $this->getInstance();
		$this->assertNull($col->getSupportedPrivilegeSet());
	}
}