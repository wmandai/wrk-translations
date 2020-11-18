<?php

return [

    'invoices' => [
        'viewed' => [
            'subject' => 'Invoice Viewed',
            'body' => 'Invoice :code has been viewed by client',
        ],
        'sending' => [
            'subject' => 'New Invoice from :name',
            'greeting' => 'Dear :name,',
            'body' => ':name sent you an invoice (:code) for  :balance  that is due on  :date ',
        ],
        'reminder' => [
            'reminder1' => [
                'subject' => 'Reminder: You\'ve got a payment that is overdue',
                'greeting' => 'Hey :name,',
                'body' => 'This is a friendly reminder to let you know that invoice :code is past due.
                            If you have already sent the payment, please disregard this message,if not, we would appreciate your prompt attention to this matter.',
            ],
            'reminder2' => [
                'subject' => 'Reminder: You\'ve got a payment that is overdue',
                'greeting' => 'Hey :name,',
                'body' => 'Our records show that we haven’t yet received payment of :balance for Invoice :code , which is overdue since :date.
                    If the payment has already been sent, please disregard this notice. And if you’ve lost this invoice, please let me know, and I’d be happy to send you another copy.',
            ],
            'reminder3' => [
                'subject' => 'Final [:code] Reminder',
                'greeting' => 'Hey :name,',
                'body' => 'This is another reminder that we are yet to receive the :balance owed on Invoice :code which was due for payment on :date.
                            Please be aware that, as per our terms, We may charge you additional late fee on payment received past invoice due date.
                            Please reach out if you have any questions on this payment. Otherwise, please organize for settlement of this invoice immediately.  ',
            ],

        ],
        'expiring' => [
            'greeting' => 'Hey :name,',
            'subject' => 'Your payment to :company is due in :days days',
            'body' => 'Just a friendly reminder that we sent you an invoice **:code** on **:date**, and it’s due in **:days days**.
                       You can click through and pay quickly with a credit card, mail a check, or contact us.',
            'footer' => 'Thank you in advance for a timely payment, it means alot. Let us know if you have any questions about the invoice.',
        ],
        'commented' => [
            'greeting' => 'Hi :name,',
            'subject' => 'Comment Received',
            'body' => 'Invoice :name has received a new comment',
        ],
    ],
    'estimates' => [
        'sending' => [
            'subject' => 'New Estimate from :company',
            'greeting' => 'Dear :name,',
            'body' => 'We have created an estimate for you in the amount of :amount for you to review. If you have any questions, feel free to contact us. ',
        ],
        'accepted' => [
            'greeting' => 'Hi :name,',
            'subject' => 'Estimate Approved',
            'body' => ':client accepted your estimate :code for :amount',
        ],
        'declined' => [
            'greeting' => 'Hi :name,',
            'subject' => 'Estimate Declined',
            'body' => 'Estimate :code has been declined by client',
        ],
        'viewed' => [
            'greeting' => 'Hi :name,',
            'subject' => 'Estimate Viewed',
            'body' => 'Estimate :code has been viewed by client',
        ],
        'expiring' => [
            'greeting' => 'Hello :name,',
            'subject' => 'Estimate Reminder',
            'body' => 'Estimate :code will expire in :days day(s) - :date',
        ],
        'commented' => [
            'greeting' => 'Hi :name,',
            'subject' => 'Comment Received',
            'body' => 'Estimate :name has received a new comment',
        ],

    ],
    'expenses' => [
        'commented' => [
            'greeting' => 'Hi :name,',
            'subject' => 'Comment Received',
            'body' => 'Expense :name has received a new comment',
        ],
    ],
    'payments' => [
        'thankyou' => [
            'greeting' => 'Hi :name,',
            'subject' => 'Thank you for your payment',
            'body' => 'We have successfully received your payment of :amount on :date.',
            'footer' => 'The payment has been applied to the invoice successfully.',
        ],
        'received' => [
            'greeting' => 'Hey :name,',
            'subject' => 'Payment Received',
            'body' => 'You have received payment of :amount on :date for invoice :code.',
            'footer' => 'The payment has been applied to the invoice successfully.',
        ],
    ],
    'deals' => [
        'created' => [
            'greeting' => 'Hi :name,',
            'subject' => 'New deal :title created',
            'body' => 'Deal :title has been created in pipeline :pipeline (:stage) from :source valued at :deal_value',
        ],
        'updated' => [
            'greeting' => 'Hi :name,',
            'subject' => 'Deal :title updated',
            'body' => 'Deal :title was updated by :user',
        ],
        'won' => [
            'greeting' => 'Hi :name,',
            'subject' => 'Won deal :title',
            'body' => 'Deal :title has been marked as won by :user',
        ],
        'lost' => [
            'subject' => 'Lost deal :title',
            'body' => 'Deal :title has been marked as lost.',
        ],
        'commented' => [
            'greeting' => 'Hi :name,',
            'subject' => 'Deal :title has received a comment',
            'body' => 'Deal :title has received a new comment',
            'footer' => '',
        ],
    ],
    'leads' => [
        'converted' => [
            'greeting' => 'Hi :name,',
            'subject' => 'Lead converted to customer',
            'body' => 'Lead :name has been converted to customer',
        ],
        'assigned' => [
            'greeting' => 'Hi :name,',
            'subject' => 'You have been assigned a lead',
            'body' => 'Lead :name has been assigned to you.',
        ],
        'commented' => [
            'greeting' => 'Hi :name,',
            'subject' => 'New lead comment',
            'body' => 'Lead :name has received a new comment',
        ],
        'consent' => [
            'greeting' => 'Dear :name,',
            'body' => [
                'p1' => 'You recently registered your contact details with :company.',
                'p2' => 'We value your privacy and need to obtain your consent in order to continue to send you email regarding our products and services.',
                'p3' => 'Please click Accept Consent button to confirm your consent to receiving email marketing messages from us.',
                'p4' => 'At any time you can click ** [Decline](:url) ** to stop receiving emails from **:company**',
            ],
        ],
    ],
    'credits' => [
        'sending' => [
            'subject' => 'New Credit Note from :company',
            'greeting' => 'Dear Customer,',
            'body' => 'New credit note (:code) created.',
        ],
        'commented' => [
            'greeting' => 'Dear Customer,',
            'subject' => 'Comment Received',
            'body' => 'Credit Note :name has received a new comment',
        ],
    ],
    'contracts' => [
        'reminder' => [
            'subject' => 'Review Contract for :title',
            'greeting' => 'Contract :title',
            'body' => 'Here is the contract for review. Let us know if you have any questions.',
            'footer' => 'Looking forward to working with you.',
        ],
        'viewed' => [
            'subject' => 'Contract Viewed',
            'body' => 'Contract :title has been viewed by client',
        ],
        'signed' => [
            'subject' => 'Contract Signed',
            'body' => 'Contract :title has been signed',
            'footer' => '',
        ],
        'rejected' => [
            'subject' => 'Contract Rejected',
            'body' => 'Contract :title has been marked as rejected',
            'footer' => '',
        ],
        'expiring' => [
            'greeting' => 'Hello :name,',
            'subject' => 'Contract Reminder',
            'body' => 'Contract :title will expire in :days day(s) - :date',
        ],
    ],
    'projects' => [
        'survey' => [
            'subject' => 'Feedback Request - :project',
            'greeting' => 'Hello :name,',
            'heading' => 'How would you rate us?',
            'body' => 'Please tell us about your experience on project :project.
                        Your feedback help us create a better experience for you and for all our customers.',
            'footer' => 'Thanks,',
        ],
        'commented' => [
            'greeting' => 'Hi :name,',
            'subject' => 'Comment received - :project',
            'body' => 'Project :name has received a new comment.',
        ],
        'assigned' => [
            'greeting' => 'Hi :name,',
            'subject' => 'You have been assigned project - :project',
            'body' => 'A new project :name has been assigned to you.',
            'footer' => 'Thank You,',
        ],
    ],
    'tasks' => [
        'reminder' => [
            'greeting' => 'Hi :name,',
            'subject' => 'Task reminder',
            'body' => 'Task :name will be overdue on :date',
        ],
        'commented' => [
            'greeting' => 'Hi :name,',
            'subject' => 'Comment Received - :project',
            'body' => 'Task :name has received a new comment',
        ],
        'created' => [
            'greeting' => 'Hi :name,',
            'subject' => 'New assigned task in - :project',
            'body' => 'You have been assigned a new task :name',
        ],
    ],
    'tickets' => [
        'created' => [
            'greeting' => 'Hello :name,',
            'subject' => 'Case [:code] :subject created',
            'body' => 'A support ticket has been created in our system on your behalf. To manage or update your ticket, click below: ',
            'footer' => 'Thank you for choosing :company',
        ],
        'opened' => [
            'greeting' => 'Hi :name,',
            'subject' => 'Case [:code] :subject has been opened',
            'body' => 'Ticket :subject has been opened.
                        You can view the ticket using the link below;  ',
        ],
        'replied' => [
            'greeting' => 'Hi :name,',
            'subject' => '[:code] Re: :subject',
            'body' => 'Ticket :code has received a new response.',
            'footer' => 'To update your ticket, please reply directly to this e-mail or visit:',
        ],
        'assigned' => [
            'greeting' => 'Hi :name,',
            'subject' => 'You have been assigned a ticket',
            'body' => 'A new ticket :subject has been assigned to you.',
            'footer' => 'Thank You,',
        ],
        'closed' => [
            'greeting' => 'Hi :name,',
            'subject' => 'Case [:code] :subject has been resolved',
            'body' => 'Ticket :subject has been marked as closed.
                    If you feel the incident is not resolved, you can reply via email or reopen the ticket.',
            'footer' => 'Thank You,',
        ],
        'status' => [
            'greeting' => 'Hi :name,',
            'subject' => 'Case [:code] :subject has changed status',
            'body' => 'Ticket :subject has changed status to :status',
            'footer' => 'Thank you for choosing :company',
        ],
        'survey' => [
            'greeting' => 'Hello :name,',
            'subject' => 'Request #:code',
            'heading' => 'How would you rate the support you received?',
            'body' => 'At :company we love to hear what you think of our customer service.
                        Please take a moment to answer one simple question by clicking link below:',
            'footer' => 'Thanks,',
        ],
        'answer' => [
            'subject' => '[:code] Re: :subject',
            'body' => 'Do any of this articles answer your question?',
            'footer' => 'Thanks,',
        ],
    ],
    'events' => [
        'alert' => [
            'subject' => 'Event Reminder',
            'body' => 'Reminder for event :name (:venue) on :date',
        ],
    ],
    'knowledgebase' => [
        'commented' => [
            'greeting' => 'Hi :name,',
            'subject' => 'Article :subject has received a comment',
            'body' => 'New comment received in article :subject',
        ],
    ],
    'subscriptions' => [
        'sending' => [
            'greeting' => 'Hi :contact,',
            'subject' => 'Subscriptions Request',
            'body' => 'We have prepared the subscription **:name** for your company. Click the button below to review the subscription and subscribe.',
            'footer' => 'Best Regards',
        ],
    ],
    'appointments' => [
        'alert' => [
            'greeting' => 'Hi :name,',
            'subject' => 'Appointment reminder',
            'body' => 'Reminder that you have an appointment :name on :time at :venue',
        ],
    ],
    'announcements' => [
        'alert' => [
            'greeting' => 'Hey :name,',
            'subject' => ':subject',
            'body' => ':message',
        ],
    ],
    'auth' => [
        'verification' => [
            'greeting' => 'Hey :name,',
            'subject' => 'Verify Email Address',
            'button' => 'Verify Email',
            'body' => 'Thanks for registering for an account on :company! Before we get started, we just need to confirm that this is you. Click below to verify your email address:',
            'footer' => 'If you did not create an account, no further action is required.',
        ],
    ],
    'calls' => [
        'alert' => [
            'greeting' => 'Hi :name,',
            'subject' => 'Call reminder',
            'body' => 'Reminder for call :subject',
        ],
    ],
    'emails' => [
        'opened' => [
            'greeting' => 'Hi :name,',
            'subject' => 'Email has been opened',
            'body' => 'Email :subject was opened by :user',
        ],
    ],
    'messages' => [
        'received' => [
            'greeting' => 'Hey :name,',
            'subject' => 'New message received',
            'body' => ':sender has sent you a message',
        ],
    ],
    'todos' => [
        'expiring' => [
            'greeting' => 'Hi :name,',
            'subject' => 'Todo Reminder',
            'body' => 'Todo :subject will be overdue soon',
        ],
    ],
    'issues' => [
        'created' => [
            'greeting' => 'Hi :name,',
            'subject' => '[:code] :subject',
            'body' => 'Issue :subject (:code) has been created',
        ],
        'changed' => [
            'greeting' => 'Hi :name,',
            'subject' => '[:code] :subject',
            'body' => 'Issue :subject (:code) has been modified',
        ],
        'commented' => [
            'greeting' => 'Hi :name,',
            'subject' => '[:code] :subject',
            'body' => 'Issue :subject (:code) has received a new comment',
        ],
    ],
    'gdpr' => [
        'import' => [
            'greeting' => 'Hello :name',
            'body' => 'Your data is ready, check the attached file.',
            'footer' => 'Thanks,',
        ],
    ],
    'extras' => [
        'invite' => [
            'greeting' => 'Hello',
            'body' => 'We\'ve invited you to join us so you could view progress, upload files, create tasks, participate in discussions and more.',
            'button' => 'Click the button below to setup your account and get started.',
        ],
    ],
];
