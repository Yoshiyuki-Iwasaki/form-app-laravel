@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a class="btn btn-primary" href="{{ route('contact.create')}}">新規投稿</a>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">your_name</th>
                                <th scope="col">email</th>
                                <th scope="col">url</th>
                                <th scope="col">gender</th>
                                <th scope="col">age</th>
                                <th scope="col">contact</th>
                                <th scope="col">created_at</th>
                            </tr>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $contact)
                                <tr>
                                    <th scope="row">{{$contact->id}}</th>
                                    <td>{{$contact->your_name}}</td>
                                    <td>{{$contact->email}}</td>
                                    <td>{{$contact->url}}</td>
                                    <td>@if($contact->gender === 0) 男性 @elseif ($contact->gender === 1) 女性 @endif</td>
                                    <td>@if($contact->age === 1) 〜19歳 @elseif ($contact->age === 2) 20歳〜29歳 @elseif ($contact->age === 3) 30歳〜39歳 @elseif ($contact->age === 4) 40歳〜49歳 @elseif ($contact->age === 5) 50歳〜59歳 @elseif ($contact->age === 6) 60歳〜 @endif</td>
                                    <td>{{$contact->contact}}</td>
                                    <td>{{$contact->created_at}}</td>
                                    <td><a class="btn btn-primary" href="{{ route('contact.show',['id' => $contact->id])}}">詳細を見る</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
