@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User Dashboard</div>

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
                    			<th>Address</th>
                    			<th>Job Title</th>
                    			<th>Responsibilities</th>
                    			<th>Salary</th>
                    			<th>Pre-requisites</th>
                    		</tr>
                    	</thead>
                    	<tbody>
                    		@foreach ($jobListings as $listing)
                    			<tr>
                    				<td>{{$listing->companyName}}</td>
                    				<td>{{$listing->address}}</td>
                    				<td>{{$listing->jobTitle}}</td>
                    				<td>{{$listing->responsibilities}}</td>
                    				<td>{{$listing->salary}}</td>
                    				<td>{{$listing->prerequisites}}</td>
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
