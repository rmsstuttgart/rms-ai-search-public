<?php

declare(strict_types=1);

namespace Rmsstuttgart\RmsAiSearch\Preview;

use TYPO3\CMS\Backend\Preview\PreviewRendererInterface;
use TYPO3\CMS\Backend\View\BackendLayout\Grid\GridColumnItem;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\View\ViewFactoryData;
use TYPO3\CMS\Core\View\ViewFactoryInterface;

class SearchPreviewRenderer implements PreviewRendererInterface
{
    public function renderPageModulePreviewHeader(GridColumnItem $item): string
    {
        return '<strong>RMS AI Search</strong>';
    }

    public function renderPageModulePreviewContent(GridColumnItem $item): string
    {
        $templatePathAndFilename = GeneralUtility::getFileAbsFileName('EXT:rms_ai_search/Resources/Private/Templates/Preview/Search.html');
        if ($templatePathAndFilename === '') {
            return '';
        }

        $viewFactoryData = new ViewFactoryData(
            templatePathAndFilename: $templatePathAndFilename,
        );
        $view = GeneralUtility::makeInstance(ViewFactoryInterface::class)->create($viewFactoryData);

        // Pass the raw tt_content record to the template
        $view->assign('data', $item->getRecord());

        return $view->render();
    }

    public function renderPageModulePreviewFooter(GridColumnItem $item): string
    {
        return '';
    }

    /**
     * This is the method that was missing.
     * It combines the header and content into the final output.
     */
    public function wrapPageModulePreview(string $previewHeader, string $previewContent, GridColumnItem $item): string
    {
        return $previewHeader . $previewContent;
    }
}
