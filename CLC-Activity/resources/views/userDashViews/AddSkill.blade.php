@extends('layouts.app') @section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					Add New Skill
					<div class="navbar">
						<div class="navbar-inner">
							<ul class="nav">
								<li><a href="{{ route('skills.dashboard') }}">Skills Dashboard</a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="card-body">
					@if (session('status'))
					<div class="alert alert-success" role="alert">{{ session('status')
						}}</div>
					@endif

					<form method="post" action="{{ route('skills.addSkill.submit') }}" >
						<table>
							<tr>
								<td>Skill Title</td>
								<td><input type='text' name='skillTitle' /></td>
							</tr>
							<tr>
								<td>Skill Description</td>
								<td><input type='text' name='skillDescription' /></td>
							</tr>
							<tr>
								<td colspan='2'><input type='submit' value="Add Skill" /></td>
							</tr>
						</table>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
