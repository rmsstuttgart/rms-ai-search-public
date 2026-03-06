# v1.1.1

Change composer source from git to packagist. Just run ```composer require rmsstuttgart/rms-ai-search``` to install the extension

# v1.1.0

## Breaking changes

**DB-Update Required**

### Template changes: remove onclick handler form search button

In order to stay compatible with stricter **Content-Security-Policies (CSP)** that prevent inline Javascript,
the ```onclick="streamChatAnswer()``` attribute was removed from the submit button

### before
```
<button type="submit" id="search-form-submit-btn" class="btn btn-primary"
    onclick="streamChatAnswer(document.getElementById('ai-search-question').value, '{aisearch_url_hash}', '{aisearch_api_host}', '{aisearch_prompt_template}', '{aisearch_list_all_sources}');">
```

### after
```
<button type="submit" id="search-form-submit-btn" class="btn btn-primary">
```

All relevant attributes for the search are now set in hidden input fields in the search form
```
<input type="hidden" id="aisearch-url-hash" value="{aisearch_url_hash}" />
<input type="hidden" id="aisearch-api-host" value="{aisearch_api_host}" />
<input type="hidden" id="aisearch-prompt-template" value="{aisearch_prompt_template}" />
<input type="hidden" id="aisearch-list-all-sources" value="{aisearch_list_all_sources}" />
<input type="hidden" id="aisearch-autofocus-search-field" value="{aisearch_autofocus_search_field}" />
```

# v1.0.2
Hide source file container if no (public) source files are present in the chat answer.

For this we added a new container arround the source file list: `div.source-documents-container`
```
<div class="source-documents-container">
    <div class="hidden_until_stream_finish hidden mt-4">****
        <span class="h4">
            {f:translate(key: 'searchform.result_links_label', extensionName: 'rms_ai_search')}
        </span>
        <div id="source_documents" class="mt-2"></div>
    </div>
</div>
```

# v1.0.0
Basic working version