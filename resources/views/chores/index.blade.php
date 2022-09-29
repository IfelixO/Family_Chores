@extends('layout.app')



@section('content')

    <header class='index-header'>
        <p class='index-subtitle'>DAILY TASKS BY PERSON</p>
        <h1 class='index-title'>Family Chores</h1>
    </header>
    <section>
        <table class="index-table">
        <thead class='index-thead'>
            <tr>
                <th scope='col' class='index-hcell'>Id</th>
                <th scope='col' class='index-hcell'>Task</th>
                <th scope='col' class='index-hcell'>Responsable</th>
                <th scope='col' class='index-hcell'>Day</th>
                <th scope='col' class='index-hcell'>Status</th>
                <th scope='col' class='index-hcell'></th>
            </tr>
        </thead>
        <tbody>
            @foreach($chores as $chore)
            <tr>
                <td class='index-bcell'>{{$chore->id}}</td>
                <td class='index-bcell'>{{$chore->task}}</td>
                <td class='index-bcell'>{{$chore->responsable}}</td>
                <td class='index-bcell'>{{$chore->day}}</td>
                <td class='index-bcell'>{{$chore->status}}</td>
                <td class='index-bcell symbols'>
                    <a href="{{ route('chores.edit', ['id'=> $chore->id]) }}">
                        <img class="symbol" src="/img/edit.png" alt="Edit">
                    </a>
                    <form action="{{ route('chores.destroy', ['id'=>$chore->id]) }}" method='POST'>
                        @csrf 
                        @method('delete')
                        <button type='submit' class='delete'>
                            <img class="symbol" src="/img/delete.png" alt="Delete">
                        </button>
                    </form>                  
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </section>
    <div>
        <a href="{{ route('chores.create') }}" class='index-button'>Add task</a>
    </div>

@endsection