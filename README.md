# RMS AI Search

This TYPO3 extension provides AI-powered search functionality.
It can connect your search to https://chat.rm-solutions.de/

For an AI-Powered search example see https://rm-solutions.de/suche/

## Install

```composer require rms/rms-ai-search```


## Add your own templates

1 -  Add this to your main templates constants

```
plugin.tx_rmsaisearch {
    view {
        templateRootPath = EXT:my_main_template/Resources/Private/ext/AiSearch/Templates/
    }
}
```

2 - Add the contents of the EXT:rms-ai-search/Resources/Private/Templates/Search/Search.html file to EXT:my_main_template/Resources/Private/ext/AiSearch/Templates/Search/Search.html and modify structure and classes to match your frontend.

Be aware that some classes / ids are needed for the dynamic content creation with javascript to display the search results and links lists.
