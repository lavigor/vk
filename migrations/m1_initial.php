<?php
/**
*
* @package VK.com authorization
* @copyright LavIgor (https://github.com/LavIgor)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace lavigor\vk\migrations;

class m1_initial extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['vk_auth_version']) && version_compare($this->config['vk_auth_version'], '1.0.0', '>=');
	}

	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v310\dev');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('vk_auth_version', '1.0.0')),
			array('config.add', array('auth_oauth_vk_key', '')),
			array('config.add', array('auth_oauth_vk_secret', '')),
		);
	}
}
