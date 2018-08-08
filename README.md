# Magento-2-Custom-Module
Magento 2 custom module

How to use in your magento site in server?

Downloadn the folder and extract it.
Then copy the Limex folder and paste it into app/code folder. if the code folder is not exist then please create it.

Then activate the module by running this command.
php bin/magento module:enable Limex_HelloMagento

Let run the command:

php bin/magento setup:upgrade

after run the above command if your website is brocken then please run this command 
php bin/magento setup:static-content:deploy

After completed, please run php bin/magento cache:clean to check result.


______________________________________________________________________________________________

These are the command for localhost when we use magento 2 

Open cmd then use the following code

cd C:\xampp\php\
C:\xampp\php\php.exe C:\xampp\htdocs\magento2\bin\magento indexer:reindex

php bin/magento setup:upgrade
Means
C:\xampp\php\php.exe C:\xampp\htdocs\magento2\bin\magento setup:upgrade


 php bin/magento module:status
 Means
C:\xampp\php\php.exe C:\xampp\htdocs\magento2\bin\magento module:status

PHP bin/magento module:enable Magestore_HelloMagento
means
C:\xampp\php\php.exe C:\xampp\htdocs\magento2\bin\magento module:enable Limex_HelloMagento


php bin/magento cache:flush
means
C:\xampp\php\php.exe C:\xampp\htdocs\magento2\bin\magento cache:flush
