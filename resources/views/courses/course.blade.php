　@extends('layouts.app')
<ul>
    <h1>日吉</h1>
  　<div class="container">
    @foreach($courses as $course)
    <div class="card">
        <div class="card-header">{{ $course->lecture_name }}</div>
        <div class="card-body">担当教授：{{ $course->professor_name }}　単位数：{{ $course->unit }}</div>
    </div>
    @endforeach
    <h1>三田</h1>
    <div class="container">
    @foreach($courses2 as $course2)
    <div class="card">
        <div class="card-header">{{ $course2->lecture_name }}</div>
        <div class="card-body">担当教授：{{ $course2->professor_name }}　単位数：{{ $course2->unit }}</div>
    </div>
    @endforeach
    <h1>SFC</h1>
    <div class="container">
    @foreach($courses3 as $course3)
    <div class="card">
        <div class="card-header">{{ $course3->lecture_name }}</div>
        <div class="card-body">担当教授：{{ $course3->professor_name }}　単位数：{{ $course3->unit }}</div>
    </div>
    @endforeach
</ul>