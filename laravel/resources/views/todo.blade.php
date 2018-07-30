
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
            <thead>
                <tr>
                    <th>Head 1</th>
                    <th>Head 2</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Row 1 Cell 1</td>
                    <td>Row 1 Cell 2</td>
                </tr>
                <tr>
                    <td>Row 2 Cell 1</td>
                    <td>Row 2 Cell 2</td>
                </tr>
            </tbody>
        </table>
    <div>
@endsection