@extends('layouts.app') @section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					Add New Education History
					<div class="navbar">
						<div class="navbar-inner">
							<ul class="nav">
								<li><a href="{{ route('education.dashboard') }}">Education
										Dashboard</a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="card-body">
					@if (session('status'))
					<div class="alert alert-success" role="alert">{{ session('status')
						}}</div>
					@endif

					<form action="{{ route('education.addEducation.submit') }}" method="post">
						<table>
							<tr>
								<td>School Name</td>
								<td><input type='text' name='schoolName' /></td>
							</tr>
							<tr>
								<td>Address</td>
								<td><input type='text' name='address' /></td>
							</tr>
							<tr>
								<td>Education Level</td>
								<td><input type='text' name='educationLevel' /></td>
							</tr>
							<tr>
								<td>Degree</td>
								<td><input type='text' name='degree' /></td>
							</tr>
							<tr>
								<td>Years Completed</td>
								<td><input type='number' name='numYears' /></td>
							</tr>
							<tr>
								<td colspan='2'><input type='submit' value="Add Education" /></td>
							</tr>
						</table>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
