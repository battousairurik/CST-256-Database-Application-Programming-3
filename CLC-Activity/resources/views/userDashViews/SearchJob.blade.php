@extends('layouts.app') @section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					Search for a job
					
				</div>

				<div class="card-body">
					@if (session('status'))
					<div class="alert alert-success" role="alert">{{ session('status')
						}}</div>
					@endif

					<form action="{{ route('jobs.search.display') }}" method="post">
						<table>
							<tr>
								<td>Job Title</td>
								<td><input type='text' name='jobTitle' data-toggle="tooltip" data-placement="right" title="Entry may be left blank"/></td>
							</tr>
							<tr>
								<td>Job Description</td>
								<td><input type='text' name='jobDescription' data-toggle="tooltip" data-placement="right" title="Entry may be left blank"/></td>
							</tr>
							<tr>
								<td colspan='2'><input type='submit' value="Search Jobs" /></td>
							</tr>
						</table>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
