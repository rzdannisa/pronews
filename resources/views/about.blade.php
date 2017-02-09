@extends('app')

@section('content')

@include('header')

<!-- Main Wrapper -->
      <div class="wrapper grey-background">
          <div class="container">
              <div class="row">
                  <div class="col l12 col m12 col s12 center-align">
                      <!-- Breadcrumb -->
                      <div class="breadcrumb">
                          <a href="#">Blogs</a> <i class="fa fa-angle-right"></i> About
                          <div class="page-title"> About </div>
                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col l12 col m12 col s12">
                      <div class="about z-depth-1">
                          <!-- About Image -->
                          <img alt="news Image" src="assets/images/about.jpg" class="responsive-img">
                          <div class="col l8 offset-l2 col m12 col s12">
                              <!-- About Detail -->
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel fringilla felis, eget vulputate metus. In sagittis non magna non rutrum. Morbi eu justo est. In hac habitasse platea dictumst. Aenean ac tellus in turpis convallis malesuada nec eget enim. Ut eget elementum lectus, egestas egestas arcu. Proin elementum tempus nunc nec semper. Pellentesque at lectus vel orci luctus placerat. Phasellus fermentum placerat faucibus. In sit amet semper mauris. Nam tempor vestibulum vulputate. Cras consequat tellus sit amet tellus aliquam mattis. Suspendisse potenti. </p>
                              <p>Aliquam enim lacus, pharetra vitae ipsum eu, suscipit convallis nulla. Vivamus et tellus sollicitudin, dictum metus ut, interdum orci. Duis placerat magna porta diam egestas tempor. Sed ornare arcu est, quis vulputate enim volutpat eu. Nullam nec consectetur diam, nec molestie turpis. Nullam efficitur, enim et eleifend accumsan, lorem sapien molestie orci, et malesuada massa ipsum eget elit. Cras metus eros, consequat ut scelerisque ut, vestibulum sed elit. Vestibulum vitae ullamcorper ante, et feugiat quam. Curabitur vitae suscipit massa. Phasellus nibh ex, pellentesque ut tortor non, lobortis venenatis nunc. Proin tristique arcu et arcu aliquet, et dictum ex posuere. Integer enim turpis, eleifend ut nulla dignissim, pulvinar viverra metus. </p>
                              <p>Sed non consectetur eros, non lacinia enim. Nullam elementum dui sem, vitae finibus sapien gravida vitae. Pellentesque nec elementum nisl. Donec ultricies felis eget tempor condimentum. Vestibulum a ultricies eros. Aliquam feugiat eu dui vel auctor. Fusce a accumsan sem, id ullamcorper turpis. Sed accumsan leo vitae est ornare semper. </p>
                              <p>Pellentesque sit amet convallis arcu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut non nibh nec nulla commodo placerat eu ut massa. Sed rhoncus elementum leo sed accumsan. Nulla pharetra, turpis sed ultricies sodales, dui elit vestibulum erat, eu laoreet lectus odio quis ante. Nunc facilisis ligula nulla, eget blandit lacus tempor id. Quisque ac molestie urna. Nulla convallis sapien non leo vulputate, nec mollis nulla imperdiet. Duis eu ornare turpis. Proin lacus sem, euismod sit amet tristique vel, aliquam a felis. Aenean malesuada venenatis leo, a volutpat elit feugiat ac. Nam gravida sapien ultricies ligula lobortis, at consequat turpis facilisis. Aenean dapibus,</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

@include('footer')
@endsection