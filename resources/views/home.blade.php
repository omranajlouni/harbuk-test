@include('layouts.app')




    <body>
            
            <div class="container"> 
            <a href="{{ url('add-company') }}" class ="btn btn-primary float-left">Create new Company</a><br><br> 
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5> Companies List
                            </div>
                            <div class="card-body">
                                <table class="table table-border table-striped">
                                <thead>
                                    <tr>
                                    <th>Logo</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Website</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($data as $comp)
                                    <tr>
                                    <td><img src="{{asset('public/storage/app/public/companies-logos'.$comp->logo)}}" width="70px" height="70px" alt ="Logo" ></td>
                                    <td>{{$comp->name}}</td>
                                    <td>{{$comp->email}}</td>
                                    <td>{{$comp->address}}</td>
                                    <td>{{$comp->website}}</td>
                                    <td> <a href="{{ url('add-company',['id'=>$comp->id]) }}" class="btn btn-primary btn-sm">Edit</a> <br> <a href=" {{route('company.destroy',['id'=>$comp->id])}}" class="btn btn-danger btn-sm">Delete</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>
                                <!-- {{ var_dump($data->links()) }} -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </body
    