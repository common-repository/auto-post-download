=== Auto Post Download ===
Contributors: MicNeo
Tags: auto, download, post, attachment, presspack, mediapack, pack, custom, fields
Requires at least: 3.0.1
Tested up to: 4.8
Stable tag: 1.4.4
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Provide to your users easy way of downloading posts. 

== Description ==
<p>Auto Post Download plugin provides easy way to generating ZIP files with post content and post's image. You can choose if you want to include both files in archive or only one of them (content or image).</p>
<p>With this plugin you will be able to provide URL for your users to download posts as a ZIP file. You need a press pack? This plugin will make it very easy.</p>
<p>Plugin automatically generates attachment for post while you're publish it. It's totally automatic, you just need to use shortcode (or php function) to print URL.</p>
<p>Attachments are manageable via Wordpress Media Library. You can specify for which categories auto attachments should be created.</p>
<p>You can also define Custom Fields which will be included in generated attachment.</p>
<p>Generated content file can be in HTML format or just plain text. Feel free to choose your format from settings!</p>

== Usage ==
* Just put `[auto-post-download]` wherever you want to display URL to post's attachment.
* You can also specify post_id - `[auto-post-download postId=1]`
* You can combine shortcode with html, like: `<a href="[auto-post-download]">Download presspack</a>`
* You can also use php function call: `<?php echo apd_downloadUrl(); ?>`

== Installation ==
<p>This section describes how to install the plugin and get it working.</p>
<p>Use the automatic plugin installer of your WordPress admin, or do it manually:</p>
1. Upload the `auto-post-download` directory to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. (Optionally) Select desire categories under the 'Settings/Auto Post Download' menu.
1. (Optionally) Select desire Custom Fields under the 'Settings/Auto Post Download' menu.

== Changelog ==

= 1.4.4 =
* Bug fix: Overriting existing custom field fixed.

= 1.4.3 =
* Bug fix: There was a error on some PHP versions when ZIP file doesn't exist. 
* Fix: Wordpress version updated.

= 1.4.2 =
* Fix: Some typos.
* Fix: Wordpress version updated.

= 1.4.1 =
* Fix: There was issue with updating post with custom fields. In that case, new values of custom fields wasn't saved, it had to be saved twice. Now it works fine.

= 1.4 =
* New feature: Now you can decide if you want to include custom field title in content of generated attachment. You can set it in settings of the plugin.
* Fix: Improved format of generated files.

= 1.3.2 =
* Fix: Fix for options page

= 1.3.1 =
* Fix: Compability for older version of PHP

= 1.3 =
* New feature: You can choose if you want to include both, content and post's image, or only content or only image. You can change this option from settings menu.
* Fix: "Warning: Illegal string offset 'file' in APD_Attatchment.php". Plugin doesn't force user to use image in posts.
 
= 1.2 =
* New feature: Now plugin supports not only HTML format but also plain text. You can choose format from settings menu.

= 1.1 =
* New feature: Now plugin supports fetching information from custom fields! Just select custom fields from plugin's settings and content of those custom fields will be automaticly added to attachment.
* Bug fix: Wrong check of post's category is now fixed.

= 1.0 =
* First release
