<?php

declare(strict_types=1);

namespace Rmsstuttgart\RmsAiSearch\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class SearchController extends ActionController
{
    public function searchAction(): ResponseInterface
    {
        /** @var \TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer $currentContentObject */
        $currentContentObject = $this->request->getAttribute('currentContentObject');
        $aisearch_url_hash = $currentContentObject->data['aisearch_url_hash'];
        $aisearch_api_host = $currentContentObject->data['aisearch_api_host'];
        $aisearch_prompt_template = $currentContentObject->data['aisearch_prompt_template'];
        $aisearch_list_all_sources = (bool)$currentContentObject->data['aisearch_list_all_sources'];
        $aisearch_autofocus_search_field = (bool)$currentContentObject->data['aisearch_autofocus_search_field'];

        // read request parameter ?q
        $queryParams = $this->request->getQueryParams();
        $q = $queryParams['q'] ?? '';

        // sanitize q
        $q = strip_tags($q);
        $q = htmlspecialchars(trim($q), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');

        $this->view->assign('aisearch_url_hash', $aisearch_url_hash);
        $this->view->assign('aisearch_api_host', $aisearch_api_host);
        $this->view->assign('aisearch_prompt_template', $aisearch_prompt_template);
        $this->view->assign('aisearch_list_all_sources', $aisearch_list_all_sources);
        $this->view->assign('aisearch_autofocus_search_field', $aisearch_autofocus_search_field);
        $this->view->assign('query', $q);

        return $this->htmlResponse();
    }
}
