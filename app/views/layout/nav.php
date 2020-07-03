<style>
    .masthead {
       /* height: 100vh;
        min-height: 500px;*/
        /*background-image: url('https://source.unsplash.com/BtbjCFUvBXs/1920x1080');*/
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
    .collapse.navbar-collapse ul{

    }


</style>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Start </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item active">
                  <!--  <a class="nav-link" href="./admin">Home-->
                    <a class="nav-link" href="<?= Base::instance()->get('BASE') ,'/admin'?>">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#myModal" href="<?= Base::instance()->get('BASE') ,'/user/insert'?>">Direktori Baru</a>
                </li>
                <!--MODAL-->
                <!--<li class="nav-item">
                    <a class="nav-link" href='<?/*= Base::instance()->get('BASE') ,'/upload'*/?>'></a>
                </li>-->
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
            </ul>
        </div>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a id="logout" class="nav-link" href="<?= Base::instance()->get('BASE') ,'/logout'?>">Logout</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<!-- Full Page Image Header with Vertically Centered Content -->
<header class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center">

            </div>
        </div>
    </div>
</header>
<div class="" style="margin-bottom: 5%;"></div>
