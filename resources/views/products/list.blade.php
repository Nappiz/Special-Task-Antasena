<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Special - Task</title>
    <link rel="stylesheet" href="css/listApp.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
        <div class ="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="/"><img src="assets/images/ITS.png" width="125px"></a>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="/">Home</a></li>
                         <li><a href="assets/products.html">Products</a></li>
                         <li><a href="">About</a></li>
                         <li><a href="assets/account.html">Account</a></li>
                    </ul>
                </nav>
                <a href="belum-ada-apa-apa"><img src="assets/images/cart.png" width="30px" height="30px"></a>
                <img src="assets/images/menu.png" class="menu-icon" onClick="menutoggle()" >
            </div>
            <div class="row">
            </div>
        </div>
    </div>

    <div class="bg-dark py-3">
        <h3 class="text-white text-center">Badruzzaman Nafiz - Special Task</h3>
    </div>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-10 d-flex justify-content-end">
                <a href="{{ route('products.create') }}" class="btn btn-dark">Create</a>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            @if (Session::has('success'))
            <div class="col-md-10 mt-4">
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            </div>    
            @endif            
            <div class="col-md-10">
                <div class="card borde-0 shadow-lg my-4">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">Products</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th></th>
                                <th>Name</th>
                                <th>Tipe</th>
                                <th>Price</th>
                                <th>Created at</th>
                                <th>Action</th>
                            </tr>
                            @if ($products->isNotEmpty())
                            @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>
                                    @if ($product->image != "")
                                        <img width="50" src="{{ asset('uploads/products/'.$product->image) }}" alt="">
                                    @endif
                                </td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->sku }}</td>
                                <td>${{ $product->price }}</td>
                                <td>{{ \Carbon\Carbon::parse($product->created_at)->format('d M, Y') }}</td>
                                <td>
                                    <a href="{{ route('products.edit',$product->id) }}" class="btn btn-dark">Edit</a>
                                    <a href="#" onclick="deleteProduct({{ $product->id  }});" class="btn btn-danger">Delete</a>
                                    <form id="delete-product-from-{{ $product->id  }}" action="{{ route('products.destroy',$product->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </td>
                            </tr>   
                            @endforeach
                            
                            @endif
                            
                        </table>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>

    <div class ="footer">
        <div class="container">
            
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and ios mobile phone.</p>
                    <div class="app-logo">
                        <img src="assets/images/play-store.png" alt="">
                        <img src="assets/images/app-store.png" alt="">
                    </div>
                </div>
                <div class="footer-col-2">
                    <!-- <img src="assets/images/ITS.png"> -->
                    <p>Our Purpose Is To Sustainably Make the Pleasure and Benefits of Sports Accessible to the Many.</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                   <ul>
                       <li>Coupons</li>
                       <li>Blog Post</li>
                       <li>Return Policy</li>
                       <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow us</h3>
                   <ul>
                       <li>Facebook</li>
                       <li>Twitter</li>
                       <li>Instagram</li>
                       <li>Youtube</li>
                    </ul>
                </div>
                
            </div>
            
            <hr><!--horizontal line-->
            <p class="copyright">Special Task - Badruzzaman Nafiz</p>
            
        </div>
    </div>

    
  </body>
</html>

<script>
    function deleteProduct(id) {
        if (confirm("Are you sure you want to delete product?")) {
            document.getElementById("delete-product-from-"+id).submit();
        }
    }
</script>