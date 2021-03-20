@extends('layouts.common')

@section('content')
    <header style="text-align: center; margin-bottom:50px;" >マイページ</header>
        <p>ようこそ、{{ Auth::user()->name }}さん。</p>
    <strong style="margin-left: 30px;">
    レポート登録をするには<button class="btn btn-success .btn-sm rounded-circle p-0" style="width:2rem;height:2rem; margin-right:3px;">R</button>を、
    授業ごとのチャットを行うには<button class="btn btn-info .btn-sm rounded-circle p-0" style="width:2rem;height:2rem;">C</button>を押してください。</strong>
    <div class="container" style="margin-top:50px;">
        <table class="table">
            <thead>
                <tr>
                <th scope="col"></th>
                <th scope="col">Mon</th>
                <th scope="col">Tue</th>
                <th scope="col">Wed</th>
                <th scope="col">Thurs</th>
                <th scope="col">Fri</th>
                <th scope="col">Sat</th>
                </tr>      
            </thead>
            <tbody>
                @foreach($registrations as $period => $row)
                    <tr>
                    <th scope="row">{{ $period }}</th>
                    @foreach($row as $day => $registration)
                        <td>
                        @if($registration)
                        {{ $registration->course->lecture_name }}
                        <br>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <form method="post" action="{{ route('post.todo', $registration->course_id) }}">
                            @csrf
                            <button type="submit" class="btn btn-success .btn-sm rounded-circle p-0" style="width:2rem;height:2rem; margin-right:3px;">R</button>
                            </form>
                            <form method="post" action="{{ route('post.chat', $registration->course_id) }}">
                            @csrf
                            <button type="submit" class="btn btn-info .btn-sm rounded-circle p-0" style="width:2rem;height:2rem;">C</button>
                            </form>
                        </div>
                        @endif
                        </td>
                    @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection