@extends('prestasiprima.index')

@section('title', 'Beranda - SMA Prestasi Prima')

@section('meta_description', 'SMA Prestasi Prima menghadirkan pendidikan kejuruan berstandar industri dengan program unggulan, fasilitas modern, serta dukungan karier dan prestasi siswa yang inspiratif.')

@section('meta_keywords', 'SMA Prestasi Prima, sekolah kejuruan Jakarta, pendidikan vokasi, prestasi siswa, pendaftaran SMA, program keahlian')

@section('content')
  @include('prestasiprima.sections.hero')
  @include('prestasiprima.sections.tentang')
  @include('prestasiprima.sections.program')
  @include('prestasiprima.sections.virtual-tour')
  @include('prestasiprima.sections.prestasi')
  @include('prestasiprima.sections.kerjasama-ptn')
  @include('prestasiprima.sections.blog')
@endsection
