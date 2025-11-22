<?php

namespace App\Filament\Pages;

use App\Models\Event;
use Azzarip\Teavel\Mail\EmailContent;
use Azzarip\Teavel\Mail\TeavelMail;
use Exception;
use Filament\Actions\Action;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Pages\Concerns\InteractsWithFormActions;
use Filament\Pages\Page;
use Filament\Schemas\Schema;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EventBroadcast extends Page
{
    use InteractsWithFormActions;

    public ?string $subject = null;

    public ?string $body = null;

    public ?string $group = null;

    public ?int $event_id = null;

    public $preselected_event = null;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-envelope';

    protected string $view = 'teavel::filament.pages.email-broadcast';

    protected static ?string $navigationLabel = 'Broadcast';

    protected static string | \UnitEnum | null $navigationGroup = 'Events';

    public function form(Schema $schema): Schema
    {
        $options = Event::where('scheduled_at', '>=', now()->subMonth())->orderByDesc('scheduled_at')->get()
            ->mapWithKeys(fn (Model $record): array => [$record->id => $record->title.' @ '.$record->location->name.' ('.$record->scheduled_at->format('d M Y').')'])->toArray();

        return $schema
            ->operation('send')
            ->columns(2)
            ->components([
                Select::make('group')
                    ->label('Group')
                    ->options([
                        'participants' => 'Participants',
                    ])
                    ->default('participants')
                    ->selectablePlaceholder(false)
                    ->placeholder(false)
                    ->columnSpan(1),
                Select::make('event_id')
                    ->label('Event')
                    ->required()
                    ->selectablePlaceholder(false)
                    ->options($options)
                    ->default(2),
                TextInput::make('subject')->required()->columnSpanFull(),
                MarkdownEditor::make('body')
                    ->required()
                    ->disableToolbarButtons(['attachFiles'])
                    ->columnSpanFull(),
            ]);
    }

    public function send(): void
    {
        $data = $this->form->getState();

        $contacts = Event::find($data['event_id'])->participants;

        $count = $contacts->count();
        foreach ($contacts as $contact) {
            try {
                $content = EmailContent::raw($data['subject'], $data['body'])->to($contact);
                Mail::send(new TeavelMail($content));
                Notification::make()
                    ->title("{$contact->full_name} sent!")->success()->send();
            } catch (Exception $e) {
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

    protected function getFormActions(): array
    {
        return [
            $this->getCreateFormAction(),
        ];
    }

    protected function getCreateFormAction(): Action
    {
        return Action::make('send')
            ->label('Send Email')
            ->submit('send')
            ->keyBindings(['mod+s']);
    }

    public function mount(Request $request)
    {
        $event_id = $request->query('event_id');
        if (filter_var($event_id, FILTER_VALIDATE_INT) !== false) {
            $this->preselected_event = $event_id;
        }
    }
}
