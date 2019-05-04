<?php

return [

    'invoices'      => [
        'viewed'   => [
            'subject' => 'Fatura Visualizada',
            'body'    => 'A Fatura :code foi visualizada pelo cliente',
        ],
        'sending'  => [
            'subject'  => 'Nova fatura de :name',
            'greeting' => 'Prezado(a) :name,',
            'body'     => ':name enviou uma fatura (:code) com o valor de :balance  com a data de vencimento em :date ',
        ],
        'reminder' => [
            'reminder1' => [
                'subject'  => 'Lembrete: Você tem uma fatura e atraso',
                'greeting' => 'Olá :name,',
                'body'     => 'Este é um lembrete amigável para você saber que a fatura :code está em atraso.
                Se você já efetuou o pagamento, desconsidere esta mensagem. Caso contrário, agradecemos sua atenção imediata a esse assunto.',
            ],
            'reminder2' => [
                'subject'  => 'Segundo Lembrete da fatura [:invoice]',
                'greeting' => 'Olá :name,',
                'body'     => 'Nossos registros mostram que ainda não recebemos o pagamento da fatura :invoice com o valor de :balance, que está vencida desde :date.
                Se o pagamento já tiver sido enviado, desconsidere este aviso. E se você perdeu a fatura, avise-nos e teremos prazer em enviar outra cópia para você.',
            ],
            'reminder3' => [
                'subject'  => 'Último Lembrete da fatura [:code]',
                'greeting' => 'Olá :name,',
                'body'     => 'Este é o último lembrete de cobrança para a fatura :code no valor de :balance que está vencida desde o dia :date.
                Tenha em atenção que, de acordo com os nossos termos, poderemos cobrar-lhe uma taxa de atraso adicional no pagamento recebido após a data de vencimento da fatura, ou até mesmo a suspensão dos serviços prestados.
                Entre em contato se você tiver alguma dúvida sobre esse pagamento. Caso contrário, por favor, organize para liquidação desta fatura imediatamente.',
            ],

        ],
        'expiring' => [
            'greeting' => 'Olá :name,',
            'subject'  => 'Seu pagamento para a empresa :company está atrasado a :days dias',
            'body'     => 'Apenas um lembrete de que lhe enviamos uma fatura **:code** no dia **:date**, que venceu a **:days dias**.
            Você pode clicar e pagar rapidamente com um cartão de crédito, fazer uma trasferência ou entrar em contato conosco.',
            'footer'   => 'Obrigado antecipadamente por um pagamento que será realizado, isso significa muito. Deixe-nos saber se você tem alguma dúvida sobre a fatura.',
        ],
    ],
    'estimates'     => [
        'sending'  => [
            'subject'  => 'Novo Orçamento de :company código do orçamento [:estimate]',
            'greeting' => 'Prezado(a) :name,',
            'body'     => 'Criamos um orçamento para você no valor de :amount a ser revisado. Se você tiver alguma dúvida, não hesite em contactar-nos. ',
        ],
        'accepted' => [
            'greeting' => 'Olá :name,',
            'subject'  => 'Orçamento Aprovado',
            'body'     => ':client aceitou seu orçamento :code no valor de :amount 🎉🎉',
        ],
        'declined' => [
            'greeting' => 'Olá :name,',
            'subject'  => 'Orçamento Não aprovado',
            'body'     => 'O Orçamento :code **não** foi aceito poelo cliente, entre em contato para uma renegociação.',
        ],
        'viewed'   => [
            'greeting' => 'Olá :name,',
            'subject'  => 'Orçamento Visualizado',
            'body'     => 'O Orçamento :code foi visualizado pelo cliente',
        ],
        'expiring' => [
            'greeting' => 'Olá :name,',
            'subject'  => 'Lembrete de Orçamento',
            'body'     => 'O Orçamento :code vai expirar em :days dia(s) - :date',
        ],

    ],
    'payments'      => [
        'thankyou' => [
            'greeting' => 'Olá :name,',
            'subject'  => 'Pagamento Recebido',
            'body'     => 'Obrigado pelo pagamento de :amount em :date.',
            'footer'   => 'O pagamento foi aplicado à fatura com sucesso.',
        ],
        'received' => [
            'greeting' => 'Olá :name,',
            'subject'  => 'Pagamento Recebido',
            'body'     => 'Você recebeu um pagamento de :amount em :date paraa fatura :code',
            'footer'   => 'O pagamento foi aplicado à fatura com sucesso.',
        ],
    ],
    'deals'         => [
        'created'   => [
            'greeting' => 'Olá :name,',
            'subject'  => 'Nova oportunidade criada',
            'body'     => 'A Oportunidade :title foi criada',
        ],
        'updated'   => [
            'greeting' => 'Olá :name,',
            'subject'  => 'Oportunidade Atualizada',
            'body'     => 'A Oportunidade :title foi atualizada por :user',
        ],
        'won'       => [
            'greeting' => 'Olá :name,',
            'subject'  => 'Nova Oportunidade',
            'body'     => 'Nova oportunidade :title foi criada por :user 🎉🎉',
        ],
        'lost'      => [
            'subject' => 'Perda de Oportunidade',
            'body'    => 'A Oportunidade :title foi perdida 👎',
        ],
        'commented' => [
            'greeting' => 'Olá :name,',
            'subject'  => 'Comentário em uma Oportunidade',
            'body'     => 'A Oportunidade :title recebeu um novo comentário',
            'footer'   => '',
        ],
    ],
    'leads'         => [
        'converted' => [
            'greeting' => 'Olá :name,',
            'subject'  => 'Lead convertido em cliente',
            'body'     => 'O Lead :name foi convertido em cliente 🎉🎉',
        ],
        'assigned'  => [
            'greeting' => 'Olá :name,',
            'subject'  => 'Lead atribuído',
            'body'     => 'O Lead :name foi atribuído à você',
        ],
        'commented' => [
            'greeting' => 'Olá :name,',
            'subject'  => 'Novo comentário de lead',
            'body'     => 'O Lead :name recebeu um novo comentário',
        ],
        'consent'   => [
            'greeting' => 'Dear :name,',
            'body'     => [
                'p1' => 'You recently registered your contact details with :company.',
                'p2' => 'We value your privacy and need to obtain your consent in order to continue to send you email regarding our products and services.',
                'p3' => 'Please click Accept Consent button to confirm your consent to receiving email marketing messages from us.',
                'p4' => 'At any time you can click ** [Decline](:url) ** to stop receiving emails from **:company**',
            ],
        ],
    ],
    'credits'       => [
        'sending' => [
            'subject'  => 'Nova nota de crédito para :company',
            'greeting' => 'Prezado cliente,',
            'body'     => 'Nova nota de crédito (:code) criada.',
        ],
    ],
    'contracts'     => [
        'reminder' => [
            'subject'  => 'Rever Contrato para :title',
            'greeting' => 'Contrato :title',
            'body'     => 'Aqui está o contrato para revisão. Deixe-nos saber se você tiver alguma dúvida.',
            'footer'   => 'Ansioso para trabalhar com você.',
        ],
        'viewed'   => [
            'subject' => 'Contrato visualizado pelo Cliente',
            'body'    => 'Contrato :title foi visualizado pelo cliente',
        ],
        'signed'   => [
            'subject' => 'Contrato Asinados',
            'body'    => 'O contrato :title foi assinado',
            'footer'  => '',
        ],
        'rejected' => [
            'subject' => 'Contrato Rejeitado',
            'body'    => 'Contrato :title foi marcado como rejeitado',
            'footer'  => '',
        ],
        'expiring' => [
            'greeting' => 'Olá :name,',
            'subject'  => 'Lembrete de contrato',
            'body'     => 'O Contrato :title exporará em :days dia(s) - :date',
        ],
    ],
    'projects'      => [
        'survey'    => [
            'subject'  => 'Pedido de feedback',
            'greeting' => 'Olá :name,',
            'heading'  => 'Como você avaliaria a gente?',
            'body'     => 'Por favor, conte-nos sobre sua experiência no projeto :project.
            Seus comentários nos ajudam a criar uma experiência melhor para você e para todos os nossos clientes.',
            'footer'   => 'Obrigado,',
        ],
        'commented' => [
            'greeting' => 'Olá :name,',
            'subject'  => 'Comentário Recebido',
            'body'     => 'O Projeto :name recebeu um novo comentário',
        ],
    ],
    'tasks'         => [
        'reminder'  => [
            'greeting' => 'Olá :name,',
            'subject'  => 'Lembrete de Tarefa',
            'body'     => 'Tarefa :name vencerá no dia :date',
        ],
        'commented' => [
            'greeting' => 'Olá :name,',
            'subject'  => 'Comentário Recebido',
            'body'     => 'Tarefa :name recebeu um novo comentário',
        ],
    ],
    'tickets'       => [
        'created'  => [
            'greeting' => 'Olá :name,',
            'subject'  => '[:code] Re: :subject',
            'body'     => 'Um ticket de suporte foi criado em nosso sistema em seu nome. Para gerenciar ou atualizar seu ticket, clique abaixo: ',
            'footer'   => 'Obrigado por nos escolher :company',
        ],
        'opened'   => [
            'greeting' => 'Olá :name,',
            'subject'  => '[:code] Re: :subject',
            'body'     => 'O Ticket :subject foi aberto.
            Você pode ver o ticket usando o link abaixo;',
        ],
        'replied'  => [
            'greeting' => 'Olá :name,',
            'subject'  => '[:code] Re: :subject',
            'body'     => 'O Ticket :code recebeu uma nova resposta.',
            'footer'   => 'Para atualizar seu ticket, responda diretamente a este e-mail ou visite:',
        ],
        'status'   => [
            'greeting' => 'Hi :name,',
            'subject'  => '[:code] Re: :subject',
            'body'     => 'Ticket :subject has changed status to :status',
            'footer'   => 'Thank you for choosing :company',
        ],
        'assigned' => [
            'greeting' => 'Olá :name,',
            'subject'  => 'Ticket Atribuído',
            'body'     => 'Um novo ticket :subject foi atribuído à você.
            Clique no link abaixo para ver o ticket.',
            'footer'   => 'Obrigado,',
        ],
        'closed'   => [
            'greeting' => 'Olá :name,',
            'subject'  => '[:code] Re: :subject',
            'body'     => 'O Ticket :subject foi marcado como fechado.
            Se você achar que o incidente não foi resolvido, responda a este e-mail ou reabra o incidente.',
            'footer'   => 'Obrigado,',
        ],
        'survey'   => [
            'greeting' => 'Olá :name,',
            'subject'  => 'Avaliação do suporte #:code',
            'heading'  => 'Como você avaliaria o suporte recebido?',
            'body'     => 'A Equipe da :company ama ouvir o que você pensa do nosso serviço ao cliente.
            Por favor, dedique um momento para responder uma pergunta simples clicando no link abaixo:',
            'footer'   => 'Obrigado,',
        ],
        'answer'   => [
            'subject' => '[:code] Re: :subject',
            'body'    => 'Algum desses artigos responde à sua pergunta?',
            'footer'  => 'Obrigado,',
        ],
    ],
    'events'        => [
        'alert' => [
            'subject' => 'Lembrete de Evento',
            'body'    => 'Lembrete para o Evento :name (:venue) em :date',
        ],
    ],
    'knowledgebase' => [
        'commented' => [
            'greeting' => 'Olá :name,',
            'subject'  => 'Comentário do artigo',
            'body'     => 'Novo comentário recebido no artigo :subject',
        ],
    ],
    'subscriptions' => [
        'sending' => [
            'greeting' => 'Olá :contact,',
            'subject'  => 'Solicitação de Assinaturas',
            'body'     => 'Nós preparamos a assinatura :name para sua empresa.
            Clique no botão abaixo para revisar a assinatura e se inscrever.',
            'footer'   => 'Atenciosamente',
        ],
    ],
    'appointments'  => [
        'alert' => [
            'greeting' => 'Olá :name,',
            'subject'  => 'Alerta de Compromisso',
            'body'     => 'Este é um lembrete de que você tem um compromisso :name às :time em :venue',
        ],
    ],
    'announcements' => [
        'alert' => [
            'greeting' => 'Olá :name,',
            'subject'  => ':subject',
            'body'     => ':message',
        ],
    ],
    'auth'          => [
        'verification' => [
            'greeting' => 'Olá :name,',
            'subject'  => 'Verificação de endereço de e-mail',
            'button'   => 'Verificar e-mail',
            'body'     => 'Obrigado por se registrar para uma conta em :company! Antes de começarmos, precisamos apenas confirmar que é você. Clique abaixo para verificar seu endereço de e-mail:',
            'footer'   => 'Se você não criou uma conta, nenhuma outra ação será necessária.',
        ],
    ],
    'calls'         => [
        'alert' => [
            'greeting' => 'Olá :name,',
            'subject'  => 'Alerta de Chamada',
            'body'     => 'Lembrete para chamada :subject',
        ],
    ],
    'emails'        => [
        'opened' => [
            'greeting' => 'Olá :name,',
            'subject'  => 'E-mail Lido',
            'body'     => 'E-mail :subject foi lido por :user',
        ],
    ],
    'messages'      => [
        'received' => [
            'greeting' => 'Olá :name,',
            'subject'  => 'Nova mensagem recebida',
            'body'     => ':sender lhe enviou uma mensagem',
        ],
    ],
    'todos'         => [
        'expiring' => [
            'greeting' => 'Olá :name,',
            'subject'  => 'Lembrete de Afazeres',
            'body'     => 'O item :subject estará atrasado em breve',
        ],
    ],
    'issues'        => [
        'created'   => [
            'greeting' => 'Olá :name,',
            'subject'  => '[:code] :subject',
            'body'     => 'Bug :subject (:code) foi reportado',
        ],
        'changed'   => [
            'greeting' => 'Olá :name,',
            'subject'  => '[:code] :subject',
            'body'     => 'Bug :subject (:code) foi alterado',
        ],
        'commented' => [
            'greeting' => 'Olá :name,',
            'subject'  => '[:code] :subject',
            'body'     => 'Bug :subject (:code) recebeu um novo comentário',
        ],
    ],
    'gdpr'          => [
        'import' => [
            'greeting' => 'Hello :name',
            'body'     => 'Your data is ready, check the attached file.',
            'footer'   => 'Thanks,',
        ],
    ],
    'extras'        => [
        'invite' => [
            'greeting' => 'Hello',
            'body'     => 'We\'ve invited you to join us so you could view progress, upload files, create tasks, participate in discussions and more.',
            'button'   => 'Click the button below to setup your account and get started.',
        ],
    ],
];
