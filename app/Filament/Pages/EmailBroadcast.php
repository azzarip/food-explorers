<?php

namespace App\Filament\Pages;

use App\Models\Contact;
use Filament\Pages\Page;
use Filament\Schemas\Schema;
use Azzarip\Teavel\Models\Tag;
use Azzarip\Teavel\Mail\TeavelMail;
use Illuminate\Support\Facades\Mail;
use App\Filament\Schemas\EmailSchema;
use Azzarip\Teavel\Mail\EmailContent;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Schemas\Contracts\HasSchemas;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Schemas\Concerns\InteractsWithSchemas;

class EmailBroadcast extends Page implements HasSchemas
{
    use InteractsWithSchemas;
    protected string $view = 'filament.pages.email-broadcast';
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-envelope';

    protected static ?string $navigationLabel = 'Broadcast';


      public function send(): void
    {
        $data = $this->form->getState();
        
        $contacts = Tag::find((int) $data['tag_id'])->contacts;
        
        $count = $contacts->count();
        foreach ($contacts as $contact) {
            try{
                $content = EmailContent::raw($data['subject'],  $data['body'])->to($contact);
                $em = new TeavelMail($content);
                Mail::send(new TeavelMail($content));
                Notification::make()
                    ->title("{$contact->full_name} sent!")->success()->send();
            } catch (\Exception $e) {
                Notification::make()
                ->title("{$contact->full_name} NOT sent!")
                ->body($e->getMessage())
                ->danger()
                ->duration('persistent')
                ->send();
                $count--;
            }

        }

        Notification::make()
            ->title("{$count}/{$contacts->count()} emails sent!")
            ->success()
            ->send();
    }

    public ?array $data = [];
    
    public function mount(): void
    {
        $this->form->fill();
    }
    
    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('tag_id')->numeric()->integer()->required(),
                TextInput::make('subject')
                    ->required(),
                MarkdownEditor::make('body'),
            ])
            ->statePath('data');
    }


    // public function render(): \Illuminate\View\View
    // {
    //     return view('filament.pages.email-broadcast');
    // }

}
