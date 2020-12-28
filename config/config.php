<?php return [
    // If null, value will be pulled from app.debug
    'enableTestRoute' => null,

    'packages' => [
        'sentry/sentry-laravel' => [
            'providers' => [
                '\Sentry\Laravel\ServiceProvider',
            ],

            'aliases' => [
                'Sentry'   => '\Sentry\Laravel\Facade',
            ],

            'config_namespace' => 'sentry',

            'config' => [
                'dsn' => env('SENTRY_LARAVEL_DSN', env('SENTRY_DSN')),

                // capture release as git sha
		'release' => env('SENTRY_RELEASE_GIT', false)
			? trim(exec('git --git-dir ' . base_path('.git') . ' log --pretty="%h" -n1 HEAD'))
			: env('SENTRY_RELEASE_TAG', null),

                'breadcrumbs' => [
                    // Capture Laravel logs in breadcrumbs
                    'logs' => env('SENTRY_BREADCRUMBS_LOGS', true),

                    // Capture SQL queries in breadcrumbs
                    'sql_queries' => env('SENTRY_BREADCRUMBS_QUERIES', true),

                    // Capture bindings on SQL queries logged in breadcrumbs
                    'sql_bindings' => env('SENTRY_BREADCRUMBS_BINDINGS', true),

                    // Capture queue job information in breadcrumbs
                    'queue_info' => env('SENTRY_BREADCRUMBS_QUEUE', true),
                ],
            ],
        ],
    ],
];
