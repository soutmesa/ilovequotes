@extends('layouts.app')

@section('title', 'User Home')

@section('content')
	<?php echo View::make('partials.header') ?>
	<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalForm"  style="margin-bottom: 10px;">Create New User</button>
	<table id="example" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
	    <thead>
	        <tr>
	            <th>Name</th>
	            <th>Gender</th>
	            <th>Email</th>
	            <th>Age</th>
	            <th>Phone</th>
	            <th>Created_at</th>
	            <th>Updated_at</th>
	            <th style="text-align:center;">Action</th>
	        </tr>
	    </thead>
	    <tfoot>
	        
	    </tfoot>
	    <tbody>
	        <tr>
	            <td>Tiger Nixon</td>
	            <td>Male</td>
	            <td>soutmesa3@gmail.com</td>
	            <td>25</td>
	            <td>+85512 365 4789</td>
	            <td>01/01/2017</td>
	            <td>01/01/2017</td>
	            <th style="text-align:center;"><a href="{{ url('/users/edit') }}" align="center"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> | <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a></th>
	        </tr>
	    </tbody>
	</table>
	<?php echo View::make('partials.userModalForm') ?>
@endsection