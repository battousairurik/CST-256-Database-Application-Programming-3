@extends('layouts.app') @section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					List All Affinity Groups
					
				</div>

				<div class="card-body">
					@if (session('status'))
					<div class="alert alert-success" role="alert">{{ session('status')
						}}</div>
					@endif

					<table>
						<thead>
							<tr>
								<th>Group Name</th>
								<th>Group Description</th>
								<th>Edit Link</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($dataSet as $data)
							<tr>
								<td>{{$data->group_name}}</td>
								<td>{{$data->group_description}}</td>
								<td>href="{{ route('admin.affinityGroups.edit')->with($data->id) }}"> {{ __('Edit') }} </a></td>
							</tr>
							@endforeach
						</tbody>
					</table>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
