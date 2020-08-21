<?php

declare(strict_types=1);

namespace DaveLiddament\StaticAnalysisResultsBaseliner\Domain\Pruner;

use DaveLiddament\StaticAnalysisResultsBaseliner\Domain\Common\FileName;
use DaveLiddament\StaticAnalysisResultsBaseliner\Domain\Common\ProjectRoot;

interface ResultsPrunerInterface
{
    /**
     * Returns results with the baseline issues removed from them.
     */
    public function getPrunedResults(
        FileName $baseLineFileName,
        string $analaysisResults,
        ProjectRoot $projectRoot
    ): PrunedResults;
}
