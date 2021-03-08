

@include('layouts.includes.header')
@include('layouts.includes.navbar')


@if (Session::has('flash_message_error'))
    <div class="alert alert-success alert-block">
       <button type="button" class="close" data-dismiss="alert">×</button>	
           <strong>{!! session('flash_message_error') !!}</strong>
  </div>
 @endif
  
<a  href="insert" style="margin-left: 20px;"  class="btn btn-success">Add Product</a>

  <div class="card-body">

    <div class="table-responsive">

          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Image</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Code</th>
            <th>Discount</th>
            <th>Fit</th>
            <th>Material</th>
            <th>Size</th>
            <th>View</th>
            <th>Update</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($singles as $single)

          <tr>
            <td>{{$single->id}}</td>
            <td>{{$single->proname}}</td>
            <td><img src="{{asset('uploads/'.$single->propic)}}" alt="Product image" width="100px" height="100px"></td>
            <td>{{$single->proprice}}</td>
            <td>{{$single->prostock}}</td>
            <td>{{$single->procode}}</td>
            <td>{{$single->prodis}}</td>
            <td>{{$single->proavail}}</td>
            <td>{{$single->promat}}</td>
            <td>{{$single->prosize}}</td>

            <td>
                <a href="read/{{$single->id}}" class="btn btn-success"> View</a>
            </td>
            
            <td>
              <a href="update/{{$single->id}}" class="btn btn-warning"> Update</a>
            </td>

            <td>
              <a href="delete/{{$single->id}}" class="btn btn-danger"> Delete</a>
            </td>
      
          </tr>
          @endforeach
          
        
        </tbody>
      </table>
    </div>
  
</div>


@include('layouts.includes.scripts')
@include('layouts.includes.footer')
  

<!-- /.container-fluid -->

