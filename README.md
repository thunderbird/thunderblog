# Thunderblog

This is a simple, responsive, mobile-first Wordpress theme for the blog of the Thunderbird email client.

## Recommended settings

This theme works out of the box with a vanilla Wordpress installation. However the following settings are recommended for an optimal experience:

- Posts are shown in a three-column grid on large viewports. So having a multiple of 3 posts per page is optimal to fill all available space (_Settings > Reading > Blog pages show at most: e.g. 15_)
- Posts do not need to have a title image, but it looks better, if every post has one in post lists (_edit post > Post > Featured image_)
- You can activate a download and a donation button in the top menu bar by adding Download URL and Donation URL (_Theme > Customizer > Site Identity_)

## Blocks

This theme supports the native Wordpress block editor. The standard blocks can be used without further modification.

The `button` block can be used in 4 variants. Simply add one of the following additional CSS classes to the button element (_Click the button block > Block > Advanced > Additional CSS class(es)_):

- `primary`
- `love`
- `neutral`
- `neutral-light`

## Menus

Two menu location are supported (_Appearance > Menus_):

- Top navigation (sticky menu bar on top with inline items)
- Footer navigation (footer menu bar on the very bottom with inline items)

Keep in mind, that the space (especially on the top menu bar) is limited, don't put too many menu items here. Up to 4 is recommended.

## Widgets

Three widget locations are supported (_Appearance > Widgets_), corresponding to the three-column-footer area.

It's recommended to set `H4` headings followed by an unorderd list of items.
