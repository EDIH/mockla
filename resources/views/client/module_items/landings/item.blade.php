<?php
/**
 * @var $module_item \App\Models\ModuleItem;
 */

//$attributes = $program->attrs();
$properties = $module_item->props->mapWithKeys(function ($prop) {
    return [$prop->type->key => $prop->value];
});
?>


@extends('client.layouts.main')
@section('content')
    <!-- block-content -->
    @foreach($model->seoable->blocks as $block)
        @if($block->enabled)
            <?php $view = explode('.', $block->template->path)[0]; ?>
            @include('client.block_templates.templates.'.$view)
        @endif
    @endforeach
    <!-- /.block-content -->
@endsection
