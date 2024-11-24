@section('title','dashboard')

@extends('DOCTOR.Layout.DOC.header')
@section('content') 
<div id="MINE">


            <h1>DOCTOR DASHBOARD</h1>
            <div id="mySidenav" class="sidenav">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <a href="#">Appointment</a>
              <!-- <a href="#">Services</a>
              <a href="#">Clients</a>
              <a href="#">Contact</a> -->
</div>

              <!-- Use any element to open the sidenav -->
              <button type="button" onclick="openNav()" id="BUTTON"class="btn btn-dark">MENU</button> 
                    <!-- </div> -->
                    <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
                    <div id="main">
                                  ...                         <table class="table table-dark table-striped">
                                  <thead>
                                    <tr>
                                      <th scope="col" >SR NO.</th>
                                      <th scope="col">FULL NAME</th>
                                      <th scope="col">EMAIL-ID</th>
                                      <th scope="col">TIMINGS(option selected)</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @php 
                                    $appoint=DB::table("appointment")->get();
                                    $i=0;
                                    @endphp
                                    @foreach ($appoint as $apt)
                                      <tr>
                                        <td>{{++$i}}</td>
                                        <td>{{$apt->NAME}}</td>
                                        <td>{{$apt->EMAIL}}</td>
                                        <td>{{$apt->TIMING}}</td>

                                      </tr>
                                      @endforeach
                                  </tbody>
                                </table>
                    </div>
            </div>
@endsection