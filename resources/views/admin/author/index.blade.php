@extends('layouts.app')

@section('title', 'Список пользователей')

@section('content')

@include('inc.message')
<div class="container">
<h1 class="h2">Панель администратора</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <a href="{{ route('admin.index') }}" type="button" class="btn btn-sm btn-secondary">Назад</a>&nbsp;
      <a href="{{ route('admin.author.create') }}" type="button" class="btn btn-sm btn-secondary">Добавить автора
      </a>
    </div>
  </div><br>
  <div class="row">
    <div class="table-responsive">
  <table class="table table-bordered">
            <thead>
               <tr>
                   <th>#ID</th>
                   <th>Фото</th>
                   <th>Имя</th>
                   <th>Комикс</th>
                   <th>Опции</th>
               </tr>
            </thead>
            <tbody>
              @forelse($authors as $authorsItem)
                <tr id="{{$authorsItem->id}}">
                    <td>{{ $authorsItem->id }}</td>
                    <td>
                        @if($authorsItem->photo)
                            @if(substr($authorsItem->photo,1,3) == 'svg')
                            {!! $authorsItem->photo !!}
                            @else
                            <img style="width: 100px;" src="{{ $authorsItem->photo }}" alt="{{ $authorsItem->name }}">
                            @endif
                        @else
                        {!! Avatar::create($authorsItem->name)->setBorder(1, '#dc3545', 10)->setDimension(85, 85)->toSvg() !!}
                        @endif
                    </td>
                    <td>{{ $authorsItem->name }}</td>
                    <td>
                        @foreach($authorsItem->courses as $course)
                            <a href="{{ route('admin.course.show',['course'=>$course->id]) }}" type="button" class="btn btn-outline-secondary">{{$course->title}}
                            </a>
                        @endforeach
                    </td>
                    <td>
                        <a class="btn  btn-primary" href="{{ route('admin.author.edit', ['author' => $authorsItem]) }}">Редактировать</a> &nbsp;
                        <a class="delete btn  btn-danger" href="{{route('admin.author.destroy',['author' => $authorsItem])}}">Удалить</a>
                    </td>
                </tr>
              @empty
                  <tr><td colspan="6">Записей нет</td> </tr>
              @endforelse
            </tbody>
        </table>
    </div>
  </div>
</div>
@endsection


