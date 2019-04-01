@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User Dashboard
                <div class="navbar">
						<div class="navbar-inner">
							<ul class="nav">
								<li><a href="{{ route('jobs.search') }}">Search for Job</a></li>
							</ul>
						</div>
					</div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <!-- {{ $users = \App\User::all() }}
                    {{ $education = \App\models\EducationModel::all() }}
                    {{ $jobListings = \App\models\JobListingModel::all() }}
                    {{ $test3 = \App\models\EmploymentModel::all() }}
                    {{ $test4 = \App\models\SkillModel::all() }} -->
                    
                    <table>
                    	<thead>
                    		<tr>
                    			<th>Company Name</th>
                    			<th>Job Title</th>
                    			<th>Salary</th>
                    			<th>Apply</th>
                    		</tr>
                    	</thead>
                    	<tbody>
                    		@foreach ($jobListings as $listing)
                    			<tr>
                    				<td>{{$listing->company_name}}</td>
                    				<td>{{$listing->job_title}}</td>
                    				<td>{{$listing->salary}}</td>
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
