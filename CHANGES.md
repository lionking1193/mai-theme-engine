### Changelog


#### 1.3.7 (7/13/18)
* Fixed: Site header search bar CSS moved to larger screens only.

#### 1.3.6 (7/12/18)
* Fixed: Aspect ratio strangeness with background images.

#### 1.3.5 (7/11/18)
* Fixed: Search results layout not following content archive default layout.
* Fixed: no-js/js body class toggle JS not working properly.

#### 1.3.4 (7/9/18)
* Added: Add support for WooCommerce [products] shortcode.
* Fixed: Broken genesis_search_title_text filter in banner.

#### 1.3.3 (7/6/18)
* Added: mai_grid_args filter.
* Added: mai_grid_query_args filter.
* Fixed: Wrap long linked urls/text so it doesn't break out of its container.
* Fixed: Undefined variable in banner when front page shows latest posts.
* Fixed: Missing search query in banner title.
* Fixed: Added div wrap to bg-link so wpautop doesn’t break it.
* Fixed: Better compatibility with JS aspect ratio calculations when caching plugins create critical CSS stylesheets.
* Fixed: Empty banner image metabox when banner disabled.
* Fixed: Nav menu skip links now work correctly.

#### 1.3.2.1 (6/22/18)
* Fixed: Earlier mobile first sidebar breakpoint.

#### 1.3.2 (6/22/18)
* Fixed: Revert content/sidebar and footer widgets to flexbox because IE is horrible but we still want it to work.
* Fixed: Content-sidebar gap when using boxed content sidebar wrap.
* Fixed: More consistent font-size and text-transform on mobile menu.
* Fixed: Hide title setting wasn't working on Blog page.
* Fixed: Page title wasn't showing on Shop page when banner was disabled.

#### 1.3.1 (6/20/18)
* Fixed: Better vertical alignment when using align_text param on [grid] or [col].

