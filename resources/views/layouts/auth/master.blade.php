<!DOCTYPE html>
<html lang="en">
  @include('layouts.auth.partials.head')
    <body class="bg-auth">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
             {{ $slot }}
            </div>
          @include("layouts.auth.partials.footer")
        </div>
        @include("layouts.auth.partials.scripts")
    </body>
</html>
