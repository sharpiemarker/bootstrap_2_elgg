What this plugin does:

This plugin uses jQuery to add Bootstrap to Elgg to make the layout responsive to different devices. It uses the fluid layout and the 12-column responsive grid.

For instance, it adds Bootstrap's navbar-inner class to Elgg's elgg-page-topbar class so that the top navigation bar collapses on mobile devices; it adds Bootstrap's container-fluid and row-fluid classes to Elgg's elgg-inner class so that it collapses to fit different devices' widths.

It has been built for the elgg-layout-one-column and elgg-layout-one-sidebar layouts and can be easily modified to work for other column and sidebar layouts. To use different column/sidebar layouts, modify the file in bootstrap > vendors > js > bootstrap_2_elgg.js

The main Bootstrap v2.3.1 css file has been modified to remove some conflicts with Elgg styles. To further customize the styles, edit the file in bootstrap > views > default > bootstrap > css.php






Installation:

1. Copy the plugin folder into you mod folder
2. It's recommended that this mod load last so that other mods don't override the css
3. Enable the plugin in the admin section of your site

