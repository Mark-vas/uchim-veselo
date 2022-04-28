<form method="post" action="{{ route('admin.test_3.update',['test_3'=>$third_test]) }}">
        @csrf
        @method('put')
            <div class="form-group">
                <label for="course_id">История</label>
                @foreach($courses as $course)
                    @if($course->id === $third_test->course_id)
                    <input hidden type="text" class="form-control" id="course_id" name="course_id" value="{{ $third_test->course_id }}">
                    <input disabled type="text" class="form-control" value="{{ $course->title }}">
                    @endif
                @endforeach
                @error('course_id') <strong style="color:red;">{{ $message }}</strong> @enderror
            </div>
            <div class="form-group">
                <label for="test_title">Наименование теста</label>
                <input type="text" class="form-control" id="test_title" name="test_title" value="{{ $third_test->test_title }}">
                @error('test_title') <strong style="color:red;">{{ $message }}</strong> @enderror
            </div>
            <div class="form-group">
                <label for="description">Описание</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ $third_test->description }}">
                @error('description') <strong style="color:red;">{{ $message }}</strong> @enderror
            </div>
            <div class="form-group">
                <label for="questions">Вопросы</label>
                <textarea class="form-control" name="questions" id="questions">{!! $third_test->questions !!}</textarea>
                @error('questions') <strong style="color:red;">{{ $message }}</strong> @enderror
            </div>
            <br>
    <button type="submit"  value="Изменить" class="btn btn-success" style="float: right;">Изменить</button>
</form>
<a href="{{ route('admin.test', ['course' => $third_test->course_id]) }}" type="button" class="btn btn-sm btn-outline-secondary">
        Назад</a>
