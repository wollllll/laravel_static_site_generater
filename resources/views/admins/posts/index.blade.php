@extends('admins.layouts.base')

@section('content')
    <section>
        <a href="{{ route('admins.posts.create') }}">投稿</a>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>タイトル</th>
                <th>作成日時</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>
                        <a href="{{ route('admins.posts.show', ['post' => $post]) }}">詳細</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
@endsection
