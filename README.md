# Grav Highlight Plugin


`highlight` is a [Grav](http://github.com/getgrav/grav) plugin that adds simple and powerful code highlighting functionality utilizing the jQuery plugin [Highlight.js](https://highlightjs.org/).

# Installation

To install this plugin, just download the zip version of this repository and unzip it under `/your/site/grav/user/plugins`. Then, rename the folder to `highlight`.

You should now have all the plugin files under

	/your/site/grav/user/plugins/highlight

>> NOTE: This plugin is a modular component for Grav which requires [Grav](http://github.com/getgrav/grav), the [Error](https://github.com/getgrav/grav-plugin-error) and [Problems](https://github.com/getgrav/grav-plugin-problems) plugins, and a theme to be installed in order to operate.

# Usage

To best understand how Highlight works, you should read through the original project [documentation](https://highlightjs.org/usage/).

You can override any default setings from the page headers:

eg:

    ---
    title: Sample Code With Custom Theme
    highlight:
        theme: monakai
    ---

    ```
    @font-face {
      font-family: Chunkfive; src: url('Chunkfive.otf');
    }

    body, .usertext {
      color: #F0F0F0; background: #600;
      font-family: Chunkfive, sans;
    }

    @import url(print.css);
    @media print {
      a[href^=http]::after {
        content: attr(href)
      }
    }
    ```


You can also disable highlighting for a particular page if causes issues:

    ---
    title: Sample Code with Highlight disabled
    highlight:
        enabled: false
    ---

    ```
    @font-face {
      font-family: Chunkfive; src: url('Chunkfive.otf');
    }

    body, .usertext {
      color: #F0F0F0; background: #600;
      font-family: Chunkfive, sans;
    }

    @import url(print.css);
    @media print {
      a[href^=http]::after {
        content: attr(href)
      }
    }
    ```

Valid theme options include:

```
arta
ascetic
atelier-dune.dark
atelier-dune.light
atelier-forest.dark
atelier-forest.light
atelier-heath.dark
atelier-heath.light
atelier-lakeside.dark
atelier-lakeside.light
atelier-seaside.dark
atelier-seaside.light
brown_paper
codepen-embed
color-brewer
dark
default
docco
far
foundation
github
googlecode
hybrid
idea
ir_black
kimbie.dark
kimbie.light
learn
magula
mono-blue
monokai_sublime
monokai
obsidian
paraiso.dark
paraiso.light
pojoaque
railscasts
rainbow
school_book
solarized_dark
solarized_light
sunburst
tomorrow-night-blue
tomorrow-night-bright
tomorrow-night-eighties
tomorrow-night
tomorrow
vs
xcode
zenburn
```

> Note: If you want to see this plugin in action, have a look at [Grav Learn Site](http://learn.getgrav.org)
