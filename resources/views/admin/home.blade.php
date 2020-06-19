@extends('admin.layout')

@section('home')
<div class="sh-pagebody">
          <div class="row row-sm">
            <div class="col-lg-8">
              
             
  
              <div class="card bd-primary mg-t-20">
                <div class="card-header bg-primary tx-white">Engine Reports</div>
                <div class="table-responsive">
                  <table class="table table-striped mg-b-0">
                    <thead>
                      <tr>
                        <th>Rendering Engine</th>
                        <th>Browser</th>
                        <th>Platforms</th>
                        <th>Engine Version</th>
                        <th>CSS Grade</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Trident</td>
                        <td>Internet  Explorer 5.5</td>
                        <td>Win 95+</td>
                        <td class="center">5.5</td>
                        <td class="center">A</td>
                      </tr>
                      <tr>
                        <td>Presto</td>
                        <td>Internet Explorer 6</td>
                        <td>Win 98+</td>
                        <td class="center">6</td>
                        <td class="center">A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Internet Explorer 7</td>
                        <td>Win XP SP2+</td>
                        <td class="center">7</td>
                        <td class="center">A</td>
                      </tr>
                      <tr>
                        <td>Webkit</td>
                        <td>Internet  Explorer 5.5</td>
                        <td>Win 95+</td>
                        <td class="center">5.5</td>
                        <td class="center">A</td>
                      </tr>
                      <tr>
                        <td>Edge</td>
                        <td>Internet  Explorer 5.5</td>
                        <td>Win 95+</td>
                        <td class="center">5.5</td>
                        <td class="center">A</td>
                      </tr>
                    </tbody>
                  </table>
                </div><!-- table-responsive -->
              </div><!-- card -->
  
              <div class="card bd-primary mg-t-20">
                <div class="card-header bg-primary tx-white">Recent Comments</div>
                <div class="card-body">
                  <div class="media-list">
                    <div class="media">
                      <img src="./img/img9.jpg" class="wd-50 rounded-circle" alt="">
                      <div class="media-body mg-l-20">
                        <h6 class="tx-15 mg-b-5"><a href="#">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</a></h6>
                        <p class="mg-b-20">by: <a href="#">Rose Fay Orcullo</a></p>
                        <p>Everyone realizes why a new common language would be desirable. To achieve this, it would be necessary to have uniform grammar.</p>
                        <p class="mg-b-0">
                          <a href="#" class="btn btn-success pd-sm-x-20 mg-sm-r-5">Approve</a>
                          <a href="#" class="btn btn-secondary pd-sm-x-20">Reject</a>
                        </p>
                      </div><!-- media-body -->
                    </div><!-- media -->
  
                    <hr class="mg-y-20">
  
                    <div class="media">
                      <img src="./img/img5.jpg" class="wd-50 rounded-circle" alt="">
                      <div class="media-body mg-l-20">
                        <h6 class="tx-15 mg-b-5"><a href="#">But I must explain to you how all this mistaken</a></h6>
                        <p class="mg-b-20">by: <a href="#">Rolando Paloso</a></p>
                        <p>Everyone realizes why a new common language would be desirable. To achieve this, it would be necessary to have uniform grammar.</p>
                        <p class="mg-b-0">
                          <a href="#" class="btn btn-success pd-sm-x-20 mg-sm-r-5">Approve</a>
                          <a href="#" class="btn btn-secondary pd-sm-x-20">Reject</a>
                        </p>
                      </div><!-- media-body -->
                    </div><!-- media -->
  
                    <hr class="mg-y-20">
  
                    <div class="media">
                      <img src="./img/img7.jpg" class="wd-50 rounded-circle" alt="">
                      <div class="media-body mg-l-20">
                        <h6 class="tx-15 mg-b-5"><a href="#">On the other hand, we denounce with righteous indignation</a></h6>
                        <p class="mg-b-20">by: <a href="#">Richard Salomon</a></p>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        <p class="mg-b-0">
                          <a href="#" class="btn btn-success pd-sm-x-20 mg-sm-r-5">Approve</a>
                          <a href="#" class="btn btn-secondary pd-sm-x-20">Reject</a>
                        </p>
                      </div><!-- media-body -->
                    </div><!-- media -->
                  </div><!-- media-list -->
                </div><!-- card-body -->
              </div><!-- card -->
  
            </div><!-- col-8 -->
            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
              <div class="alert alert-primary bd bd-primary pd-25 mg-b-20">
                <h6 class="tx-14 mg-b-15">Some Announcement</h6>
                <p class="mg-b-0 op-8">Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna.</p>
              </div><!-- alert -->
  
              <div class="card bd-primary">
                <div class="card-header bg-primary tx-white">Widget Box</div>
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div><!-- card-body -->
              </div><!-- card -->
  
              
              <div class="card bd-primary card-calendar mg-t-20">
                <div class="card-header bg-primary tx-white">Event Calendar</div>
                <div class="datepicker"></div>
              </div><!-- card -->
  
              
            </div><!-- col-4 -->
          </div><!-- row -->
        </div><!-- sh-pagebody -->
@endsection