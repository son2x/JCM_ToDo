
@extends('template.app')

@section('title', $page['title'])
@section('heading', $page['heading'])

@section('todo-add-buton')    
    <div>
        <i>Add</i>
    </div>
@endsection

@section('todo-list')
    <div>
        <table>
            <thead></thead>
            <tbody></tbody>
        </table>
    <div>
@endsection