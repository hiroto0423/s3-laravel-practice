@extends('layouts.app')

@section('content')
<div>
    <h1>メールアドレスの確認</h1>
    <p>メールアドレスの確認が完了していません。確認メールを再送信しますか？</p>
    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <button type="submit">確認メールを再送信する</button>
    </form>
</div>
@endsection