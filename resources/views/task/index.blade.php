@section('content')
    <main role="main" class="container">
      <div class="row">
        <div class="col-md-3 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            List of Tasks
          </h3>
          <div class="task-list">
          <ul>
            <li>Hard-coded task 1</li>
            <li>Hard-coded task 2</li>
          </ul>
          </div>


          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

        </div><!-- /.blog-main -->

        <aside class="col-md-9 blog-sidebar">
          <div class="p-3 mb-3 bg-light rounded">
            <h4 class="font-italic">Task 1 Hardcoded Details</h4>
            <p class="mb-0">This is the details of the first task, hard-coded. There will be a large description here so that it is possible to see how far over the text will go. The description will continue until it is no longer necessary to keep typing.</p>
          </div>

          
        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><!-- /.container -->
@endsection