=== Image Overlay Cues ===
Contributors: SmallPlugins
Donate link: https://smallplugins.com/
Tags: images, image block, image counter, numbered images
Requires at least: 5.8.3
Requires PHP: 5.7
Tested up to: 6.6
Stable tag: 1.0.1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-1.0.6.html

== Description ==

**Image Overlay Cues** is a WordPress plugin designed to enhance the core image block with an additional overlay count feature. This plugin simplifies the process of adding content cues on top of images.

== Installation ==

1. Download the `.zip` file and unzip it.
2. Upload the `image-overlay-cues` folder to your `/wp-content/plugins/` directory.
3. Activate the plugin through the 'Plugins' menu in WordPress.

== Features 🌟 ==

### Display automatic counts on top of the image

You can add custom spacing between each individual list item with the help of this plugin.

### Customise the count (PRO)

You can change the appearance of the count cue using the native editing controls provided by the plugin.

### Skip images if necessary

You can also skip images and it will automatically be recounted.

== Customising the styles ==

**Image Overlay Cues** is made with customisation in mind and therefore provides a bunch of CSS variables you can tweak.

Here is an overview of available CSS variables which you can apply to the `is-style-ioc--image--count` class to match your specific design needs:

* `--image-overlay-cues--image-count--size`: Default `1.2em`. Defines the size of the overlay cue.
* `--image-overlay-cues--image-count--top`: Default `0.5em`. Defines the top position of the overlay cue.
* `--image-overlay-cues--image-count--left`: Default `0.5em`. Defines the left position of the overlay cue.
* `--image-overlay-cues--image-count--text`: Default `#000`. Defines the text color of the overlay cue.
* `--image-overlay-cues--image-count--bg`: Default `#fff`. Defines the background color of the overlay cue.

== Usage ==

1. Navigate to any WordPress post/page editor.
2. Insert or select the core image block.
3. Enable the count using the toolbar button if you are a premium user. Otherwise, enable it via the block style "count".

== Changelog ==

= 1.0.1 =
* Tweak: Tweak to continue the counter throughout the page.

= 1.0.0 =
* Add: Missing GPL License.

= 0.0.1 =
* New: Initial Release.
