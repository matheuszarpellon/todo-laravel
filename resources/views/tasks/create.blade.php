<x-layout page="Todo - Criar tarefa">
    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary">Voltar</a>
    </x-slot:btn>
    <section class="task-section">
        <h1>Criar task</h1>
        <form action="{{route('task.create_action')}}" method="post">
            @csrf
            <x-form.text_input name="title" label="Título da tarefa" required="required" placeholder="Digite o título da sua task" />
            <x-form.text_input name="due_date" label="Data de realização" required="required" type="datetime-local" />
            <x-form.select_input name="category_id" label="Categoria" required="required">
                @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->title}}</option>

                @endforeach
            </x-form.select_input>
            <x-form.textarea_input name="description" label="Descrição" required="required" />
            <x-form.form_button submitTxt="Criar tarefa" resetTxt="Resetar" />
        </form>
    </section>
</x-layout>
