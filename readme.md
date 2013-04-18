## Laravel Vendor Cleanup Command

### Remove tests & documentation from the vendor dir

Require this package in your composer.json:

    "barryvdh/laravel-vendor-cleanup": "dev-master"

And add the ServiceProvider to the providers array in app/config/app.php

    'Barryvdh\VendorCleanup\VendorCleanupServiceProvider',

You can now remove all the docs/tests/examples/build scripts throught artisan

    php artisan vendor-cleanup

You should change your composer file to use the `dist` version, without the .git history.
You can configure your composer.json to do this, and cleanup after updating:

    "scripts":{
        "post-update-cmd":[
            "php artisan optimize",
            "php artisan vendor-cleanup"
        ]
    },
    "config": {
        "preferred-install": "dist"
    },





