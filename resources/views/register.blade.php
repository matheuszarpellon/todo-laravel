<x-layout page="Todo - Registro">
    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">Voltar</a>
    </x-slot:btn>
    <section class="task-section">
        <h1>Registrar-se</h1>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <form action="{{ route('user.register_action') }}" method="post">
            @csrf
            <x-form.text_input name="name" label="Seu nome" required="required" placeholder="Digite o seu nome" />
            <x-form.text_input type="email" name="email" label="Seu e-mail" required="required"
                placeholder="Digite o seu e-mail" />
            <x-form.text_input type="password" name="password" label="Sua senha" required="required"
                placeholder="Digite a sua senha" />
            <x-form.text_input type="password" name="password_confirmation" label="Confirme sua senha"
                required="required" placeholder="Confirme a sua senha" />

            <x-form.form_button submitTxt="Registrar" resetTxt="Limpar" />
        </form>
    </section>
</x-layout>
