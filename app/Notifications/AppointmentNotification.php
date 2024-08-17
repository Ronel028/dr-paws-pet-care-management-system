<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Queue\SerializesModels;

class AppointmentNotification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new notification instance.
     */
    public $client_name;
    public $ref_number;
    public $contact_no;
    public $email;
    public $pet_name;
    public $service;
    public $appointment_date;

    public function __construct($client_name, $ref_number, $contact_no, $email, $pet_name, $service, $appointment_date)
    {
        $this->client_name = $client_name;
        $this->ref_number = $ref_number;
        $this->contact_no = $contact_no;
        $this->email = $email;
        $this->pet_name = $pet_name;
        $this->service = $service;
        $this->appointment_date = $appointment_date;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Dr.Paw`s Appointment Detail',
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'appointment-notif.appointment-notification',
            with: [
                'client_name' => $this->client_name,
                'ref_number' => $this->ref_number,
                'contact_no' => $this->contact_no,
                'email' => $this->email,
                'pet_name' => $this->pet_name,
                'service' => $this->service,
                'appointment_date' => $this->appointment_date,
            ],
        );
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
