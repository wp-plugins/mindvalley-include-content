=== Mindvalley Include Post Content ===
Contributors: mindvalley
Donate link: http://www.mindvalley.com/opensource
Tags: include, post, pages, content
Requires at least: 3.0.0
Tested up to: 3.1.3
Stable tag: 1.2

Creates shortcode [mv_include] to include content from another post/page.


== Description ==

This shortcode will allow you to include the content from any posts or pages.


Shortcode usage:

* [mv_include id='4']
* [mv_include slug='the-post-slug']
* [mv_include path='http://www.example.com/parent-page/sub-page/']	(For pages only)
* [mv_include path='parent-page/sub-page']	(For pages only)



== Installation ==

1. Upload plugin folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Use the shortcode in your editor


== Frequently Asked Questions ==

= What if the included content has shortcodes? =

It will be executed as well. The returned content is passed through the 'the_content' filter.


== Screenshots ==

1. Front-end Visual Tool
2. Summary of Included Page
3. Summary of Included Page (with snippet)


== Changelog ==

= 1.2 =
* Added support for page paths.
* Added metabox to show summary of all included content on the page.

= 1.1 =
* Added support for post / page slugs.


= 1.0 =
* Initial Release.


== Upgrade Notice ==

= v1.2 =
* Added support for page paths.
* Added metabox to show summary of all included content on the page.

= v1.1 =
* Added support for post / page slugs.

= v1.0 =
* Initial Release.