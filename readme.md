A custom module for [dxmoto.com](https://dxmoto.com) (Magento 2).  

## How to install
```posh             
bin/magento maintenance:enable
rm -rf composer.lock
composer clear-cache
composer require dxmoto/core:*
bin/magento setup:upgrade
bin/magento cache:enable
rm -rf var/di var/generation generated/*
bin/magento setup:di:compile
bin/magento cache:clean
rm -rf pub/static/*
bin/magento setup:static-content:deploy \
	--area adminhtml \
	--theme Magento/backend \
	-f en_US
bin/magento setup:static-content:deploy \
	--area frontend \
	--theme Infortis/ultimo \
	-f en_US
bin/magento maintenance:disable
```      

## How to upgrade
```posh              
bin/magento maintenance:enable
composer remove dxmoto/core
rm -rf composer.lock
composer clear-cache
composer require dxmoto/core:*
bin/magento setup:upgrade
bin/magento cache:enable
rm -rf var/di var/generation generated/*
bin/magento setup:di:compile
bin/magento cache:clean
rm -rf pub/static/*
bin/magento setup:static-content:deploy \
	--area adminhtml \
	--theme Magento/backend \
	-f en_US
bin/magento setup:static-content:deploy \
	--area frontend \
	--theme Infortis/ultimo \
	-f en_US
bin/magento maintenance:disable 
```