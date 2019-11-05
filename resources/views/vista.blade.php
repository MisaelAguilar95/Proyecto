@extends ('layout')
@section('contenido')
@unless (empty($posts))
            <h2> hay articulos</h2>
            @endunless
             @foreach ($posts as $post) : 
            <li> {{$post}}  </li>
              @endforeach 
@stop
@section('scripts')
<script>alert('Pagina de proyecto')</script>
@stop