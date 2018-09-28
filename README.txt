=== Plugin Name ===
Contributors: crimson090
Donate link: http://jonheller.net
Tags: environment, development, indicator, admin, administration, dashboard, production, staging
Requires at least: 3.0.1
Tested up to: 4.9.8
Stable tag: 1.0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Displays an indicator above the admin bar indicating the current environment.

== Description ==

Displays an indicator above the admin bar indicating the current environment. Useful for quickly determining which
environment you are currently viewing.

This only displays in the WordPress admin, not on the website itself.

== Installation ==

Install through the WordPress dashboard, or

1. Upload `/wp-environment-indicator` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= How do I specify my development environment? =

After activating the plugin, to to Settings->WP Environment Indicator and type the host name of your development environment, i.e. "www.acme.dev"

== Screenshots ==

1. Active indicator bar

== Changelog ==

= 1.0.1 =
* Fixes to support different hosting environments such as docker
* Add a selection box for the banner color

= 1.0 =
* Initial release

== Upgrade Notice ==
