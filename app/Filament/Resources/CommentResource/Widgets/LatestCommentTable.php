<?php

namespace App\Filament\Resources\CommentResource\Widgets;

use App\Filament\Resources\CommentResource;
use App\Models\Comment;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestCommentTable extends BaseWidget
{
    protected static ?string $heading = 'Latest 14 Days Comment Table';

    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                    Comment::query()
                    ->whereDate('created_at', '>', now()->subDays(14)->startOfDay())
                )
            ->columns([
                TextColumn::make('user.name'),
                TextColumn::make('post.title'),
                TextColumn::make('comment'),
                TextColumn::make('created_at')->date(),
            ])
            ->actions([
                Action::make('view')
                        ->url(fn(Comment $record): string => CommentResource::getUrl('edit',['record' => $record]))
            ]);
    }
}
