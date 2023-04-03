# Luma Child Theme (Magento 2)


These are the files that are required to create your own Luma Child Theme.
## Installation
1. Upload these files to the following Magento 2 directory: `app/design/frontend`
2. Let register our theme with Magento app
    ```
    rm -rf var/cache/* var/page_cache/* generated/* var/view_preprocessed/* pub/static/*
    bin/magento setup:upgrade
    bin/magento setup:di:compile
    bin/magento setup:static-content:deploy -f
    bin/magento cache:clean
    bin/magento cache:flush
    ```
3. Update your theme in the Magento Backend: `Content > Design > Configuration > (Select Edit on your Store View) > Default Theme > Applied Theme > "Luma Child"`
4. Clear Magento Cache: `System > Cache Management > Flush Magento Cache` or `bin/magento cache:flush` form terminal

Now any changes you make to your child theme will be reflected on the Frontend

Note: This Code should be used to get adapted for your own use.
