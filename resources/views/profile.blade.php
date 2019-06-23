@extends('layouts.app')

@section('title', Auth::user()->username.' - '.env('APP_NAME'))

@section('content')
	Profile starts here!
@endsection
