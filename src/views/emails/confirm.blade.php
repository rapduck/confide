<h1>{{ Lang::get('confide::confide.email.account_confirmation.subject') }}</h1>

<p>{{ Lang::get('confide::confide.email.account_confirmation.greetings', array( 'name' => $user->firstname)) }},</p>
<p><strong>Nome de usuário: </strong>{{ $user->username }}</p>
<p><strong>Senha: </strong>cursocc13</p>

<p>{{ Lang::get('confide::confide.email.account_confirmation.body') }}</p>
<a href='{{{ URL::to("user/confirm/{$user->confirmation_code}") }}}'>
    {{{ URL::to("user/confirm/{$user->confirmation_code}") }}}
</a>


<p>{{ Lang::get('confide::confide.email.account_confirmation.farewell') }}</p>
<p>Centro de Estudos da Consciência</p>
