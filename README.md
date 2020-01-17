# About

Integrates the [sentry-laravel](https://github.com/getsentry/sentry-laravel) package into October CMS.

# Configuration

If you are using the [`.env` file](https://octobercms.com/docs/setup/configuration#dotenv-configuration) for configuration, simply add your Sentry DSN to the environment file as `SENTRY_LARAVEL_DSN` or `SENTRY_DSN`. If you are not using the `.env` file, simply copy `plugins/luketowers/sentry/config/config.php` to `config/luketowers/sentry/config.php` and change the value of `dsn`.

After you have provided the DSN, you can go to `example.com/debug-sentry` to test that exceptions are being reported to Sentry. Note that by default this route is only enabled when debug mode is enabled, although you can set it to be explicitly enabled or disabled by changing `enableTestRoute` in `config/luketowers/sentry/config.php`.

# Installation

To install from the [Marketplace](https://octobercms.com/plugin/luketowers-sentry), click on the "Add to Project" button and then select the project you wish to add it to and pay for the plugin. Once the plugin has been added to the project, go to the backend and check for updates to pull in the plugin.

To install from the backend, go to **Settings -> Updates & Plugins -> Install Plugins** and then search for `LukeTowers.Sentry`.

To install from [the repository](https://github.com/luketowers/oc-sentry-plugin), clone it into **plugins/luketowers/sentry** and then run `composer update` from your project root in order to pull in the dependencies.

To install it with Composer, run `composer require luketowers/oc-sentry-plugin` from your project root.