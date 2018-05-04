@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/descontos') }}">Desconto</a> :
@endsection
@section("contentheader_description", $desconto->$view_col)
@section("section", "Descontos")
@section("section_url", url(config('laraadmin.adminRoute') . '/descontos'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Descontos Edit : ".$desconto->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($desconto, ['route' => [config('laraadmin.adminRoute') . '.descontos.update', $desconto->id ], 'method'=>'PUT', 'id' => 'desconto-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'titulo')
					@la_input($module, 'descricao')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/descontos') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#desconto-edit-form").validate({
		
	});
});
</script>
@endpush