#### 1.3.0 (6/20/18)
* Added: Sections import/export feature.
* Added: Page Builder page template.
* Added: Boxed Content setting to declare which elements should have a boxed vs seamless look, including the main site container.
* Added: Banner title and description separation so it's much easier to remove or filter only the title or description.
* Added: Visibility Settings metabox on single posts to hide banner, featured image, breadcrumbs, and title.
* Added: Support for Genesis Title Toggle plugin.
* Added: Section/Banner "Content Alignment" setting ('align_content' param) to show banner title and description top, center, bottom vertically as well as left, center, right horizontally.
* Added: [section] 'image_size' parameter. Can also be filtered via shortcode_atts_section filter.
* Added: [section] Full width inline image support by inserting an image into the editor and adding "full-width-image" class to the section settings.
* Added: [section] 'style' parameter for HTML inline styles.
* Added: [section] 'context' parameter and setting to be used with new 'mai_section_args' filter.
* Added: [grid] 'boxed' parameter to have control over a boxed vs seamless look.
* Added: [grid] 'adaptiveheight' parameter to allow the grid height to shrink/grow depending on each slide's content. Works best when columns="1".
* Added: [grid] 'exclude_displayed' parameter to only show posts that haven't already been shown in other instances of [grid] on page/post.
* Added: [grid] 'xs', 'sm', 'md', 'lg', 'xl' parameters to set the span of columns out of 12. '6' would be 1/2, since 6 is 1/2 of 12, as an example.
* Added: [col] (and all col_* shortcodes) 'xs', 'sm', 'md', 'lg', 'xl' parameters.
* Added: [columns] 'bottom' param to easily add bottom margin.
* Added: WooCommerce star rating default styling.
* Added: 'mai_sitemap_post_types' filter on Sitemap post types.
* Added: Top margin to nested lists.
* Changed: Reorganized Customizer settings panels/sections.
* Changed: CSS Grid now used for content/sidebars and footer widgets columns.
* Changed: [grid] Now defaults to order_by="menu_order" and order="ASC" when display a single hierarchical post type like pages.
* Changed: More solid and efficient header shrink. Now done with small JS instead of CSS scale().
* Changed: Removed editor stylesheet. We never used it properly, and Gutenberg is coming.
* Changed: WooCommerce up-sells, cross-sells, and related product columns now have their own filters. Cross-sells now default to 2 columns so they fit better on the cart page.
* Changed: Remove mai_html_cleanup_script(). Too hacky and unecessary.
* Changed: Only force full width image on flex entries when image is not aligned (left, right, or center).
* Changed: Moved list-style-type CSS only to parent ol/ul to be less aggressive and easier to override in style.css.
* Changed: Bumped normalize CSS to 8.0.0.
* Changed: Less aggressive removal of WooCommerce Shop page metaboxes.
* Changed: Removed site title/logo toggle from Customizer.
* Changed: Replaced Fluidvids with FitVids and added 'mai_enable_responsive_videos' filter so it's much easier to disable.
* Changed: Bump CMB2 to v2.4.2.
* Changed: Header nav menus now wrap menu items appropriately on mid-sized browser windows.
* Changed: Breadcrumbs no longer follow page layout.
* Changed: Center content in after entry author box on mobile.
* Fixed: [grid] Stripping image if image_location="before_entry" and content_limit was too low.
* Fixed: [grid] More control over spaces when using date_before, date_after, author_before, author_after params.
* Fixed: [grid] Keep content on top of overlay when hovering on image bg link.
* Fixed: [grid] Entry content text color when on a dark background.
* Fixed: [grid] Only show bg image when show contains image in its values.
* Fixed: [grid] Squishing entries when showing a slider that doesn't have as many entries as the columns setting.
* Fixed: [grid] Slider arrows when using slider in a full width section.
* Fixed: [grid] Get correct product category image when displaying WooCommerce product categories in grid.
* Fixed: Adding new sections sets the proper defaults for each section.
* Fixed: Sections template now properly passes page content to the first section so it's not lost when changing an existing page to Sections template.
* Fixed: Sections template now displays a warning about deleting section data when changing to another page template.
* Fixed: Sections template now deletes section meta when changing from Sections template to another page template.
* Fixed: Sections template now respects password protection.
* Fixed: Mobile menu toggle getting squished when logos are big.
* Fixed: Landing page template logo not centered when 'genesis_header_right hook is used.
* Fixed: Blockquote weirdness when inserted after an image aligned left or right.
* Fixed: Removed taxonomy hierarchy settings checks, too inefficient.
* Fixed: Landing and Sitemap templates weren't overrideable in theme.
* Fixed: Retain "Hide featured image" post meta value when removing the existing featured image.
* Fixed: Current menu item css on Header Before nav.
* Fixed: Max width on nav search widget to site header.
* Fixed: Checkboxes no longer on their own line in the comment form.
* Fixed: Yoast metabox no longer hidden on WooCommerce shop page.
* Fixed: Date archives now correctly follow content archive settings.

#### 1.2.1 (2/15/18)
* Added: Mai Theme now stores the first installed version number, so we can do safer upgrades/migrations later.
* Added: Pass original atts to flex entry filters.
* Changed: PHP 7.2 compatibility via updating CMB2 to 2.3.0.
* Changed: CSS and JS file names from mai-pro to mai-theme.
* Changed: Allow full width sections on any section outside of content-sidebar-wrap that is still inside site-inner. This includes banner-area.
* Changed: Convert get_section() method to use genesis_markup(). And pass context from id. This allows all the awesome filters that genesis_markup() creates automatically.
* Changed: Section inner left and right padding.
* Fixed: Removed duplicate jquery cleanup scripts.
* Fixed: Nested sub-menu alignment.

#### 1.2.0 (1/17/18)
* Added: Plugin icon when updating via Dashboard > Updates.
* Changed: Plugin name to reflect official Mai Theme brand.
* Changed: Convert sticky header from JS to CSS-only.
* Changed: Move mai_header_before and mai_header_after hooks outside of site-header.
* Changed: Mobile menu toggle now uses psuedo-elements for less markup.
* Changed: More vertical padding on text inputs.
* Changed: Allow widget entry titles to inherit font weight.
* Changed: More consistent base body background and even section background color.
* Changed: Minor tweaks to borders, spacing, etc.
* Changed: Comment edit link now doesn't alter comment layout.
* Changed: Fixed overflow breaking out of full width sections in some edge-case scenarios.
* Fixed: [grid] links adding product to cart instead of going to product page when clicking title or image.
* Fixed: Add section wrap if using a title without content.
* Fixed: Woo cross-sells and up-sells heading font size.
* Fixed: Woo qty now has a bit more right margin.
* Fixed: Sections template admin now parses [gallery] shortcodes correctly.
* Fixed: More precise handling of sub-menu widths.

