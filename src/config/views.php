<?php

/**
 * Configuration options for the built-in views
 */
return array(

    /**
     * Date format for published date, shown on partials.list and partials.details. Should be
     * a valid date() format string, e.g.
     *
     * @type string
     */
    'published_date_format' => 'M j, Y',

    /**
     * Configuration options for the index page
     */
    'index_page' => array(

        /**
         * The view to use for the Blog index pages (standard default index, index by year/month and index by
         * relationship). You can change this to a view in your app, and inside your own view you can @include the
         * various partials in the package if you want to, or you can use this one provided, provided you have a blade
         * layout called `master`, or you can leave this setting as it is, but create a new view file inside you own app
         * at `app/views/packages/fbf/laravel-Blog/posts/index.blade.php`.
         *
         * @type string
         */
        'view' => 'laravel-blog/posts.index',

        /**
         * Determines whether to show the archives on the index page
         *
         * @type bool
         */
        'show_archives' => true,

        /**
         * The number of items to show per page on the index page
         *
         * @type int
         */
        'results_per_page' => 20,

    ),

    /**
     * Configuration options for the view page
     */
    'view_page' => array(

        /**
         * The view to use for the Blog post detail page. You can change this to a view in your app, and inside your own
         * view you can @include the various partials in the package if you want to, or you can use this one provided,
         * provided you have a blade layout called `master`, or you can leave this setting as it is, but create a new
         * view file inside you own app at `app/views/packages/fbf/laravel-Blog/posts/view.blade.php`.
         */
        'view' => 'laravel-blog/posts.view',

        /**
         * Determines whether to show the archives on the view page
         *
         * @type bool
         */
        'show_archives' => true,

        /**
         * Determines whether to show links to adjacent (i.e. previous and next) items on the view page
         *
         * @type bool
         */
        'show_adjacent_items' => false,

        /**
         * Determines whether to show the share partial on the post view page. Note, if you want to change the share
         * partial, just override it by creating a new file at `app/views/packages/fbf/laravel-Blog/partials/share.blade.php`
         *
         * @type bool
         */
        'show_share_partial' => false,

    ),

);
