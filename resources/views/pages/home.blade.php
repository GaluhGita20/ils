<?php
$page="Home"
?>

@extends('layouts.template')
@section('content')

      <!-- Start Content -->
      @include('components.sambutan-awal')
      
      @include('components.categories')
      @include('components.sub-kategori1')
      @include('components.sub-kategori2')
      @include('components.sub-kategori3')
      @include('components.sub-kategori4')
      @include('components.our-video')
      
      


       <!-- section main content -->



@endsection