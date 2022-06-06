   @extends('admin.layouts.main')
   @section('content')
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <div class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
                   <div class="col-sm-6">
                       <h1 class="m-0">Edit User</h1>
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
                       <form action="{{route('admin.user.update', $user->id)}}" method="POST" class="w-25">
                           @csrf
                           @method('PATCH')
                           <div class="form-group">
                               <label for="name_cat">Name</label>
                               <input type="text" name="name" class="form-control" id="name_cat" placeholder="name user"
                                   value="{{$user->name}}">
                               @error('name')
                               <div class="text-danger">{{$message}}</div>
                               @enderror
                           </div>
                           <div class="form-group">
                               <label for="name_cat">email</label>
                               <input type="text" name="email" class="form-control" id="name_cat"
                                   placeholder="email user" value="{{$user->email}}">
                               @error('email')
                               <div class="text-danger">{{$message}}</div>
                               @enderror
                           </div>
                           <div class="form-group w-50">
                               <label>Choose role</label>
                               <select name="role" class="form-control">
                                   @foreach($roles as $id => $role)
                                   <option value="{{$id}}" {{$id == $user->role ? 'selected' : ''}}>
                                       {{$role}}
                                   </option>
                                   @endforeach
                               </select>
                               @error('role')
                               <div class="text-danger">{{$message}}</div>
                               @enderror
                           </div>
                           <div class="form-group">
                               <input type="hidden" name="user_id" value="{{$user->id}}">
                           </div>
                           <input type="submit" value="Update" class="btn btn-primary">
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