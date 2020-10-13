    <div class="newsletter bg-primary py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <h2>Newsletter</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          </div>
          <div class="col-md-6">
               @include("shared.msg")

            <form class="d-flex" action="{{ route('newsletter') }}" method="post">
              @csrf
              <input type="text" class="form-control" name="email"  id="email" placeholder="Email">
              <button type="submit" value="Subscribe" class="btn btn-white"> Subscribe</button>
            </form>
          </div>
        </div>
      </div>
    </div>