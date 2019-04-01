@extends('layouts.app') @section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					Custom Search Display
					<div class="navbar">
						<div class="navbar-inner">
							<ul class="nav">
								<li><a href="{{ route('jobs.search') }}">Return to search</a></li>
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
					@csrf
						<thead>
							<tr>
								<th>Job Title</th>
								<th>Job Description</th>
								<th>Apply</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($dataSet as $data)
							<tr>
								<td>{{$data->job_title}}</td>
								<td>{{$data->job_description}}</td>
								<td><a href="{{ route('jobs.apply') }}">Apply</a></td>
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