#### 1.1.13.1 (1/03/18)
* Fixed: [grid] Not showing only top level posts/terms if 'parent' param was '0'.

#### 1.1.13 (1/02/18)
* Changed: Only float avatar in comments and author box.
* Changed: Safer and simpler responsive breaks for all column shortcodes.
* Changed: Hyphenate sidebar widget titles and text.
* Fixed: Horizontal scroll issue on pages with full width sections.
* Fixed: Site footer nav menu widgets not wrapping menu items on smaller screens.

#### 1.1.12 (12/28/17)
* Added: Slider max-width set in CSS so layout isn't totally broken on initial page load before Slick is initialized.
* Changed: Better docblock for template loader function.
* Fixed: Slashes being added to header and footer script metabox content when saving via Theme Settings.
* Fixed: Slider arrows were cut off by browser window on full width layout at certain browser widths.
* Fixed: Logo didn't remain centered when no header left or right content and no mobile menu assigned.
* Fixed: Woo reviews styling issue.
* Fixed: Issue with PHP 5.4 though we don't officially support PHP that low, but it was an easy fix.

#### 1.1.11 (12/21/17)
* Changed: [grid] Move 'mai_flex_entry_content' filter before more-link.
* Fixed: [grid] bg-image link not working correctly when displaying taxonomy terms.
* Fixed: Login logo not working in WP 4.9.
* Fixed: Woo qty field is now same height as button it's next to.
* Fixed: Term banner image field always shows now, since that image is used for [grid] even when banner is disabled.

#### 1.1.10 (12/20/17)
* Added: [col] 'link' param which accepts a url or a post ID to make the entire col a link.
* Changed: [col] 'image' param now accepts 'featured' to use a post's featured image when 'link' is set to a post ID.
* Fixed: [col] 'align' and 'bottom' params not working as expected.
* Fixed: Overlay and image-bg background-colors and hover colors.

#### 1.1.9 (12/19/17)
* Added: [grid] 'date_query_before' and 'date_query_after' parameters. They accept any values that strtotime() accepts. To show only posts within the last 30 days you can just use date_query_after="30 days ago".

#### 1.1.8.1 (10/22/17)
* Fixed: More full-proof genesis-settings pre update option filter.

#### 1.1.8 (10/21/17)
* Changed: Sections template no longer loads a template file, so you can use Sections template in Dashboard but still use front-page.php (or other template) in your theme.
* Changed: Entry header meta now wraps to it’s own line on smaller screens.
* Fixed: Hide empty callout divs.
* Fixed: Settings not saving correctly.

#### 1.1.7.1 (10/18/17)
* Fixed: Some custom Mai settings were not saving correctly in customizer.

#### 1.1.7 (10/14/17)
* Fixed: Some custom settings getting cleared during Genesis updates.
* Fixed: Shortcodes getting parsed by Yoast/WPSEO would break things if [grid] was used with parent="current" as a parameter.
* Fixed: Duplicate h1's, again.

#### 1.1.6.2 (10/10/17)
* Fixed: Duplicate h1's on some posts/pages under certain conditions.

#### 1.1.6.1 (9/29/17)
* Added: Extra Small and Extra Large height options to Sections template.
* Fixed: Height ratios for more consistent scaling.
* Fixed: Banner height upgrade default to 'lg' if image used.

