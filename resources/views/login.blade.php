@include('components.nav')
<div class="container d-flex justify-content-center">
    <div class="card col-12 col-md-4">
        <div class="card-body p-5 bg-light rounded-3">
            <form method="POST" action="{{ route('inicia-sesion') }}">
                    @csrf
                <div class="mb-3">
                    <label for="email" id="email" name="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="password" id="password" name="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="remember">
                    <label class="form-check-label" for="remember">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@include('components.footer')
