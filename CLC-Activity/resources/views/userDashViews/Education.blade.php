@extends('layouts.app') @section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					Education Dashboard
					<div class="navbar">
						<div class="navbar-inner">
							<ul class="nav">
								<li><a href="{{ route('education.addEducation') }}">Add Education History</a></li>
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
								<th>School Name</th>
								<th>Address</th>
								<th>Education Level</th>
								<th>Degree</th>
								<th>Number of Years Attending</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($dataSet as $data)
							<tr>
								<td>{{$data->school_name}}</td>
								<td>{{$data->address}}</td>
								<td>{{$data->education_level}}</td>
								<td>{{$data->degree}}</td>
								<td>{{$data->num_years}}</td>
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
