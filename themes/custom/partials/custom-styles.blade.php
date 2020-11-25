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

    /* Typography */
    pre,
    code {
        font-family: SFMono-Regular, Consolas, Liberation Mono, Menlo, Courier, monospace !important;
    }
    .CodeMirror pre.CodeMirror-line, .CodeMirror pre.CodeMirror-line-like{
        white-space:pre-wrap;
    }

    /*Content*/
    .content-wrap{
        font-size: 16px;
    }
    .card{
        background-color: transparent !important;
    }
</style>
