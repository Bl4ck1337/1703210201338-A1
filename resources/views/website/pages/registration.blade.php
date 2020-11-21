@extends('website.layouts.defaults')

@section('content')

<div class="container-fluid">
<div class="col-md-8 offset-md-2 py-5">
    <div class="card">

        <div class="card-header bg-dark text-center">

          <h1 class="text-white"><strong>Regitrsation form</strong></h1>
              @if (Session::has('success'))
              <div class="alert alert-success">

                   <strong>{{ Session::get('success') }}</strong>

            </div>
              @endif
        </div>
        <div class="card-body">

        <form action="{{ URL::to('store') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">

                        <input type="text" name="name" class="form-control" value="" placeholder="Enter your name">



                </div>
                <div class="form-group">

                        <input type="text" class="form-control"  name="email" value="" placeholder="Enter your email">



                </div>

                <div class="form-group form-inline">
                    <legend class="col-form-label col-sm-2 pt-0">Gender</legend>



                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                          Male
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios3" value="">
                        <label class="form-check-label" for="exampleRadios3">
                          Female
                        </label>
                      </div>

                </div>
                <div class="form-group">

                        <label for="">Birth date</label>
                        <input type="date" class="form-control" name="date_of_birth">

                </div>
                <div class="form-group row">
                    <div class="col-sm-2">Status</div>
                    <div class="col-sm-10">
                      <div class="form-check">
                        <input class="form-check-input"name="status"  type="checkbox">
                        <label class="form-check-label" for="gridCheck1">
                          Yes
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" name="status"  type="checkbox">
                        <label class="form-check-label" for="gridCheck1">
                          No
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">

                    <label for="">Salary</label>
                    <input type="number" class="form-control" name="salary">

            </div>




                <input type="submit" class="btn btn-primary" value="submit">
            </form>

        </div>



    </div>

</div>
</div>


@endsection
