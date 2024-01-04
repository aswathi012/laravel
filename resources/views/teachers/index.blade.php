@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Teachers</div>

               <table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Description</th>
                    
</tr>
@foreach($teacher as $row)
<tr>
    <td>{{$row->name}}</td>
    <td>{{$row->email}}</td>
    <td>{{$row->mobile}}</td>
    <td>{{$row->description}}</td>
</tr>
@endforeach
               </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
