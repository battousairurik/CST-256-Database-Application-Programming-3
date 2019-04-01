@extends('layouts.app') @section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					Apply for this job
					
				</div>

				<div class="card-body">
					@if (session('status'))
					<div class="alert alert-success" role="alert">{{ session('status')
						}}</div>
					@endif

					<table>
					@csrf
					<tbody>
					
						<tr>
							<td>Company Name</td>
							<td></td>
						</tr>
						
						<tr>
							<td>Address</td>
							<td></td>
						</tr>
						
						<tr>
							<td>Job Title</td>
							<td></td>
						</tr>
						
						<tr>
							<td>Responsibilities</td>
							<td></td>
						</tr>
						
						<tr>
							<td>Salary</td>
							<td></td>
						</tr>
						
						<tr>
							<td>Prerequisites</td>
							<td></td>
						</tr>
						
						<tr>
							<td><a href="{{ route('jobs.dashboard') }}">Submit Application</a></td>
						</tr>
					</tbody>
					</table>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
