@extends('layout.app')



@section('content')

    <section class="edit">
        <h1 class="title">Edit the task</h1>
        <hr>
            <form action="{{ route('chores.update', ['id' =>$chores->id]) }}" class="form" method='POST' id='edit-form'>
                @csrf
                @method('PUT')
                <div>
                    <div class="form-group">
                        <label for="task" class="label">Task:</label>
                        <input type="text" class="input" name='task' placeholder='Describe the task...' value='{{ $chores->task }}'>
                    </div>
                    <div class="form-group">
                        <label for="responsable" class="label">Responsable:</label>
                        <input type="text" class="input" name='responsable' placeholder='Who is responsable?' value='{{ $chores->responsable }}'>
                    </div>
                    <div class="form-group">
                        <label for="day" class="label">Day:</label>
                        <input type="text" class="input" name='day' placeholder='When is it scheduled?' value='{{ $chores->day }}'>
                    </div>
                    <div class="form-group">
                        <label for="status" class="label">Status:</label>
                        <input type="text" class="input" name='status' placeholder='What is the current status?' value='{{ $chores->status }}'>
                    </div>
                </div>
                <button form='edit-form' class="button" name="submit">Submit</button>
            </form>
    </section>


@endsection