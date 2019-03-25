@extends('layouts.app') @section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Login Failure</div>

				<div class="card-body">
					@if (session('status'))
					<div class="alert alert-success" role="alert">{{ session('status')
						}}</div>
					@endif
					
					Sorry! We couldn't log you in.
					
					<a href="{{ route('login3')}}">Return to login</a>
				</div>
				<div class="card-footer">
					<!-- Display all the Data Validation Rule Errors -->
					<?php
                    if ($errors->count() != 0) {
                        echo "<h5>List of Errors</h5>";
                        foreach ($errors->all() as $message) {
                            echo $message . "<br/>";
                        }
                    }
                    ?>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection



