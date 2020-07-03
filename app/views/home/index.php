<!--home

<br>
<h2 class="header">Home</h2>

<a href="<?/*= Base::instance()->get('BASE') . '/login'*/?>">login</a>
<a href="<?/*= Base::instance()->get('BASE') . '/halaman'*/?>">halaman</a>
<a href="<?/*= Base::instance()->get('BASE') . '/user/insert'*/?>">nama file</a>
<a href="<?/*= Base::instance()->get('BASE') . '/upload'*/?>">Unggah File</a>


--><?php
/*$result4 = Base::instance()->get('result2');
//var_dump($result4);
*/
?>

<style>
    .page-single{
        width: 350px;
        position: fixed;
        margin: 10% 40%;
    }
</style>

<div class="page-single">
    <div class="container-fluid">
        <div class="row">
            <div class="col col-login mx-auto">
                <div class="text-center mb-6">

                </div>
                <form class="card" action="./login" method="post">

                    <!-- <check if="{{ @flash }}">
                         <true>
                             <div class="alert alert-danger" role="alert">
                                 {{ @flash }}
                             </div>
                         </true>
                     </check>-->

                    <div class="card-body p-6">
                        <div class="card-title">Login to your account</div>
                        <div class="form-group">
                            <label class="form-label" for="username"> Username</label>
                            <input type="text" class="form-control" id="username" name="username"  placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="password">
                                Password
                            </label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" />
                            </label>
                        </div>
                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                        </div>
                    </div>
                </form>
                <div class="text-center text-muted">
                   <!-- Don't have account yet? <a href="./signup">Sign up</a>-->
                </div>
            </div>
        </div>
    </div>
</div>


