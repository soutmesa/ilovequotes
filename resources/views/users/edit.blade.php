@extends('layouts.app')

@section('title', 'User Home')

@section('content')
	<?php echo View::make('partials.header') ?>
	<?php echo View::make('partials.editForm') ?>
@endsection