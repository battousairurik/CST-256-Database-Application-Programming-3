@extends('layouts.app') @section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					Add Employment History
					<div class="navbar">
						<div class="navbar-inner">
							<ul class="nav">
								<li><a href="{{ route('jobs.dashboard') }}">Employment Dashboard</a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="card-body">
					@if (session('status'))
					<div class="alert alert-success" role="alert">{{ session('status')
						}}</div>
					@endif

					<form action="{{ route('jobs.addJob.submit') }}" method="post">
						<table>
							<tr>
								<td>Company Name</td>
								<td><input type='text' name='companyName' /></td>
							</tr>
							<tr>
								<td>Address</td>
								<td><input type='text' name='address' /></td>
							</tr>
							<tr>
								<td>Job Title</td>
								<td><input type='text' name='jobTitle' /></td>
							</tr>
							<tr>
								<td>Responsibilities</td>
								<td><input type='text' name='responsibilities' /></td>
							</tr>
							<tr>
								<td>Years Employed</td>
								<td><input type='number' name='numYears' /></td>
							</tr>
							<tr>
								<td colspan='2'><input type='submit' value="Add Job History" /></td>
							</tr>
						</table>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
