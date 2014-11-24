<?php
/**
*
* @package VK.com authorization
* @copyright LavIgor (https://github.com/LavIgor)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace lavigor\vk\auth\provider;

/**
* VK.com OAuth service
*/
class vk extends \phpbb\auth\provider\oauth\service\base
{
	/**
	* phpBB config
	*
	* @var \phpbb\config\config
	*/
	protected $config;

	/**
	* phpBB request
	*
	* @var \phpbb\request\request_interface
	*/
	protected $request;

	/**
	* Constructor
	*
	* @param	\phpbb\config\config				$config
	* @param	\phpbb\request\request_interface 	$request
	*/
	public function __construct(\phpbb\config\config $config, \phpbb\request\request_interface $request, $phpbb_root_path, $php_ext)
	{
		$this->config = $config;
		$this->request = $request;
		include_once($phpbb_root_path . "/ext/lavigor/vk/auth/vk." . $php_ext);
	}

	/**
	* {@inheritdoc}
	*/
	public function get_service_credentials()
	{
		return array(
			'key'		=> $this->config['auth_oauth_vk_key'],
			'secret'	=> $this->config['auth_oauth_vk_secret'],
		);
	}

	/**
	* {@inheritdoc}
	*/
	public function perform_auth_login()
	{
		if (!($this->service_provider instanceof \OAuth\OAuth2\Service\Vk))
		{
			throw new exception('AUTH_PROVIDER_OAUTH_ERROR_INVALID_SERVICE_TYPE');
		}

		// This was a callback request, get the token
		$token = $this->service_provider->requestAccessToken($this->request->variable('code', ''));
		$tokenParams = $token->getExtraParams();

		// Return the unique identifier
		return $tokenParams['user_id'];
	}

	/**
	* {@inheritdoc}
	*/
	public function perform_token_auth()
	{
		if (!($this->service_provider instanceof \OAuth\OAuth2\Service\Vk))
		{
			throw new exception('AUTH_PROVIDER_OAUTH_ERROR_INVALID_SERVICE_TYPE');
		}

		// This was a callback request, get the token
		$token = $this->service_provider->getStorage()->retrieveAccessToken($this->service_provider->service());
		$tokenParams = $token->getExtraParams();

		// Return the unique identifier
		return $tokenParams['user_id'];
	}
}
