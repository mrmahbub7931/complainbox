@extends( 'layouts.backend.app' )

@section( 'title','Employee' )
@push('css')

@endpush

@section( 'content' )
<section class="content">
    <div class="col-md-12 col-lg-6 mt-3">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">New Employee</h3>
            </div>
            <!-- /.box-header -->
            <div>
                @if($errors->any())
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
            <!-- form start -->
            <form role="form" action="{{ route('admin.sub_category.update',$subCategory->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              <div class="box-body">
                <div class="form-group">
                    <label for="category_id" class="col-form-label">Category:</label>
                    <select name="category_id" class="form-control">
                        @foreach ($categories as $category)
                            <option 
                            @if($category->id == $subCategory->category_id)
                            selected
                            @endif
                            value="{{ $category->id}}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="sub_category_name" class="col-form-label">Employee Name:</label>
                <input class="form-control" type="text" id="sub_category_name" name="sub_category_name" placeholder="Employee name" value="{{ $subCategory->sub_category_name }}">
                </div>
                
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-6 col-xs-12">
                            <label for="sub_category_designation" class="col-form-label">Employee designation:</label>
                            <input class="form-control" type="text" id="sub_category_designation" name="sub_category_designation" placeholder="Employee designation" value="{{ $subCategory->sub_category_designation }}">
                        </div>
                        <div class="col-lg-6 col-xs-12">
                            <label for="sub_category_email" class="col-form-label">Email:</label>
                            <input class="form-control" type="email" name="sub_category_email" id="sub_category_email" placeholder="Email Address" value="{{ $subCategory->sub_category_email }}">
                        </div>
                    </div>
                    
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                            <label for="old_password" class="col-form-label">Old Password:</label>
                            <input class="form-control" type="password" id="old_password" name="old_password" placeholder="password">
                        </div>
                        <div class="col-lg-6 col-xs-12">
                            <label for="password" class="col-form-label">Password:</label>
                            <input id="password" type="password" class="form-control"
                           name="password" autocomplete="current-password" placeholder="Password">
                        </div>
                    </div>
                    
                </div>
                <div class="form-group">
                    <label for="employee_avatar">Upload avatar</label>
                    <input type="file" id="employee_avatar" name="employee_avatar">
  
                    <p class="help-block">Upload your avatar.</p>
                  </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-success btn-flat">Submit</button>
                <a href="{{ route('admin.sub_category.index') }}"><button type="submit" class="btn btn-primary btn-flat">Back</button></a>
              </div>
            </form>
        </div>
    </div>

</section>

@endsection

@push('js')

@endpush