<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" href="{{ asset('assets/icon.png') }}" />
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title')</title>
</head>

<body>
  @include('partials.navbar')
  <section class="home-section">
          <nav>
            <div class="profile-details">
              <span class="admin_name">Admin Services</span>
            </div>
          </nav>
          <div class="home-content">
          @yield('content')
		</div>
		</section>
</body>

</html>
