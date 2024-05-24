@extends('adminlte::page')
<script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script>

@section('title', 'Dashboard')

@section('content_header')
    <h1>    Perfil</h1>
@stop

@section('content')
    <h1>    Perfil</h1>
@stop
