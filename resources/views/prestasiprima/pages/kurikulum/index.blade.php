@extends('prestasiprima.index')

@section('title', 'Kurikulum & Metode Pembelajaran - SMA Prestasi Prima')

@section('content')

@include('prestasiprima.pages.kurikulum.hero')
@include('prestasiprima.pages.kurikulum.kurikulum-steam')
@include('prestasiprima.pages.kurikulum.pillars')
@include('prestasiprima.pages.kurikulum.it-learning')
@include('prestasiprima.pages.kurikulum.project-based')
@include('prestasiprima.pages.kurikulum.program')
@include('prestasiprima.pages.kurikulum.cta')

@endsection
