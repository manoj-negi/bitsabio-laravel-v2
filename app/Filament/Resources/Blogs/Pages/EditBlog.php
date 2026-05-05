<?php

namespace App\Filament\Resources\Blogs\Pages;

use App\Filament\Resources\Blogs\BlogResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditBlog extends EditRecord
{
    protected static string $resource = BlogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
    protected function handleRecordUpdate($record, array $data): \Illuminate\Database\Eloquent\Model
{
    // 1. Preserve image
    if (!isset($data['image']) || empty($data['image'])) {
        $data['image'] = $record->image;
    }

    // 2. Preserve content (RichEditor)
    if (!isset($data['content']) || trim($data['content']) === '') {
        $data['content'] = $record->content;
    }

    // 3. Merge JSON (tags safely)
    if (isset($data['tags'])) {
        $data['tags'] = array_replace_recursive(
            $record->tags ?? [],
            $data['tags']
        );
    }

    // 4. Prevent overwriting ANY field with null or empty
    foreach ($record->getAttributes() as $key => $value) {
        if (!array_key_exists($key, $data) || $data[$key] === null || $data[$key] === '') {
            $data[$key] = $value;
        }
    }

    // 5. Update safely
    $record->fill($data);
    $record->save();

    return $record;
}
}
