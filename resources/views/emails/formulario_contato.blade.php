<x-mail::message>
Olá, você recebeu uma mensagem de {{ $contato->nome }}

Essa pessoa envio os seguintes dados pelo site:

**E-mail**<br>
{{ $contato->email }}

**Telefone**<br>
{{ $contato->telefone }}

**Assunto**<br>
{{ $contato->assunto }}

**Mensagem**<br>
{{ $contato->mensagem }}

**Data do Contato**<br>
{{ $contato->created_at->format('d/m/Y') }}

</x-mail::message>
