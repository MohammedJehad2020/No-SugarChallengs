<?php

namespace App\Notifications;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewOrderCreatedNotification extends Notification
{
    use Queueable;

    protected $order;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database', 'broadcast'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('New Order')
                    ->greeting('Hello, ' . $notifiable->name)
                    ->line('A new order has been created.')
                    ->action('View order', url('/'))
                    ->line('Thank you for using our application!');
    }

    // database store notification
     public function toDatabase($notifiable){
         return [
             'title' => 'New Order',
             'body' => ' A new order has been created.',
             'action' => url('/'),
             'icon' => '',
             'order_id' => $this->order->id,
         ];
     }

    //   realtime notificcation
    public function toBroadcast($notifiable){
        $message = new BroadcastMessage([
            'title' => 'طلب اشتراك جديد',
            'body' => ' A new order has been created.',
            'action' => url('/'),
            'icon' => '',
            'order_id' => $this->order->id,
        ]);

        return $message;
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
