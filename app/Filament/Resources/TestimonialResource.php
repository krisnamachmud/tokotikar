<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimonialResource\Pages;
use App\Models\Testimonial;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Actions\Action;

class TestimonialResource extends Resource
{
    protected static ?string $model = Testimonial::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';
    
    protected static ?string $navigationGroup = 'Konten';
    
    protected static ?string $navigationLabel = 'Testimonial';
    
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                TextInput::make('pekerjaan')
                    ->maxLength(255),
                Textarea::make('pesan')
                    ->required()
                    ->rows(4),
                FileUpload::make('photo')
                    ->image()
                    ->directory('testimonials')
                    ->required()
                    ->disk('public')
                    ->visibility('public')
                    ->imagePreviewHeight('100')
                    ->loadingIndicatorPosition('left')
                    ->panelAspectRatio('2:1')
                    ->panelLayout('integrated')
                    ->removeUploadedFileButtonPosition('right')
                    ->uploadButtonPosition('left')
                    ->uploadProgressIndicatorPosition('left'),
                Toggle::make('is_active')
                    ->label('Aktif')
                    ->helperText('Testimonial aktif akan ditampilkan di halaman depan')
                    ->default(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('photo')
                    ->disk('public')
                    ->circular()
                    ->label('Foto'),
                TextColumn::make('nama')
                    ->searchable(),
                TextColumn::make('pekerjaan')
                    ->searchable(),
                TextColumn::make('pesan')
                    ->limit(50)
                    ->tooltip(function (TextColumn $column): ?string {
                        $state = $column->getState();
                        if (strlen($state) <= 50) {
                            return null;
                        }
                        return $state;
                    }),
                ToggleColumn::make('is_active')
                    ->label('Aktif'),
                TextColumn::make('created_at')
                    ->label('Tanggal Dibuat')
                    ->date('d M Y, H:i'),
            ])
            ->filters([
                Filter::make('aktif')
                    ->label('Hanya testimonial aktif')
                    ->query(fn (Builder $query): Builder => $query->where('is_active', true)),
                Filter::make('non-aktif')
                    ->label('Hanya testimonial non-aktif')
                    ->query(fn (Builder $query): Builder => $query->where('is_active', false)),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Action::make('activate')
                    ->label('Aktifkan')
                    ->icon('heroicon-o-check')
                    ->color('success')
                    ->hidden(fn (Testimonial $record): bool => $record->is_active)
                    ->action(function (Testimonial $record): void {
                        $record->is_active = true;
                        $record->save();
                    }),
                Action::make('deactivate')
                    ->label('Nonaktifkan')
                    ->icon('heroicon-o-x-mark')
                    ->color('danger')
                    ->hidden(fn (Testimonial $record): bool => !$record->is_active)
                    ->action(function (Testimonial $record): void {
                        $record->is_active = false;
                        $record->save();
                    }),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\BulkAction::make('aktivasi_massal')
                        ->label('Aktifkan Semua')
                        ->icon('heroicon-o-check')
                        ->action(function ($records) {
                            $records->each(function ($record) {
                                $record->is_active = true;
                                $record->save();
                            });
                        }),
                    Tables\Actions\BulkAction::make('nonaktif_massal')
                        ->label('Nonaktifkan Semua')
                        ->icon('heroicon-o-x-mark')
                        ->action(function ($records) {
                            $records->each(function ($record) {
                                $record->is_active = false;
                                $record->save();
                            });
                        }),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTestimonials::route('/'),
            'create' => Pages\CreateTestimonial::route('/create'),
            'edit' => Pages\EditTestimonial::route('/{record}/edit'),
        ];
    }

  }