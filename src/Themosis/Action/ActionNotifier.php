<?php
namespace Themosis\Action;

defined('DS') or die('No direct script access.');

class ActionNotifier implements ActionObserver
{
	/**
	 * The event class
	*/
	private $action;

    /**
     * Save the event instance as a property
     *
     * @param ActionSubject $action
    */
	public function __construct(ActionSubject $action)
	{
		$this->action = $action;
	}

	/**
	 * Execute the event.
     *
     * @return void
	*/
	public function update()
	{
		$this->action->run();
	}
}