@extends('layout')
@section('content')
    @foreach($result as $user)
            <div class="content_table">
                <div class="content_table_name">
                    <p>{{ $user->name }} {{ $user->surname }}</p>
                </div>
                <div class="content_table_job">
                    <p>{{ $user->profession }}</p>
                </div>
                <div class="content_table_age">
                    <p>{{$user->age}}</p>
                </div>
                <div class="content_table_buttons">
                    <button name="{{$user->id}}" class="btn-primary editButton">Редактировать</button>
                    <button name="{{$user->id}}" class="btn-danger deleteButton">Удалить</button>
                </div>
            </div>
            <form action="{{ route('update') }}" method="post" class="form" id="form1{{$user->id}}" style="display: none">
                @csrf
                <div class="formInput">
                    <div class="form-group" style="display: none">
                        <input name="id" value="{{ $user->id }}" type="text">
                    </div>
                    <div class="form-group">
                        <label for="name">Имя</label>
                        <input name="name" value="{{ $user->name }}" type="text" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="surname">Фамилия</label>
                        <input name="surname" value="{{ $user->surname }}" type="text" class="form-control" id="surname">
                    </div>
                    <div class="form-group">
                        <label for="profession">Профессия</label>
                        <input name="profession" value="{{ $user->profession }}" type="text" class="form-control" id="profession">
                    </div>
                    <div class="form-group">
                        <label for="age">Возраст</label>
                        <input name="age" value="{{$user->age}}" type="text" class="form-control" id="age">
                    </div>
                    <button type="submit" class="btn btn-primary">Отправить</button>
                    <button type="submit" class="btn btn-danger">Отмена</button>
                </div>
            </form>
            <form action="{{ route('delete') }}" method="post" class="form" id="form2{{$user->id}}" style="display: none">
                @csrf
                <div class="formInput">
                    <div class="form-group" style="display: none">
                        <input name="id" value="{{ $user->id }}" type="text">
                    </div>
                    <p>{{ $user->name }}</p>
                    <p>{{ $user->surname }}</p>
                    <p>{{ $user->profession }}</p>
                    <p>{{$user->age}}</p>
                    <p>Вы действительно хотите удалить?</p>
                    <button type="submit" class="btn btn-primary">Удалить</button>
                    <button type="submit" class="btn btn-danger">Отмена</button>
                </div>
            </form>
    @endforeach


    <footer>
        {{ $result->links() }}
    </footer>
@endsection

