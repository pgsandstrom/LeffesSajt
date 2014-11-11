Leffes sajt
===

En riktig tuffingsajt som jag gör med mitt företag.

Info
---------------

Detta är alltså en wordpress-sajt. PHP å sånt vetu.

Licensierat under GPLv2

Plugins:
---------------
https://github.com/pgsandstrom/wordpress_json_api (originalet ligger på http://wordpress.org/plugins/json-api/)

http://wordpress.org/plugins/wordpress-popular-posts/

https://wordpress.org/plugins/shareaholic/

Troubleshooting
===

Kategorier hårdkodade
---
Jag har hårdkodat två kategorier: "dagens tips" och "artiklar". Alla posts ska tillhöra någon av dessa!

Json Api
---
Glöm inte att fixa urlen: Settings -> Permalinks -> "Post name"

Exempel: example.com/api/get_category_posts/?category_slug=tips

wp-postviews
---
Det "most viewed template" som jag använder:


&lt;li>&lt;a href="%POST_URL%"  title="%POST_TITLE%">%POST_TITLE%&lt;/a>&lt;/li>