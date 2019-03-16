@extends('layouts.app') @section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					Job Dashboard
					<div class="navbar">
						<div class="navbar-inner">
							<ul class="nav">
								<li><a href="{{ route('jobs.addJob') }}">Add Employment History</a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="card-body">
					@if (session('status'))
					<div class="alert alert-success" role="alert">{{ session('status')
						}}</div>
					@endif

					<table>
						<thead>
							<tr>
								<th>Company Name</th>
								<th>Address</th>
								<th>Job Title</th>
								<th>Responsibilities</th>
								<th>Number of Years</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($dataSet as $data)
							<tr>
								<td>{{$data->companyName}}</td>
								<td>{{$data->address}}</td>
								<td>{{$data->jobTitle}}</td>
								<td>{{$data->responsibilities}}</td>
								<td>{{$data->numYears}}</td>
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
