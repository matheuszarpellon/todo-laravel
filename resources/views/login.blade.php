<x-layout page="Todo - Login">
    <section class="task-section">
        <h1>Login</h1>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <form action="{{ route('user.login_action') }}" method="post">
            @csrf
            <x-form.text_input type="email" name="email" label="Seu e-mail" required="required"
                placeholder="Digite o seu e-mail" />
            <x-form.text_input type="password" name="password" label="Sua senha" required="required"
                placeholder="Digite a sua senha" />

            <x-form.form_button submitTxt="Iniciar sessão" resetTxt="Limpar" />

            <div>
                <p>Ainda não possui conta?</p>
                <br />
                <a href="{{ route('register') }}" class="btn btn-primary">
                    Registre-se
                </a>
            </div>
        </form>
    </section>
</x-layout>
