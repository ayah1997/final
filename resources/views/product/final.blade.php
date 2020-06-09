<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Final Exam 2020</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <!-- FONT AWESOEM -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>

<body>

</body>
<nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Products - ERP System</a>
        </div>
    </nav>

    <main class="container p-4">
        <div class="row">
            <div class="col-md-4">
                <!-- MESSAGES -->

                @if(isset($product))
                <div class="card card-body">
                    <form action="{{Route('update')}}" method="POST">
                       
                       @csrf
                       @method('PATCH')
                        <div class="form-group">
                            <input type="text" name="title" class="form-control" placeholder="$product-> Title" autofocus required="" value="{{$product->title}}">
                        </div>
                        <div class="form-group">
                            <textarea name="description" rows="2" class="form-control" placeholder="Product Description" required="" value="{{$product->description}}"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="number" name="price" class="form-control" placeholder="Product Price" min="0" "" value="{{$product->price}}">
                        </div>
                        <input type="submit" name="save_product" class="btn btn-success btn-block" value="update Product" >
                    </form>
                </div>
                @else
                <!-- ADD Product FORM -->
                <div class="card card-body">
                    <form action="{{Route('store')}}" method="POST">
                       @csrf
                        <div class="form-group">
                            <input type="text" name="title" class="form-control" placeholder="Product Title" autofocus value="" required>
                        </div>
                        <div class="form-group">
                            <textarea name="description" rows="2" class="form-control" placeholder="Product Description" value="" required></textarea>
                        </div>
                        <div class="form-group">
                            <input type="number" name="price" class="form-control" placeholder="Product Price" min="0" value="" required>
                        </div>
                        <input type="submit" name="save_product" class="btn btn-success btn-block" value="Save Product">
                    </form>
                </div>
                @endif
            </div>
            <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                  <tbody>
                     @foreach($products  as $product)
                        <tr>
                           <td>{{$product->Title}}</td>
                           <td>{{$product->Description}}</td>
                            <td>{{$product->Price}}</td>
                            <td align="center">{{$product->created_at}}</td>
                            <td>
                            <a  href="/{$product->id}/edit" class="btn btn-secondary">
                                   @csrf
                                    @method('put')
                           <i class="fas fa-marker"></i>
                              </a>
                         <a href="delete/{id}" class="btn btn-danger">
                                @csrf
                                 @method('delete')
                              <i class="far fa-trash-alt"></i>
                                 </a>
                            </td>
                        </tr>
                     @endforeach
                   </tbody>
                </table>
            </div>
        </div>
    </main>

    <!-- BOOTSTRAP 4 SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script> 





</html>