<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <style>
        .div_center {
            text-align: center;
            padding-top: 40px;
            font-size: 40px;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                @if(session()->has('message'))

                <div class="alert alert-success">
                    <button class="close" data-dismiss="alert" aria-hidden="true" type="button">x</button>
                    {{session()->get('message')}}

                </div>
                @endif
                <div class="div_center">

                    <h2>Add Category</h2>


                    <form action="{{url('/add_category')}}" method="POST">
                        @csrf
                        <input type="text" class="text-dark" name="category_name" placeholder="Write category name..">
                        <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
                    </form>
                </div>

            </div>
        </div>
        <!-- container-scroller -->
        @include('admin.script')
</body>

</html>