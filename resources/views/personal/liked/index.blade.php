   @extends('personal.layouts.main')
   @section('content')
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <div class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
                   <div class="col-sm-6">
                       <h1 class="m-0">Liked</h1>
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
                   <div class="col-6">
                       <div class="card">
                           <div class="card-body table-responsive p-0">
                               <table class="table table-hover text-nowrap">
                                   <thead>
                                       <tr>
                                           <th>ID</th>
                                           <th>Name</th>
                                           <th>Created date</th>
                                           <th colspan="2" class="text-center">Action</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       @foreach($posts as $post)
                                       <tr>
                                           <td>{{$post->id}}</td>
                                           <td>{{$post->title}}</td>
                                           <td><a href="{{route('admin.post.show', $post->id)}}"><i
                                                       class="far fa-eye"></i></a></td>
                                           <td>
                                               <form action="{{route('personal.liked.delete', $post->id)}}"
                                                   method="POST">
                                                   @csrf
                                                   @method('DELETE')
                                                   <button type="submit" class="border-0 bg-transparent"><i
                                                           class="fas fa-trash-alt text-danger"></i></button>
                                               </form>
                                           </td>
                                       </tr>
                                       @endforeach
                                   </tbody>
                               </table>
                           </div>
                           <!-- /.card-body -->
                       </div>
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