<x-layout page="Todo - Editar tarefa">
    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">Voltar</a>
    </x-slot:btn>
    <section class="task-section">
        <h1>Editar task</h1>
        <form action="{{ route('task.edit_action') }}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$task->id}}" />

            <x-form.checkbox_input name="is_done" id="is_done" label="Tarefa finalizada?" checked="{{$task->is_done}}" required="" />
            <x-form.text_input name="title" label="Título da tarefa" required="required"
                placeholder="Digite o título da sua task" value="{{ $task->title }}" />
            <x-form.text_input name="due_date" label="Data de realização" required="required" type="datetime-local"
                value="{{ $task->due_date }}" />
            <x-form.select_input name="category_id" label="Categoria" required="required">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @if ($category->id == $task->category_id) selected @endif>
                        {{ $category->title }}</option>
                @endforeach
            </x-form.select_input>
            <x-form.textarea_input name="description" label="Descrição" required="required"
                value='{{ $task->description }}' />
            <x-form.form_button submitTxt="Atualizar tarefa" resetTxt="Resetar" />
        </form>
    </section>
</x-layout>
