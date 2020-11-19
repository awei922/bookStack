<style id="custom-styles" data-color="{{ setting('app-color') }}" data-color-light="{{ setting('app-color-light') }}">
    :root {
        --color-primary: {{ setting('app-color') }};
        --color-primary-light: {{ setting('app-color-light') }};
        --color-bookshelf: {{ setting('bookshelf-color')}};
        --color-book: {{ setting('book-color')}};
        --color-chapter: {{ setting('chapter-color')}};
        --color-page: {{ setting('page-color')}};
        --color-page-draft: {{ setting('page-draft-color')}};
    }


    @media screen and (min-width: 1100px) {
        /* Layout */
        .container,
        .tri-layout-container {
            max-width: 1080px;
            margin: 0 auto;
            padding-inline-start: 0;
            padding-inline-end: 0;
        }

        /* Content */
        header .links a {
            padding-right: 0;
        }

        .tri-layout-left-contents, .tri-layout-right-contents {
            padding: 0;
        }
    }


    /* Breadcrumbs */
    .breadcrumbs .icon-list-item,
    .breadcrumbs .breadcrumb-listing .breadcrumb-listing-toggle,
    .breadcrumbs .icon-list-item > span:first-child {
        padding-left: 0;
        padding-right: 0;
        margin-inline-end: 0;
    }
</style>
