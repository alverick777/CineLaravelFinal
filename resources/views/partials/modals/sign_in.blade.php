<!-- MODAL LOGIN -->

<div class="modal fade" id="sign_in" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign In</h4>
      </div>
      <div class="modal-body">
       <div class="row">
		 <div class="col-md-12">		
				 <div class="social-buttons">
					 <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
					 <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
					 <a href="#" class="btn btn-gp"><i class="fa fa-google-plus"></i> Google Plus</a>
					 <a href="#" class="btn btn-gh"><i class="fa fa-github"></i> Github</a>
				 </div>
				 <br>
			        or <br><br>

				 <form class="form" role="form" method="post" action="{{ route('users.signin') }}" accept-charset="UTF-8" id="login-nav">
					 <div class="form-group">
						 <label class="sr-only" for="exampleInputEmail2">Email address</label>
						 <input type="email" class="form-control" id="exampleInputEmail2" name="email" placeholder="Email address" required>
					 </div>
					 <div class="form-group">
						 <label class="sr-only" for="exampleInputPassword2">Password</label>
						 <input type="password" class="form-control" id="exampleInputPassword2" name="password" placeholder="Password" required>
			                <div class="help-block text-right"><a href="">Forget the password ?</a></div>
					 </div>
					 <div class="form-group">
						 <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign in</button>
				     </div>
					 <div class="checkbox">
						<label>
						 <input type="checkbox"> keep me logged-in
						</label>
					 </div>
					 {{ csrf_field() }}
				 </form>
		 </div>				
		</div>	
      </div>
      <div class="modal-footer">        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

	<!-- FIN MODAL LOGIN -->