#### 1.1.6 (9/29/17)
* Added: Banner "Height" setting in customizer.
* Added: [section] Add "Text Size" field to Sections template (and [section text_size="lg"] shortcode).
* Added: [section] Add "wrap_class" parameter to section shortcode to add a class to the wrap div.
* Added: Filter on 'mai_cpt_settings_post_types' to change which post types get Mai customizer settings support.
* Added: Single post comments link now slow scrolls to the comments section.
* Changed: Smarter handling of h1 on site-title, banner, and/or first section title, depending on what is used.
* Changed: Convert all font sizes to rem/em for 'module' or 'component' based font sizing. Uses "Major Third" sizing ratio.
* Changed: Sections template now shows breadcrumbs if they are enabled for Pages.
* Changed: Section settings now close when clicking on section content field in a Sections template.
* Changed: More thorough and more efficient filter to add custom logo.
* Changed: Bump normalize.css to 7.0.0.
* Changed: Move all media queries to mobile-first.
* Fixed: Single post footer entry meta no longer shows private taxonomies.
* Fixed: Big mobile menus getting cut off when logged in and showing toolbar.
* Fixed: [grid] Title spacing when showing image before entry.
* Fixed: Sections template now properly formats quotes to smart quotes, apostrophes, dashes, ellipses, the trademark symbol, and the multiplication symbol. Via wptexturize().
* Fixed: Admin login logo spacing when error/notice is displayed.

#### 1.1.5.1 (9/20/17)
* Fixed: Missing closing div on site header row.

#### 1.1.5 (9/15/17)
* Fixed: CPT settings from Customizer getting changed when saving CPT Archive Settings in the backend.

#### 1.1.4 (9/15/17)
* Fixed: CPT archive images would not display when using custom archive settings if Mai Content Archives images were not set to display.
* Fixed: Some default settings were getting changed when updating/saving via Genesis > Theme Settings.
* Fixed: Jumpy slider on IE11. Bumped Slick to 1.8.0.

#### 1.1.3.1 (9/14/17)
* Fixed: Header/Footer scripts getting slashed when updating settings via the Customizer.

#### 1.1.3 (9/14/17)
* Fixed: Critical bug where saving Genesis > Theme Settings were resetting all custom settings.
* Fixed: Hide Featured Image setting unable to save as unchecked after saving as checked.
* Fixed: Hide Featured Image setting not hiding image on WooCommerce products.

#### 1.1.2 (9/13/17)
* Added: [grid] New "image_align" parameter. Accepts left, center, or right. This allows [grid] to display content exactly like default archives (e.g. the blog).
* Added: [col] New "bg" parameter. Accepts hex value. Example: [col bg="#000000"].
* Added: [grid] [col] New "bottom" parameter. This allows you to define the bottom margin (spacing) on each entry/column. Example: [col bottom="10"]. This would add 10px of margin to the bottom. Valid values are 0, 5, 10, 20, 30, 40, 50, 60.
* Changed: Updated plugin-update-checker to latest version (4.2).
* Fixed: Posts per page setting not working on CPT archives.
* Fixed: Max width on entry pagination images when images weren't regenerated after activating Mai Pro.

#### 1.1.1 (9/11/17)
* Changed: Allow borders to show around flex-entry images.
* Changed: Site header padding consistency.
* Fixed: Sidebar order on Sidebar-Content layout.
* Fixed: Hiding featured image on a page/post not saving correctly.

#### 1.1.0.1 (9/8/17)
* Fixed: [grid] slider jump when scrolling/swiping a slider partially out of the viewport.

#### 1.1.0 (9/8/17)
* Added: Post type specific settings: Default layouts, auto-display feaured image, hide banner, and much more.
* Changed: Move core settings from theme_mods and metaboxes to options in the Customizer. Hooray, live previews!
* Changed: Sections page template now also saves section content to 'content' column in the DB, for search indexing and SEO analysis (via Yoast/etc).
* Changed: [grid] slidestoscroll now defaults to the amount of columns in the grid.
* Fixed: Site header not using h1 on front page.
* Fixed: Various other minor bug fixes:

#### 1.0.16 (8/14/17)
* Changed: The mai_get_read_more_link() function now fires inside the loop and gives access to more data.
* Changed: Now using genesis_attr filter for more-link element, for more control and filterable attributes.
* Changed: [grid] When add_to_cart="true", only the Add To Cart button adds product to cart, image/title link to the product itself.
* Fixed: Issue when a form is in Woo short description.

#### 1.0.15.1 (8/10/17)
* Fixed: Sections template fields weren't full width.

