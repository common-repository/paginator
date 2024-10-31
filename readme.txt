=== Paginator ===
Contributors: dzhus, javascript by karaboz(karaboz.ru), idea by ecto (ecto.ru)
Donate link: http://dzhus.com/development/paginator/
Tags: paginator3000, navigation, navigation, pagination, numeration
Tested up to: 2.6.3
Stable tag: 0.2.4

Adds the "paginator3000" paging navigation to your WordPress blog.

== Description ==

Adds the "paginator3000" paging navigation to your WordPress blog. "paginator3000" is a pagination technique based on the idea of scrolling.
The demo of the technique can be found here: http://karaboz.ru/2007/11/19/paginator-3000-postranichnaya-navigaciya-budushhego/ . 
This plugin is just a localization of the idea for WordPress blogs, the idea itself was created and realized by ecto ( http://ecto.ru ) and karaboz ( http://karaboz.ru ).


== Installation ==

1. Open wp-content/plugins folder
2. Put paginator folder into the wp-content/plugins folder
3. Activate Paginator plugin
3. Paste `<?php if(function_exists('wp_paginator')) { wp_paginator(); } ?>` anywhere in index.php or footer.php of your theme. 
Note: if you want the paginator to also be used for search results, in categories, and for tagged posts, the easiest thing to do is to
paste `<?php if(function_exists('wp_paginator')) { wp_paginator(); } ?>` into your footer.php, rather than index.php
4. To configure Paginator go to 'WP-Admin -> Settings -> Paginator'
5. To change CSS style of Paginator, edit /wp-content/plugins/paginator/skin/paginator3000.css

== Screenshots ==

1. Paginator in action

== Frequently Asked Questions ==

[Ask your questions here](http://blog.dzhus.com/?p=48#comments "Leave a comment and ask your questions about Paginator")