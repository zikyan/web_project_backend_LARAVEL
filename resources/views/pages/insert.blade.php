


    @include('layouts.includes.header')
    @include('layouts.includes.navbar')
    
    <!-- Modal -->
    
      <form action="insert_product" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
    
            <div class="form-group">
            <label>Product Name</label>
            <input type="text" name="proname" class="form-control" placeholder="Enter Name" required>
            </div>
    
            <div class="form-group">
            <label>Product Image</label>
            <input type="file" name="propic" class="form-control">
            </div>
    
            <div class="form-group">
            <label>Product Price ($)</label>
            <input type="text" name="proprice" class="form-control" placeholder="Enter Price" required>
            </div>
    
            <div class="form-group">
            <label>In Stock</label>
            <select name="prostock" id="" class="form-control">
              <option value="Yes">Yes</option>
              <option value="No">No</option>
            </select>
            </div>
    
            <div class="form-group">
            <label>Product Code</label>
            <input type="text" name="procode" class="form-control" placeholder="Enter Code" required>
            </div>
    
            <div class="form-group">
            <label>Product Discount (%)</label>
            <input type="text" name="prodis" class="form-control" placeholder="Enter Discount" required>
            </div>
    
            <div class="form-group">
            <label>Available Sizes</label>
            <input type="text" name="proavail" class="form-control" placeholder="Enter Available Sizes" required>
            </div>
    
            <div class="form-group">
            <label>Product Material</label>
            <input type="text" name="promat" class="form-control" placeholder="Enter Material" required>
            </div>
    
            <div class="form-group">
            <label>Product Size</label>
            <input type="text" name="prosize" class="form-control" placeholder="Enter Size" required>
            </div>
    
            <div class="form-group">
            <label>Product Specification</label>
            <textarea name="prospecs" class="form-control" placeholder="Enter Specification" required></textarea>
            </div>
    
          </div>
    
          <div class="modal-footer">
          <a href="/dashboard"  class="btn btn-secondary">Close</a>
          <button type="submit" class="btn btn-primary">Add</button>
          </div>
    
      </form>
      @include('layouts.includes.footer')
          </div>
        </div>
      </div>
      
    </div>


@include('layouts.includes.scripts')
