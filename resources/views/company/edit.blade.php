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
                                <h5>Edit Company
                                <a href="{{ url('home') }}"  class ="btn btn-danger float-end" >back to list</a></h5>
                            </div>
                            <div class="card-body">
                                <form action="{{route('company.update',['id'=>$data->id]) }}" method="POST" enctype="multipart/form-data">    
                                    @csrf

                                    <div class="form-group mb-3">
                                        <label for="">Name</label>
                                        <input type="text" name="name" value="{{$data->name}}" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Email</label>
                                        <input type="text" name="email" value="{{$data->email}}" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Address</label>
                                        <input type="text" name="address" value="{{$data->address}}" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Website</label>
                                        <input type="text" name="website" value="{{$data->website}}" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Logo</label>
                                        <input type="file" name="logo" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <button type="update" class="btn btn-primary"> update Company</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </body
    