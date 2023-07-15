<?php

declare(strict_types=1);

namespace App\Data;

final class DocumentData extends \Spatie\LaravelData\Data
{
    public function __construct(
        public string $notes_title,
        public string $createdtime,
        public string $modifiedtime,
        public string $filename,
        public string $assigned_user_id,
        public string $notecontent,
        public string $filetype,
        public string $filesize,
        public string $filelocationtype,
        public string $fileversion,
        public string $filestatus,
        public string $filedownloadcount,
        public string $folderid,
        public string $note_no,
        public string $modifiedby,
        public string $source,
        public string $starred,
        public string $tags,
        public string $id,
        public string $imageattachmentids,
        public ?string $file_content,
    ) {
    }
}
