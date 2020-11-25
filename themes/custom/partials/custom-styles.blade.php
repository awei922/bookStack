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
    body{
        font-size: 16px;
    }
    pre,
    code {
        font-family: SFMono-Regular, Consolas, Liberation Mono, Menlo, Courier, monospace !important;
    }
    .CodeMirror pre.CodeMirror-line, .CodeMirror pre.CodeMirror-line-like{
        white-space:pre-wrap;
    }

    /*Icon*/
    svg[data-icon="chapter"]{
        font-size: 1.666em;
        fill: #ef7c3c;
    }
    svg[data-icon="page"]{
        font-size: 1rem;
        fill: #0288D1;
    }
    .book-tree svg{
        display: none;
    }
    /*Content*/
    .inset-list{
        display: block;
    }
</style>
