@extends('master')
@section('styles')
    {{--Nivo Slider--}}
    {{ Html::style('css/owl.carousel.min.css') }}
    {{ Html::style('css/frontend.css') }}
    {{---End NivoSlider--}}

@stop
@section('scripts')
    {{ Html::script('js/owl.carousel.min.js') }}
@stop
@section('slider')
    @include('slider.owlcarousel')

@stop
@section("container")
    Variables
    Variables are used throughout the entire project as a way to centralize and share commonly used values like colors, spacing, or font stacks. For a complete breakdown, please see the Customizer.

    Colors
    Easily make use of two color schemes: grayscale and semantic. Grayscale colors provide quick access to commonly used shades of black while semantic include various colors assigned to meaningful contextual values.

    Copy
    @gray-darker:  lighten(#000, 13.5%); // #222
    @gray-dark:    lighten(#000, 20%);   // #333
    @gray:         lighten(#000, 33.5%); // #555
    @gray-light:   lighten(#000, 46.7%); // #777
    @gray-lighter: lighten(#000, 93.5%); // #eee
    Copy
    @brand-primary: darken(#428bca, 6.5%); // #337ab7
    @brand-success: #5cb85c;
    @brand-info:    #5bc0de;
    @brand-warning: #f0ad4e;
    @brand-danger:  #d9534f;
    Use any of these color variables as they are or reassign them to more meaningful variables for your project.

    Copy
    // Use as-is
    .masthead {
    background-color: @brand-primary;
    }

    // Reassigned variables in Less
    @alert-message-background: @brand-info;
    .alert {
    background-color: @alert-message-background;
    }
    Scaffolding
    A handful of variables for quickly customizing key elements of your site's skeleton.

    Copy
    // Scaffolding
    @body-bg:    #fff;
    @text-color: @black-50;
    Links
    Easily style your links with the right color with only one value.

    Copy
    // Variables
    @link-color:       @brand-primary;
    @link-hover-color: darken(@link-color, 15%);

    // Usage
    a {
    color: @link-color;
    text-decoration: none;

    &:hover {
    color: @link-hover-color;
    text-decoration: underline;
    }
    }
    Note that the @link-hover-color uses a function, another awesome tool from Less, to automagically create the right hover color. You can use darken, lighten, saturate, and desaturate.

    Typography
    Easily set your typeface, text size, leading, and more with a few quick variables. Bootstrap makes use of these as well to provide easy typographic mixins.

    Copy
    @font-family-sans-serif:  "Helvetica Neue", Helvetica, Arial, sans-serif;
    @font-family-serif:       Georgia, "Times New Roman", Times, serif;
    @font-family-monospace:   Menlo, Monaco, Consolas, "Courier New", monospace;
    @font-family-base:        @font-family-sans-serif;

    @font-size-base:          14px;
    @font-size-large:         ceil((@font-size-base * 1.25)); // ~18px
    @font-size-small:         ceil((@font-size-base * 0.85)); // ~12px

    @font-size-h1:            floor((@font-size-base * 2.6)); // ~36px
    @font-size-h2:            floor((@font-size-base * 2.15)); // ~30px
    @font-size-h3:            ceil((@font-size-base * 1.7)); // ~24px
    @font-size-h4:            ceil((@font-size-base * 1.25)); // ~18px
    @font-size-h5:            @font-size-base;
    @font-size-h6:            ceil((@font-size-base * 0.85)); // ~12px

    @line-height-base:        1.428571429; // 20/14
    @line-height-computed:    floor((@font-size-base * @line-height-base)); // ~20px

    @headings-font-family:    inherit;
    @headings-font-weight:    500;
    @headings-line-height:    1.1;
    @headings-color:          inherit;
    Icons


    Variables
    Variables are used throughout the entire project as a way to centralize and share commonly used values like colors, spacing, or font stacks. For a complete breakdown, please see the Customizer.

    Colors
    Easily make use of two color schemes: grayscale and semantic. Grayscale colors provide quick access to commonly used shades of black while semantic include various colors assigned to meaningful contextual values.

    Copy
    @gray-darker:  lighten(#000, 13.5%); // #222
    @gray-dark:    lighten(#000, 20%);   // #333
    @gray:         lighten(#000, 33.5%); // #555
    @gray-light:   lighten(#000, 46.7%); // #777
    @gray-lighter: lighten(#000, 93.5%); // #eee
    Copy
    @brand-primary: darken(#428bca, 6.5%); // #337ab7
    @brand-success: #5cb85c;
    @brand-info:    #5bc0de;
    @brand-warning: #f0ad4e;
    @brand-danger:  #d9534f;
    Use any of these color variables as they are or reassign them to more meaningful variables for your project.

    Copy
    // Use as-is
    .masthead {
    background-color: @brand-primary;
    }

    // Reassigned variables in Less
    @alert-message-background: @brand-info;
    .alert {
    background-color: @alert-message-background;
    }
    Scaffolding
    A handful of variables for quickly customizing key elements of your site's skeleton.

    Copy
    // Scaffolding
    @body-bg:    #fff;
    @text-color: @black-50;
    Links
    Easily style your links with the right color with only one value.

    Copy
    // Variables
    @link-color:       @brand-primary;
    @link-hover-color: darken(@link-color, 15%);

    // Usage
    a {
    color: @link-color;
    text-decoration: none;

    &:hover {
    color: @link-hover-color;
    text-decoration: underline;
    }
    }
    Note that the @link-hover-color uses a function, another awesome tool from Less, to automagically create the right hover color. You can use darken, lighten, saturate, and desaturate.

    Typography
    Easily set your typeface, text size, leading, and more with a few quick variables. Bootstrap makes use of these as well to provide easy typographic mixins.

    Copy
    @font-family-sans-serif:  "Helvetica Neue", Helvetica, Arial, sans-serif;
    @font-family-serif:       Georgia, "Times New Roman", Times, serif;
    @font-family-monospace:   Menlo, Monaco, Consolas, "Courier New", monospace;
    @font-family-base:        @font-family-sans-serif;

    @font-size-base:          14px;
    @font-size-large:         ceil((@font-size-base * 1.25)); // ~18px
    @font-size-small:         ceil((@font-size-base * 0.85)); // ~12px

    @font-size-h1:            floor((@font-size-base * 2.6)); // ~36px
    @font-size-h2:            floor((@font-size-base * 2.15)); // ~30px
    @font-size-h3:            ceil((@font-size-base * 1.7)); // ~24px
    @font-size-h4:            ceil((@font-size-base * 1.25)); // ~18px
    @font-size-h5:            @font-size-base;
    @font-size-h6:            ceil((@font-size-base * 0.85)); // ~12px

    @line-height-base:        1.428571429; // 20/14
    @line-height-computed:    floor((@font-size-base * @line-height-base)); // ~20px

    @headings-font-family:    inherit;
    @headings-font-weight:    500;
    @headings-line-height:    1.1;
    @headings-color:          inherit;
    IconsVariables
    Variables are used throughout the entire project as a way to centralize and share commonly used values like colors, spacing, or font stacks. For a complete breakdown, please see the Customizer.

    Colors
    Easily make use of two color schemes: grayscale and semantic. Grayscale colors provide quick access to commonly used shades of black while semantic include various colors assigned to meaningful contextual values.

    Copy
    @gray-darker:  lighten(#000, 13.5%); // #222
    @gray-dark:    lighten(#000, 20%);   // #333
    @gray:         lighten(#000, 33.5%); // #555
    @gray-light:   lighten(#000, 46.7%); // #777
    @gray-lighter: lighten(#000, 93.5%); // #eee
    Copy
    @brand-primary: darken(#428bca, 6.5%); // #337ab7
    @brand-success: #5cb85c;
    @brand-info:    #5bc0de;
    @brand-warning: #f0ad4e;
    @brand-danger:  #d9534f;
    Use any of these color variables as they are or reassign them to more meaningful variables for your project.

    Copy
    // Use as-is
    .masthead {
    background-color: @brand-primary;
    }

    // Reassigned variables in Less
    @alert-message-background: @brand-info;
    .alert {
    background-color: @alert-message-background;
    }
    Scaffolding
    A handful of variables for quickly customizing key elements of your site's skeleton.

    Copy
    // Scaffolding
    @body-bg:    #fff;
    @text-color: @black-50;
    Links
    Easily style your links with the right color with only one value.

    Copy
    // Variables
    @link-color:       @brand-primary;
    @link-hover-color: darken(@link-color, 15%);

    // Usage
    a {
    color: @link-color;
    text-decoration: none;

    &:hover {
    color: @link-hover-color;
    text-decoration: underline;
    }
    }
    Note that the @link-hover-color uses a function, another awesome tool from Less, to automagically create the right hover color. You can use darken, lighten, saturate, and desaturate.

    Typography
    Easily set your typeface, text size, leading, and more with a few quick variables. Bootstrap makes use of these as well to provide easy typographic mixins.

    Copy
    @font-family-sans-serif:  "Helvetica Neue", Helvetica, Arial, sans-serif;
    @font-family-serif:       Georgia, "Times New Roman", Times, serif;
    @font-family-monospace:   Menlo, Monaco, Consolas, "Courier New", monospace;
    @font-family-base:        @font-family-sans-serif;

    @font-size-base:          14px;
    @font-size-large:         ceil((@font-size-base * 1.25)); // ~18px
    @font-size-small:         ceil((@font-size-base * 0.85)); // ~12px

    @font-size-h1:            floor((@font-size-base * 2.6)); // ~36px
    @font-size-h2:            floor((@font-size-base * 2.15)); // ~30px
    @font-size-h3:            ceil((@font-size-base * 1.7)); // ~24px
    @font-size-h4:            ceil((@font-size-base * 1.25)); // ~18px
    @font-size-h5:            @font-size-base;
    @font-size-h6:            ceil((@font-size-base * 0.85)); // ~12px

    @line-height-base:        1.428571429; // 20/14
    @line-height-computed:    floor((@font-size-base * @line-height-base)); // ~20px

    @headings-font-family:    inherit;
    @headings-font-weight:    500;
    @headings-line-height:    1.1;
    @headings-color:          inherit;
    Icons
    Variables
    Variables are used throughout the entire project as a way to centralize and share commonly used values like colors, spacing, or font stacks. For a complete breakdown, please see the Customizer.

    Colors
    Easily make use of two color schemes: grayscale and semantic. Grayscale colors provide quick access to commonly used shades of black while semantic include various colors assigned to meaningful contextual values.

    Copy
    @gray-darker:  lighten(#000, 13.5%); // #222
    @gray-dark:    lighten(#000, 20%);   // #333
    @gray:         lighten(#000, 33.5%); // #555
    @gray-light:   lighten(#000, 46.7%); // #777
    @gray-lighter: lighten(#000, 93.5%); // #eee
    Copy
    @brand-primary: darken(#428bca, 6.5%); // #337ab7
    @brand-success: #5cb85c;
    @brand-info:    #5bc0de;
    @brand-warning: #f0ad4e;
    @brand-danger:  #d9534f;
    Use any of these color variables as they are or reassign them to more meaningful variables for your project.

    Copy
    // Use as-is
    .masthead {
    background-color: @brand-primary;
    }

    // Reassigned variables in Less
    @alert-message-background: @brand-info;
    .alert {
    background-color: @alert-message-background;
    }
    Scaffolding
    A handful of variables for quickly customizing key elements of your site's skeleton.

    Copy
    // Scaffolding
    @body-bg:    #fff;
    @text-color: @black-50;
    Links
    Easily style your links with the right color with only one value.

    Copy
    // Variables
    @link-color:       @brand-primary;
    @link-hover-color: darken(@link-color, 15%);

    // Usage
    a {
    color: @link-color;
    text-decoration: none;

    &:hover {
    color: @link-hover-color;
    text-decoration: underline;
    }
    }
    Note that the @link-hover-color uses a function, another awesome tool from Less, to automagically create the right hover color. You can use darken, lighten, saturate, and desaturate.

    Typography
    Easily set your typeface, text size, leading, and more with a few quick variables. Bootstrap makes use of these as well to provide easy typographic mixins.

    Copy
    @font-family-sans-serif:  "Helvetica Neue", Helvetica, Arial, sans-serif;
    @font-family-serif:       Georgia, "Times New Roman", Times, serif;
    @font-family-monospace:   Menlo, Monaco, Consolas, "Courier New", monospace;
    @font-family-base:        @font-family-sans-serif;

    @font-size-base:          14px;
    @font-size-large:         ceil((@font-size-base * 1.25)); // ~18px
    @font-size-small:         ceil((@font-size-base * 0.85)); // ~12px

    @font-size-h1:            floor((@font-size-base * 2.6)); // ~36px
    @font-size-h2:            floor((@font-size-base * 2.15)); // ~30px
    @font-size-h3:            ceil((@font-size-base * 1.7)); // ~24px
    @font-size-h4:            ceil((@font-size-base * 1.25)); // ~18px
    @font-size-h5:            @font-size-base;
    @font-size-h6:            ceil((@font-size-base * 0.85)); // ~12px

    @line-height-base:        1.428571429; // 20/14
    @line-height-computed:    floor((@font-size-base * @line-height-base)); // ~20px

    @headings-font-family:    inherit;
    @headings-font-weight:    500;
    @headings-line-height:    1.1;
    @headings-color:          inherit;
    Icons
    Variables
    Variables are used throughout the entire project as a way to centralize and share commonly used values like colors, spacing, or font stacks. For a complete breakdown, please see the Customizer.

    Colors
    Easily make use of two color schemes: grayscale and semantic. Grayscale colors provide quick access to commonly used shades of black while semantic include various colors assigned to meaningful contextual values.

    Copy
    @gray-darker:  lighten(#000, 13.5%); // #222
    @gray-dark:    lighten(#000, 20%);   // #333
    @gray:         lighten(#000, 33.5%); // #555
    @gray-light:   lighten(#000, 46.7%); // #777
    @gray-lighter: lighten(#000, 93.5%); // #eee
    Copy
    @brand-primary: darken(#428bca, 6.5%); // #337ab7
    @brand-success: #5cb85c;
    @brand-info:    #5bc0de;
    @brand-warning: #f0ad4e;
    @brand-danger:  #d9534f;
    Use any of these color variables as they are or reassign them to more meaningful variables for your project.

    Copy
    // Use as-is
    .masthead {
    background-color: @brand-primary;
    }

    // Reassigned variables in Less
    @alert-message-background: @brand-info;
    .alert {
    background-color: @alert-message-background;
    }
    Scaffolding
    A handful of variables for quickly customizing key elements of your site's skeleton.

    Copy
    // Scaffolding
    @body-bg:    #fff;
    @text-color: @black-50;
    Links
    Easily style your links with the right color with only one value.

    Copy
    // Variables
    @link-color:       @brand-primary;
    @link-hover-color: darken(@link-color, 15%);

    // Usage
    a {
    color: @link-color;
    text-decoration: none;

    &:hover {
    color: @link-hover-color;
    text-decoration: underline;
    }
    }
    Note that the @link-hover-color uses a function, another awesome tool from Less, to automagically create the right hover color. You can use darken, lighten, saturate, and desaturate.

    Typography
    Easily set your typeface, text size, leading, and more with a few quick variables. Bootstrap makes use of these as well to provide easy typographic mixins.

    Copy
    @font-family-sans-serif:  "Helvetica Neue", Helvetica, Arial, sans-serif;
    @font-family-serif:       Georgia, "Times New Roman", Times, serif;
    @font-family-monospace:   Menlo, Monaco, Consolas, "Courier New", monospace;
    @font-family-base:        @font-family-sans-serif;

    @font-size-base:          14px;
    @font-size-large:         ceil((@font-size-base * 1.25)); // ~18px
    @font-size-small:         ceil((@font-size-base * 0.85)); // ~12px

    @font-size-h1:            floor((@font-size-base * 2.6)); // ~36px
    @font-size-h2:            floor((@font-size-base * 2.15)); // ~30px
    @font-size-h3:            ceil((@font-size-base * 1.7)); // ~24px
    @font-size-h4:            ceil((@font-size-base * 1.25)); // ~18px
    @font-size-h5:            @font-size-base;
    @font-size-h6:            ceil((@font-size-base * 0.85)); // ~12px

    @line-height-base:        1.428571429; // 20/14
    @line-height-computed:    floor((@font-size-base * @line-height-base)); // ~20px

    @headings-font-family:    inherit;
    @headings-font-weight:    500;
    @headings-line-height:    1.1;
    @headings-color:          inherit;
    IconsVariables
    Variables are used throughout the entire project as a way to centralize and share commonly used values like colors, spacing, or font stacks. For a complete breakdown, please see the Customizer.

    Colors
    Easily make use of two color schemes: grayscale and semantic. Grayscale colors provide quick access to commonly used shades of black while semantic include various colors assigned to meaningful contextual values.

    Copy
    @gray-darker:  lighten(#000, 13.5%); // #222
    @gray-dark:    lighten(#000, 20%);   // #333
    @gray:         lighten(#000, 33.5%); // #555
    @gray-light:   lighten(#000, 46.7%); // #777
    @gray-lighter: lighten(#000, 93.5%); // #eee
    Copy
    @brand-primary: darken(#428bca, 6.5%); // #337ab7
    @brand-success: #5cb85c;
    @brand-info:    #5bc0de;
    @brand-warning: #f0ad4e;
    @brand-danger:  #d9534f;
    Use any of these color variables as they are or reassign them to more meaningful variables for your project.

    Copy
    // Use as-is
    .masthead {
    background-color: @brand-primary;
    }

    // Reassigned variables in Less
    @alert-message-background: @brand-info;
    .alert {
    background-color: @alert-message-background;
    }
    Scaffolding
    A handful of variables for quickly customizing key elements of your site's skeleton.

    Copy
    // Scaffolding
    @body-bg:    #fff;
    @text-color: @black-50;
    Links
    Easily style your links with the right color with only one value.

    Copy
    // Variables
    @link-color:       @brand-primary;
    @link-hover-color: darken(@link-color, 15%);

    // Usage
    a {
    color: @link-color;
    text-decoration: none;

    &:hover {
    color: @link-hover-color;
    text-decoration: underline;
    }
    }
    Note that the @link-hover-color uses a function, another awesome tool from Less, to automagically create the right hover color. You can use darken, lighten, saturate, and desaturate.

    Typography
    Easily set your typeface, text size, leading, and more with a few quick variables. Bootstrap makes use of these as well to provide easy typographic mixins.

    Copy
    @font-family-sans-serif:  "Helvetica Neue", Helvetica, Arial, sans-serif;
    @font-family-serif:       Georgia, "Times New Roman", Times, serif;
    @font-family-monospace:   Menlo, Monaco, Consolas, "Courier New", monospace;
    @font-family-base:        @font-family-sans-serif;

    @font-size-base:          14px;
    @font-size-large:         ceil((@font-size-base * 1.25)); // ~18px
    @font-size-small:         ceil((@font-size-base * 0.85)); // ~12px

    @font-size-h1:            floor((@font-size-base * 2.6)); // ~36px
    @font-size-h2:            floor((@font-size-base * 2.15)); // ~30px
    @font-size-h3:            ceil((@font-size-base * 1.7)); // ~24px
    @font-size-h4:            ceil((@font-size-base * 1.25)); // ~18px
    @font-size-h5:            @font-size-base;
    @font-size-h6:            ceil((@font-size-base * 0.85)); // ~12px

    @line-height-base:        1.428571429; // 20/14
    @line-height-computed:    floor((@font-size-base * @line-height-base)); // ~20px

    @headings-font-family:    inherit;
    @headings-font-weight:    500;
    @headings-line-height:    1.1;
    @headings-color:          inherit;
    Icons
    Variables
    Variables are used throughout the entire project as a way to centralize and share commonly used values like colors, spacing, or font stacks. For a complete breakdown, please see the Customizer.

    Colors
    Easily make use of two color schemes: grayscale and semantic. Grayscale colors provide quick access to commonly used shades of black while semantic include various colors assigned to meaningful contextual values.

    Copy
    @gray-darker:  lighten(#000, 13.5%); // #222
    @gray-dark:    lighten(#000, 20%);   // #333
    @gray:         lighten(#000, 33.5%); // #555
    @gray-light:   lighten(#000, 46.7%); // #777
    @gray-lighter: lighten(#000, 93.5%); // #eee
    Copy
    @brand-primary: darken(#428bca, 6.5%); // #337ab7
    @brand-success: #5cb85c;
    @brand-info:    #5bc0de;
    @brand-warning: #f0ad4e;
    @brand-danger:  #d9534f;
    Use any of these color variables as they are or reassign them to more meaningful variables for your project.

    Copy
    // Use as-is
    .masthead {
    background-color: @brand-primary;
    }

    // Reassigned variables in Less
    @alert-message-background: @brand-info;
    .alert {
    background-color: @alert-message-background;
    }
    Scaffolding
    A handful of variables for quickly customizing key elements of your site's skeleton.

    Copy
    // Scaffolding
    @body-bg:    #fff;
    @text-color: @black-50;
    Links
    Easily style your links with the right color with only one value.

    Copy
    // Variables
    @link-color:       @brand-primary;
    @link-hover-color: darken(@link-color, 15%);

    // Usage
    a {
    color: @link-color;
    text-decoration: none;

    &:hover {
    color: @link-hover-color;
    text-decoration: underline;
    }
    }
    Note that the @link-hover-color uses a function, another awesome tool from Less, to automagically create the right hover color. You can use darken, lighten, saturate, and desaturate.

    Typography
    Easily set your typeface, text size, leading, and more with a few quick variables. Bootstrap makes use of these as well to provide easy typographic mixins.

    Copy
    @font-family-sans-serif:  "Helvetica Neue", Helvetica, Arial, sans-serif;
    @font-family-serif:       Georgia, "Times New Roman", Times, serif;
    @font-family-monospace:   Menlo, Monaco, Consolas, "Courier New", monospace;
    @font-family-base:        @font-family-sans-serif;

    @font-size-base:          14px;
    @font-size-large:         ceil((@font-size-base * 1.25)); // ~18px
    @font-size-small:         ceil((@font-size-base * 0.85)); // ~12px

    @font-size-h1:            floor((@font-size-base * 2.6)); // ~36px
    @font-size-h2:            floor((@font-size-base * 2.15)); // ~30px
    @font-size-h3:            ceil((@font-size-base * 1.7)); // ~24px
    @font-size-h4:            ceil((@font-size-base * 1.25)); // ~18px
    @font-size-h5:            @font-size-base;
    @font-size-h6:            ceil((@font-size-base * 0.85)); // ~12px

    @line-height-base:        1.428571429; // 20/14
    @line-height-computed:    floor((@font-size-base * @line-height-base)); // ~20px

    @headings-font-family:    inherit;
    @headings-font-weight:    500;
    @headings-line-height:    1.1;
    @headings-color:          inherit;
    Icons


@stop

