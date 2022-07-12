@extends('layouts.home')
@section('content_head')
@endsection
@section('content')
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-center justify-content-md-between">
            <h4 class="card-title">Ovqatlar Ro'yxati</h4>
            <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#evaluation" >Qo'shish</button>
        </div>
        <div class="card-content">
            <div class="card-body card-dashboard">
                <div class="table-responsive">
                    <table class="table zero-configuration">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Rating</th>
                            <th style="width: 200px ;">Tahrir</th>

                        </tr>
                        </thead>
                        <tbody>
                    @foreach($evaluations as $key=>$evaluation)
                    @php
                    $key++;
             @endphp
                        <tr>
                            <td width="1%">{{$key}}</td>
                            <td>{{$evaluation->name}}</td>
                            <td>{{$evaluation->rating}}</td>
                            <td class="d-flex justify-content-between">
                                <form action="{{route('evaluationEdit', ['id' => $evaluation->id])}}" method="get">
                                    @method('get')
                                    @csrf
                                    <button data-target="#evaluationedit" data-toggle="modal" class="btn btn-primary d-inline-block" style="margin-right: 10px">Tahrirlash</button>
                                </form>
                                <form action="{{route('evaluationDestroy', ['id' => $evaluation->id])}}" method="Post">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger d-inline-block">O'chirish</button>
                                </form>
                            </td>

                        </tr>
                        @endforeach
                        <tfoot>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Rating</th>
                            <th style="width: 200px ;">Tahrir</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
