# v1.0.2
Hide source file container if no (public) source files are present in the chat answer.

For this we added a new container arround the source file list: `div.source-documents-container`
```
<div class="source-documents-container">
    <div class="hidden_until_stream_finish hidden mt-4">
        <span class="h4">
            {f:translate(key: 'searchform.result_links_label', extensionName: 'rms_ai_search')}
        </span>
        <div id="source_documents" class="mt-2"></div>
    </div>
</div>
```

# v1.0.0
Basic working version