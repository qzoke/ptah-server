<?php

namespace App\Models\NodeTasks\UploadS3File;

use App\Models\NodeTasks\AbstractTaskMeta;

class UploadS3FileMeta extends AbstractTaskMeta
{
    public function __construct(
        public int $serviceId,
        public string $destPath,
        public ?int $backupId,
    ) {
        //
    }

    public function formattedHtml(): string
    {
        return "Upload file to S3 Storage: {$this->destPath}";
    }
}
