<section class="book_section layout_padding">
  <div class="container">
    <div class="heading_container">
      <h2>
        Book A Table
      </h2>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form_container">
          <form action="{{url('book_now')}}" method="get">
            <div>
              <input type="text" class="form-control" placeholder="Your Name" required/>
            </div>
            <div>
              <input type="text" class="form-control" placeholder="Phone Number" required/>
            </div>
            <div>
              <input type="email" class="form-control" placeholder="Your Email" required/>
            </div>
            <div>
              <select class="form-control nice-select wide">
                <option value="" disabled selected >
                  How many persons?
                </option>
                <option value="2">
                  2
                </option>
                <option value="3">
                  3
                </option>
                <option value="4">
                  4
                </option>
                <option value="5">
                  5
                </option>
                <option value="6">
                  6
                </option>
                <option value="7">
                  7
                </option>
                <option value="8">
                  8
                </option>
                <option value="9">
                  9
                </option>
                <option value="10">
                  10
                </option>

              </select>
            </div>
            <div>
              <input type="date" class="form-control" required>
            </div>
            <div class="btn_box">
          <button type="submit">Book Now</button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-6">
        <div class="map_container ">
          <div id="googleMap"></div>
        </div>
      </div>
    </div>
  </div>
</section>
