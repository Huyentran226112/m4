 @extends('blog-layout.master')
 @section( 'content')
 <div class="col-lg-8">
   
    <div class="row">
        @foreach($items as $key => $categories)
       <div class="col-lg-6">
           <!-- Blog post-->
        
           <!-- Blog post-->
           <div class="card mb-4">
               <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
               <div class="card-body">
                   <div class="small text-muted">January 1, 2022</div>
                   <h2 class="card-title h4">{{$categories->name}}</h2>
                   <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam.</p>
                   <a class="btn btn-primary" href="{{route('detail', $categories->id)}}">Xem chi tiết →</a>
               </div>
           </div>
       </div>
   
       @endforeach
   </div>
    <!-- Pagination-->
    <nav aria-label="Pagination">
        <hr class="my-0" />
       
        {{ $items->links() }}
    </nav>
</div>
@endsection