<?php
/**
*
* @package VK.com authorization
* @copyright LavIgor (https://github.com/LavIgor)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace lavigor\vk\event;

/**
* Event listener
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	public function __construct(\phpbb\user $user)
	{
		$this->user = $user;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup'	=> 'load_language_for_auth',
		);
	}

	/**
	 * @param object $event The event object
	 * @return null
	 * @access public
	 */
	public function load_language_for_auth($event)
	{
		if (in_array($event['user_lang_name'], array('ru', 'uk', 'be')))
		{
			$this->user->lang = array_merge($this->user->lang, array('AUTH_PROVIDER_OAUTH_SERVICE_VK' => 'ВКонтакте'));
		}
		else
		{
			$this->user->lang = array_merge($this->user->lang, array('AUTH_PROVIDER_OAUTH_SERVICE_VK' => 'VK'));
		}
	}
}
