@extends('layouts.app')

@section('content')
    @include('components.alert')
    @include('bucket.create')
    @include('ball.create')

    @includeWhen($buckets->isNotEmpty(),'bucket.list')
    @includeWhen($balls->isNotEmpty(),'ball.list')
    @includeWhen($buckets->isNotEmpty()&& $balls->isNotEmpty() ,'bucket-suggetion.index')
@endsection
