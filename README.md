VK.com authorization
====================
VK.com authorization enables OAuth authorization with vk.com accounts on phpBB boards.

[![Build Status](https://travis-ci.org/lavigor/vk.svg?branch=master)](https://travis-ci.org/lavigor/vk)

## Requirements
* phpBB 3.1.0 or higher
* PHP 5.3.3 or higher

## Quick Installation
You can quickly install this extension on the latest version of [phpBB 3.1](https://www.phpbb.com/downloads/) or on the latest development version of [phpBB 3.1-dev](https://github.com/phpbb/phpbb3) by doing the following:

1. Upload the extension with "[Upload Extensions](https://github.com/BoardTools/upload)".
2. Check that you have uploaded the correct files.
3. Click `Enable`.

## Standard Installation
You can install this extension on the latest version of [phpBB 3.1](https://www.phpbb.com/downloads/) or on the latest development version of [phpBB 3.1-dev](https://github.com/phpbb/phpbb3) by doing the following:

1. Download the extension. You can do it [directly from phpbb.com](https://www.phpbb.com/customise/db/extension/vk/) or by downloading the [latest ZIP-archive of `master` branch of its GitHub repository](https://github.com/lavigor/vk/archive/master.zip).
2. Check out the existence of the folder `/ext/lavigor/vk/` in the root of your board folder. Create folders if necessary.
3. Copy the contents of the downloaded `vk-master` folder to `/ext/lavigor/vk/`.
4. Navigate in the ACP to `Customise -> Extension Management -> Manage extensions -> VK.com authorization`.
5. Click `Enable`.

## Usage
To enable authorization with VK.com do the following steps:

1. Navigate in the ACP to `General -> Client communication -> Authentication`.
2. Select an authentication method: `Oauth`.
3. Find the VK section and enter the Application ID into the field `Key` and the Secure key into the field `Secret`. You can receive your Application ID and Secure key by creating a new application (type: Website) on vk.com site.

Now your users can login on your board with VK.com OAuth service. 

## Uninstallation
Navigate in the ACP to `Customise -> Extension Management -> Manage extensions -> VK.com authorization` and click `Disable`.

To permanently uninstall, click `Delete Data` and then you can safely delete the `/ext/lavigor/vk/` folder.

## License
[GNU General Public License v2](http://opensource.org/licenses/GPL-2.0)

© 2014 Igor Lavrov