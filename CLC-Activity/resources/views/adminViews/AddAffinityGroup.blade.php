@extends('layouts.app') @section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Create New Affinity Group
				
				</div>

				<div class="card-body">
					@if (session('status'))
					<div class="alert alert-success" role="alert">{{ session('status')}}</div>
					@endif

					<form method="post" action="{{ route('admin.affinityGroups.store') }}">
						@csrf
						<div class="form-group">
							<label for="first_name">Group Title:</label> <input type="text"
								class="form-control" name="affinity_group_title" />
						</div>
						<br/>
						<div class="form-group">
							<label for="first_name">Group Description:</label> <input type="text"
								class="form-control" name="affinity_group_description" />
						</div>
						<button type="submit" class="btn btn-primary-outline">Add Group</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection




