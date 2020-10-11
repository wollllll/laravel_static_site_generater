@extends('admins.layouts.base')

@section('content')
    <section>
        <form action="{{ route('admins.posts.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="title">タイトル</label>
                <input type="text" id="title" class="form-control" name="title">
            </div>
            <div class="form-group">
                <label for="content">本文</label>
                <textarea id="content" class="form-control" name="content" rows="10"></textarea>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">投稿</button>
            </div>
        </form>
    </section>
@endsection
