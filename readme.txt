=== Plugin Name ===
Contributors: abrudtkuhl
Donate link: http://youmetandy.com
Tags: links, files
Requires at least: 3.0.1
Tested up to: 4.0
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Makes any link to a file open in a new tab by adding 'target="_blank"' to the link.

== Description ==

This plugin enqueues a simple jQuery script that looks for any anchor tag that has an href property to something with a file extension of 1-5 characters and makes it open in a new window or tab.

[see script here](https://gist.github.com/abrudtkuhl/94a6f58d1f76439fa6fb)

This means any link to a .pdf, .txt, .ppt, .doc, .xls, .xlst, etc will automatically have the property 'target="_blank"' added to it so it opens in a new window or browser tab.

== Installation ==

Upload the plugin files or install from the WordPress.org plugin repository.

e.g.

1. Upload `wp-open-files-new-window.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress


== Frequently Asked Questions ==

= What kind of links will this alter? =

Any link that goes to a file

= What does it do =

Ex: This plugin would transform `<a href="link-to-pdf.pdf">Open PDF</a>` to `<a href="link-to-pdf.pdf" target="_blank">Open PDF</a>`


== Changelog ==

= 1.0 =
* First version released

