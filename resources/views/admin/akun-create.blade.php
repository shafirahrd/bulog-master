<!doctype html>
<html lang="en">

@include('admin.parts.header')

<body>
    <div class="wrapper">
        @include('admin.parts.navbar')
        <div class="sidebar" data-color="blue" data-image="../assets/img/sidebar-1.jpg">
            <div class="logo">
                <a href="#" class="simple-text">
                    Admin
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="{{'admin-galeri'}}">
                            <i class="fa fa-file-image-o" aria-hidden="true"></i>
                            <p>Galeri Foto RPK</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{'admin-produk'}}">
                            <i class="fa fa-dropbox" aria-hidden="true"></i>
                            <p>Produk RPK</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{'admin-RPK'}}">
                            <i class="fa fa-vcard" aria-hidden="true"></i>
                            <p>Pendaftar RPK</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            @include('admin.parts.navbar')
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="orange">
                                    <h4 class="title">Tambah Akun RPK</h4>
                                    <p class="category"></p>
                                </div>
                                <div class="card-content table-responsive">
                                    <form class="form-horizontal form-material" action="{{'akun-create'}}" method= "post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                        <label class="col-sm-3 control-label">Id RPK</label>
                                             <div class="col-sm-9">
                                                 <select class="selectpicker m-b-20" data-style="form-control" name="id_rpk">
                                                    @foreach ($rpk as $listrpk)
                                                        <option value="{{$listrpk->id_rpk}}">{{$listrpk->id_rpk}}</option>
                                                    @endforeach
                                                 </select>
                                             </div>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Username</label>
                                             <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="Username" name="username">
                                             </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Password</label>
                                             <div class="col-sm-9">
                                                <input type="password" class="form-control" placeholder="Password" name="password">
                                             </div>
                                        </div>
                                        <div class="form-group m-b-0">
                                           <a href="{{'admin-rpk'}}" style="float: right;" class="btn btn-primary waves-effect waves-light m-t-10">Keluar</a>
                                           <button type="submit" style="float: right;" class="btn btn-danger waves-effect waves-light m-t-10">Simpan</button>
                                        </div>
                                     </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

@include('admin.parts.footer')

</html>