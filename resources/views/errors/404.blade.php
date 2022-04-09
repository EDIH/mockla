@php
  $page = \App\Models\Page::whereHas('seo', function (\Illuminate\Database\Eloquent\Builder $query) {
                 $query->where('alias', 404);
             })
                 ->with(['seo', 'addition'])
                 ->first();
@endphp
@extends('errors.layout')

@php
  $error_number = 404;
@endphp

@section('content')
    @foreach($page->blocks as $block)
        @if($block->enabled)
            <?php $view = explode('.', $block->template->path)[0]; ?>
            @includeIf('client.block_templates.templates.'.$view)
        @endif
    @endforeach
@endsection

{{--@section('title')--}}
{{--  Page not found.--}}
{{--@endsection--}}

{{--@section('description')--}}
{{--  @php--}}
{{--    $default_error_message = "Please <a href='javascript:history.back()''>go back</a> or return to <a href='".url('')."'>our homepage</a>.";--}}
{{--  @endphp--}}
{{--  {!! isset($exception)? ($exception->getMessage()?$exception->getMessage():$default_error_message): $default_error_message !!}--}}
{{--@endsection--}}
