<?php

declare(strict_types=1);

namespace AlexanderFreundlieb\Af6bus\Backend\EventListener;

use TYPO3\CMS\Backend\View\Event\PageContentPreviewRenderingEvent;
use TYPO3\CMS\Backend\Utility\BackendUtility;

final class PreviewRenderer
{
    public function __invoke(PageContentPreviewRenderingEvent $event): void
    {
        if ($event->getTable() !== 'tt_content') {
            return;
        }

        // Banner Preview
        if ($event->getRecord()['CType'] === 'af6bus_banner') {
            $itemContent = $event->getPreviewContent();
            if (isset($event->getRecord()['assets'])) {
                $itemContent .= BackendUtility::thumbCode($event->getRecord(), 'tt_content', 'assets') . '<br />';
            }
            if (isset($event->getRecord()['bodytext'])) {
                $itemContent .= strip_tags($event->getRecord()['bodytext']);
            }
            $event->setPreviewContent($itemContent);
        }
    }
}
