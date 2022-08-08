@include('layouts.app')




    <body>
            
            <div class="container"> 
          
                <div class="row">
                    <div class="col-md-12">
                    @if (session('status'))
                        <h6 class="alert alert-success">{{session('status')}} </h6>

                    @endif
                        <div class="card">
                            <div class="card-header">
                                <h5>Add Company
                                <a href="{{ url('home') }}" class ="btn btn-danger float-end">back to list</a></h5>
                            </div>
                            <div class="card-body">
                                <form action="add-company" method="POST" enctype="multipart/form-data">    
                                    @csrf

                                    <div class="form-group mb-3">
                                        <label for="">Name</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Email</label>
                                        <input type="text" name="email" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Address</label>
                                        <input type="text" name="address" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Website</label>
                                        <input type="text" name="website" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Logo</label>
                                        <input type="file" name="logo" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <button type="submit" class="btn btn-primary"> Save Company</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </body
    