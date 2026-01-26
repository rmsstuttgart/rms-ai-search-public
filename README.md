# RMS AI Search

This TYPO3 extension provides AI-powered search functionality.
It can connect your search to https://chat.rm-solutions.de/

For an AI-Powered search example see https://rm-solutions.de/suche/

## Install

Add GIT-Repository to composer sources in composer.json:

```
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/rmsstuttgart/rms-ai-search-public.git"
    }
],

```

install extension with composer:
```composer require rms/rms-ai-search```

## Template

Include the extension template in your template (Include TypoScript sets). Then you can overwrite the extension template and settings similar to any other TYPO3 extension.

**Add this to your main templates constants**

```
plugin.tx_rmsaisearch {
    view {
        templateRootPath = EXT:your_template/Resources/Private/ext/AiSearch/Templates/
    }
}
```

Add the contents of

EXT:rms-ai-search/Resources/Private/Templates/Search/Search.html to EXT:your_template/Resources/Private/ext/AiSearch/Templates/Search/Search.html and modify structure and classes to match your frontend.

Be aware that some classes / ids are needed for the dynamic content creation with javascript to display the search results and links lists.