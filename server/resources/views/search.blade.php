@extends('layouts.app')

@section('content')
    <h1 style="margin-top: 100px;">検索フォーム</h1>
    <p class="mt-5">下記の文字列を入力して検索</p>
    {{ "<script>location.href = 'http://example.com'</script>" }}
    <form class="form-horizontal" method="post" action="{{ route('/posts/create') }}">
        <div class="form-group row mt-5">
            <div class="col-6 mx-auto">
                <input class="form-control" type="text" name="keyword">
            </div>
        </div>
        <div class="form-user row mb-0">
            <div class="col text-center">
                <button type="submit" class="btn btn-outline-secondary">検索</button>
            </div>
        </div>
    </form>
@endsection