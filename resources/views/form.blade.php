<html>
  <title></title>
  <body>
      <form class="form-horizontal" role="form" method="POST" action="{{ url('/phyre/alert') }}">
        {{ csrf_field() }}
          <!-- <div class="form-group"> -->
              <label for="address" class="col-md-4 control-label">ADDRESS</label>

              <!-- <div class="col-md-6"> -->
                  <input id="address" type="float" class="form-control" name="address" value="" required>

                  <!-- @if ($errors->has('price'))
                      <span class="help-block">
                          <strong>{{ $errors->first('price') }}</strong>
                      </span>
                  @endif -->
                  <button type="submit" class="btn btn-primary">
                      ALERT WIWOO WIWOO
                  </button>
              <!-- </div> -->
          <!-- </div> -->
        </form>


  </body>

</html>
