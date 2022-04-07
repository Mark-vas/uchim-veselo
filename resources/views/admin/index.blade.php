@extends('layouts.app')

@section('title', 'АДМИНКА')

@section('content')
<div class="col-md-9 ms-sm-5 col-lg-10 px-md-2">
<h1 class="h2">Панель администратора</h1>
    <div class="row mb-2">
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                <h3 style="text-align: center;" class="mb-0"><a style="text-decoration: none;" href="{{route('admin.course.index')}}">Редактировать сайт</a></h3>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                <h3 style="text-align: center;" class="mb-0"><a style="text-decoration: none;" href="{{route('account')}}">Аккаунт</a></h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
