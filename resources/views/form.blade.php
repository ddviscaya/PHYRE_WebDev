<html>
  <title></title>
  <body>
      <form class="form-horizontal" role="form" method="POST" action="{{ url('/phyre') }}">
        {{ csrf_field() }}
          <div class="form-group">
              <label for="address" class="col-md-4 control-label">ADDRESS</label>

              <!-- <div class="col-md-6"> -->
                  <input id="address" type="string" class="form-control" name="address" value="" required>
]            </div>
            <div class="form-group">
                <label for="lng" class="col-md-4 control-label">LNG</label>

                <!-- <div class="col-md-6"> -->
                    <input id="lng" type="float" class="form-control" name="lng" value="" required>
              </div>
              <div class="form-group">
                  <label for="lat" class="col-md-4 control-label">LAT</label>

                  <!-- <div class="col-md-6"> -->
                      <input id="lat" type="float" class="form-control" name="lat" value="" required>
                </div>



                  <button type="submit" class="btn btn-primary">
                      ALERT WIWOO WIWOO
                  </button>
              <!-- </div> -->
          <!-- </div> -->
        </form>


  </body>

</html>
