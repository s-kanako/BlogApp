@extends('includes.head')
@section('title','Create Category')

@section('content')
<div class="Container">
    <br>
    <div class="col-md-8 col-md-offset-8">
        <div class="well ">
                <div class="row justify-content-center">

            <br><br>
                        <div class="text-center"><h2><b>Create a New category</b></h2></div>

                <form action="{{route('category.store')}}" method="post">

                        @csrf
                        <br><br><br>
                <div class="col-md-8-md-offset-6">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder=" Add New Category..">
                            </div>
                            <button type="submit" class="btn btn-success"> Save</button>

                        </form>
                        <br><br>
                    </div>
                    <br>


                    <table class="table table-striped table-hover">
                    <thead class="thead-dark">

                    <tr class="info">
                        <th>No.</th>
                        <th> category Name</th>

                        <th>category created at</th>
                    </tr>
                </thead>
                <tbody>


                                    @foreach($category as $showcat)
                                    <tr >

                                         <td >{{ $showcat->id }}</td>
                                         <td>{{ $showcat->name }}</td>

                                         <td>{{ date('j F Y', strtotime($showcat->updated_at)) }}</td>
                                    </tr>

                                                        </div>
                                                   </div>
                                              </div>
                                         </div>
                                    </div>
                               @endforeach
                            </tbody>
                        </table>
                </div>
        <br>

    </div>
</div>

@endsection