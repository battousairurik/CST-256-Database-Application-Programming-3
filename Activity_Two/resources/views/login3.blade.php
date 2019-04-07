@extends('layouts.app') @section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Login 3</div>

				<div class="card-body">
					@if (session('status'))
					<div class="alert alert-success" role="alert">{{ session('status')
						}}</div>
					@endif

					<form action="{{ route('login3.login') }}" method="POST">
						<input type="hidden" name="_token"
							value="<?php echo csrf_token() ?>" />
						<h2>Please enter your Login Credentials</h2>
						<table>
							<tr>
								<td>Username:</td>
								<td><input type="text" name="username" /></td>
							</tr>

							<tr>
								<td>Password:</td>
								<td><input type="text" name="password" /></td>
							</tr>
							<tr>
								<td colspan="2" align="center"><input type="submit"
									value="Login" /></td>
							</tr>
						</table>
					</form>

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



