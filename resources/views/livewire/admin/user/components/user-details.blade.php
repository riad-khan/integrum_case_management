
    <div class="col-xl-3 col-md-12">
        <div class="ms-panel ms-panel-fh">
          <div class="ms-panel-body">
            <h2 class="section-title">Persónuupplýsingar</h2>


            
            <table class="table ms-profile-information">
              <tbody>
                <tr>
                  <th scope="row">Full Name</th>
                  <td>{{Auth::user()->first_name}} {{Auth::user()->last_name}}</td>
                </tr>
                <tr>
                  <th scope="row">Birthday</th>
                  <td>{{Auth::user()->date_of_birth}}</td>
                </tr>
                <tr>
                  <th scope="row">Language</th>
                  <td>{{Auth::user()->language}}</td>
                </tr>
                <tr>
                  <th scope="row">Website</th>
                  <td>{{Auth::user()->website}}</td>
                </tr>
                <tr>
                  <th scope="row">Phone Number</th>
                  <td>{{Auth::user()->phone_number}}</td>
                </tr>
                <tr>
                  <th scope="row">Email Address</th>
                  <td>{{Auth::user()->email}}</td>
                </tr>
                <tr>
                  <th scope="row">Location</th>
                  <td>{{Auth::user()->location}}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

