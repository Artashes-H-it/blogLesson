   @extends('admin.layouts.main')
   @section('content')
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <div class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
                   <div class="col-sm-6">
                       <h1 class="m-0">Add tags</h1>
                   </div><!-- /.col -->
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="#">Home</a></li>
                           <li class="breadcrumb-item active">Dashboard v1</li>
                       </ol>
                   </div><!-- /.col -->
               </div><!-- /.row -->
           </div><!-- /.container-fluid -->
       </div>
       <!-- /.content-header -->

       <!-- Main content -->
       <section class="content">
           <div class="container-fluid">
               <!-- Small boxes (Stat box) -->
               <div class="row">
                   <div class="col-12">
                       <form action="{{route('admin.tag.store')}}" method="POST" class="w-25">
                           @csrf
                           <div class="form-group">
                               <label for="name_cat">Name</label>
                               <input type="text" name="title" class="form-control" id="name_cat"
                                   placeholder="name tag">
                               @error('title')
                               <div class="text-danger">This field can not be empty</div>
                               @enderror
                           </div>
                           <input type="submit" value="Add" class="btn btn-primary">
                       </form>
                   </div>

                   <!-- ./col -->
               </div>
               <!-- /.row -->
           </div><!-- /.container-fluid -->
       </section>
       <!-- /.content -->
   </div>
   <!-- /.content-wrapper -->

   @endsection