#### 1.0.15 (8/10/17)
* Changed: Sections metabox is now displayed directly after the title field.
* Changed: Update CMB2 to 2.2.5.2.
* Fixed: Error when /%category%/ was used in permalinks and your visit a 404's url.
* Fixed: Sub-menu text alignment when text wraps to a second line.

#### 1.0.14 (8/7/17)
* Changed: Better blockquote styling.
* Changed: Remove excess grid top margin.
* Changed: Sections template now sanitizes WYSIWYG editor value the same as WP.

#### 1.0.13.1 (8/1/17)
* Fixed: Page template loader no longer runs on all pages. More efficient and fixes potential conflicts. Props @timothyjensen.

#### 1.0.13 (8/1/17)
* Added: [grid] New filter on default args so developers can change the default settings for the shortcode.
* Changed: Better blockquote styling.
* Changed: Better button style handling, especially with WooCommerce buttons.
* Fixed: [grid] Image markup when image_location is before_entry link is false.
* Fixed: [grid] Slider dot color when on dark background.
* Fixed: mai_get_grid() helper function unnecessarily requiring $content param.

#### 1.0.12.2 (7/28/17)
* Changed: Add bottom margin to galleries.
* Fixed: Better browser support for gradient overlay.

#### 1.0.12.1 (7/27/17)
* Changed: More efficient fix for removing empty <p> tags from shortcodes in widgets.

#### 1.0.12 (7/26/17)
* Added: [grid] can now 'exclude_categories' from display. Example: Display all posts except those in the 'Recipes' category.
* Fixed: [grid] Center slider dots.

#### 1.0.11 (7/24/17)
* Changed: Hierarchical taxonomy terms now check parents all the way up the tree for any archive settings (props @hellofromTonya).

#### 1.0.10
* Added: Setting to disable term archives by taxonomy.

#### 1.0.9.1
* Fixed: [grid] was not linking correctly when displaying taxonomy terms with image_location="bg".

#### 1.0.9
* Added: Setting to allow featured images to be used as the banner image.
* Added: Child category/taxonomy archives now fallback to their parent term banner image (up to 4 levels deep).
* Added: [grid] slider can now autoplay via autoplay="true" and adjust autoplay speed with speed="3000".

#### 1.0.8
* Added: Entry pagination now shows a 'tiny' thumbnail.
* Fixed: Mai Pro front page now works as expected if set to display latest posts.
* Fixed: Featured image caption display if featured image is set to auto-display.

#### 1.0.7.2
* Fixed: Error when running PHP 5.3.

#### 1.0.7.1
* Fixed: Entry meta spacing.

#### 1.0.7
* Added: You can now align featured images left or right when post archives are in columns.
* Added: Default favicon.
* Changed: Odd sections now have a white background as a default.
* Fixed: Center logo on logo screen.
* Fixed: Section content alignment on Safari 7/8 and IE11.
* Fixed: WooCommerce notice content alignment.

#### 1.0.6
* Added: Screen reader text to read more links in [grid].
* Changed: Use dedicated anchor link for flex loop and grid entry bg links.

#### 1.0.5
* Added: Entry header/content/footer filters to [grid] shortcode entries.
* Fixed: Remove nested links when showing excerpts or full content in archive flex loop.
* Fixed: Remove redundent conditional checks in flex loop.
* Fixed: Better archive setting check for Woo custom taxos.
* Fixed: FacetWP arg is no longer true by default.
* Fixed: Extra entry pagination margin.
* Fixed: Table styling.
* FIxed: Mobile menu toggle won't shrink if logo is big on smaller screens.

#### 1.0.4
* Changed: Refactor archive settings output functions.
* Changed: Allow menu itmes to wrap on primary/secondary nav.
* Fixed: Cleanup tabs/spaces.

#### 1.0.3
* Added: Banner alignment setting.

#### 1.0.2.1
* Fixed: z-index issue on sections template prohibiting editing of some fields.

#### 1.0.2
* Added: FacetWP support in [grid] shortcode.
* Added: Add additional settings to each section.
* Changed: Move section settings to slide out side panel.

#### 1.0.1.1
* Fixed: Remove unnecessary width declaration on img.

#### 1.0.1
* Fixed: IE fix for full width section wrap not centering.

#### 1.0.0
* Initial release.
