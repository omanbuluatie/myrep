@extends('layouts.front')
@section('title')
Beranda | MiQot | Ayo kita umroh
@stop
@section('content')


@endsection

@section('scripts')

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('[name="_token"]').val()
        }
    });
    $(document).ready(function() {


    })
</script>
@endsection