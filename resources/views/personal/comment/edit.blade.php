   @extends('personal.layouts.main')
   @section('content')
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <div class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
                   <div class="col-sm-6">
                       <h1 class="m-0">Comments</h1>
                   </div><!-- /.col -->
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="{{route('personal.main.index')}}">Home</a></li>
                           <!-- <li class="breadcrumb-item active">Dashboard v1</li> -->
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
                       <form action="{{route('personal.comment.update', $comment->id)}}" method="POST" class="w-50">
                           @csrf
                           @method('PATCH')
                           <div class="form-group">
                               <textarea name="massage" class="form control" cols="30"
                                   rows="10">{{$comment->massage}}</textarea>
                               @error('massage')
                               <div class="text-danger">This field can not be empty</div>
                               @enderror
                           </div>
                           <input type="submit" value="Update" class="btn btn-primary">
                       </form>
                   </div>
                   <!-- ./col -->
                   <div class="col-lg-3 col-6">
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