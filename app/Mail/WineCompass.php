<?php

namespace App\Mail;

use App\Wine\Loader;
use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Collection;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;


class WineCompass extends Mailable
{
    use Queueable, SerializesModels;

    public string $unsubscribeUrl;
public string $calendarUrl;
    public Collection $days;


    /**
     * Create a new message instance.
     */
    public function __construct(
        public Loader $loader,      
        public Contact $contact,
    ){
        $this->unsubscribeUrl = durl('/unsubscribe', 'winetastings') . '?key=' . $this->contact->uuid;
        $this->calendarUrl = durl('/calendar', 'winetastings');
        $this->days = $loader->getDays();
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {

        $subject = "🍷 Zurich Wine Tastings • {$this->loader->start->isoFormat('D MMM')} → {$this->loader->end->isoFormat('D MMM')}";

        return new Envelope(
            subject: $subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.wine-compass',
        );
    }
}
