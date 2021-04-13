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

                    showです。
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
                            <tr>
                                <th scope="row">{{$contact->id}}</th>
                                <td>{{$contact->your_name}}</td>
                                <td>{{$contact->email}}</td>
                                <td>{{$contact->url}}</td>
                                <td>{{$gender}}</td>
                                <td>{{$age}}</td>
                                <td>{{$contact->contact}}</td>
                                <td>{{$contact->created_at}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <form method="GET" action="{{route('contact.edit',['id'=>$contact->id])}}">
                        @csrf
                        <input class="btn btn-info" type="submit" value="変更する">
                    </form>

                    <form method="POST" action="{{route('contact.destroy',['id'=>$contact->id])}}" id="delete_{{$contact->id}}">
                        @csrf
                        <a href="#" class="btn btn-danger" data-id="{{$contact->id}}" onclick="deletePost(this);">削除する</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function deletePost(e){
        'use strict';
        if(confirm('本当に削除していいですか？')){
            document.getElementById('delete_' + e.dataset.id).submit();
        }
    }
</script>

@endsection
