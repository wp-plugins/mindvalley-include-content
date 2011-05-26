=== Mindvalley Include Post Content ===
Contributors: mindvalley
Donate link: http://www.mindvalley.com/opensource
Tags: include, post, pages, content
Requires at least: 3.0.0
Tested up to: 3.1.3
Stable tag: 1.1.1

Creates shortcode [mv_include] to include content from another post/page.


== Description ==

This shortcode will allow you to include the content from any posts or pages.

The returned content is eventually passed through a 'the_content' filter.

Shortcode usage:

[mv_include id='<page or post ID>']

or

[mv_include slug='<page or post SLUG>']



== Installation ==

1. Upload plugin folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Use the shortcode in your editor (e.g. [mv_include id='<page or post ID>'] or [mv_include slug='<page or post SLUG>'])


== Frequently Asked Questions ==

= What if the included content has shortcodes? =

It will be executed as well. The returned content is passed through the 'the_content' filter.


== Changelog ==


= 1.1 =
Added support for post / page slugs.


= 1.0 =
Initial Release.


== Upgrade Notice ==

= 1.1 =
Added support for post / page slugs.