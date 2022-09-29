@extends('layout.app')



@section('content')

    <section class="create">
        <h1 class="title">Create a new task</h1>
        <hr>
            <form action="{{route('chores.store')}}" class="form" method='POST' id='create-form'>
                @csrf
                <div>
                    <div class="form-group">
                        <label for="task" class="label">Task:</label>
                        <input type="text" class="input" name='task' placeholder='Describe the task...'>
                    </div>
                    <div class="form-group">
                        <label for="responsable" class="label">Responsable:</label>
                        <input type="text" class="input" name='responsable' placeholder='Who is responsable?'>
                    </div>
                    <div class="form-group">
                        <label for="day" class="label">Day:</label>
                        <input type="text" class="input" name='day' placeholder='When is it scheduled?'>
                    </div>
                    <div class="form-group">
                        <label for="status" class="label">Status:</label>
                        <input type="text" class="input" name='status' placeholder='What is the current status?'>
                    </div>
                </div>
                <button form='create-form' class="button" name="submit">Submit</button>
            </form>
    </section>


@endsection