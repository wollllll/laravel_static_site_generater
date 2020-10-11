@extends('admins.layouts.base')

@section('content')
    <section>
        <section>
            <div class="form-group">
                <label for="title">タイトル</label>
                <input type="text" id="title" class="form-control" name="title" value="{{ $post->title }}">
            </div>
            <div class="form-group">
                <label for="content">本文</label>
                <textarea id="content" class="form-control" name="content" rows="10">{{ $post->content }}</textarea>
            </div>
        </section>
    </section>
@endsection
