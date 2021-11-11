@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('contact.send') }}">
                        @csrf
                        氏名
                        {{ $inputs['your_name'] }}
                        <input
                        name="your_name"
                        value="{{ $inputs['your_name'] }}"
                        type="hidden">
                        <br>
                        メールアドレス
                        {{ $inputs['email'] }}
                        <input
                        name="email"
                        value="{{ $inputs['email'] }}"
                        type="hidden">
                        ホームページ
                        {{ $inputs['url'] }}
                        <input
                        name="url"
                        value="{{ $inputs['url'] }}"
                        type="hidden">
                        性別
                        {{ $inputs['gender'] }}
                        <input
                        name="gender"
                        value="{{ $inputs['gender'] }}"
                        type="hidden">
                        <br>
                        年齢
                        {{ $inputs['age'] }}
                        <input
                        name="age"
                        value="{{ $inputs['age'] }}"
                        type="hidden">
                        <br>
                        お問い合わせ内容
                        <textarea name="contact"></textarea>
                        {!! nl2br(e($inputs['contact'])) !!}
                        <input
                        name="contact"
                        value="{{ $inputs['contact'] }}"
                        type="hidden">
                        <br>

                        <input type="checkbox" name='caution' value="1">注意事項に同意する
                        <br>
                        <button class="btn btn-info" type="submit" name="action" value="back">
                            入力内容修正
                        </button>
                        <button class="btn btn-info" type="submit" name="action" value="submit">
                            送信する
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
