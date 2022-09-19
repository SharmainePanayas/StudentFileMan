    <div class="container">

        <div class="col-md-6 offset-md-3 mt-5 text-monospace">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h3 class="card-title font-weight-bold">Student Login</h3>
                    <p class="card-text">Login your student account</p>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-group">
                          <input class="form-control" name="stud_no"  type="number" required="required" placeholder="Student Number">
                        </div>  
                        <div class="form-group">
                          <input class="form-control" name="password" placeholder="Password" type="password" required="required">
                        </div>
						<?php include 'login_query.php'?>
                        <button name="login" class="btn btn-dark">Login</button>
                      </form>
                </div>
                <div class="card-footer bg-dark">
                </div>
            </div>

        </div>

    </div>