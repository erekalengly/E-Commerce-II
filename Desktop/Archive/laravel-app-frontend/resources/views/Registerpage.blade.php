
<!DOCTYPE html>
<html>
<head>
  <title>register</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <div class="flex items-center basis-full w-screen h-screen overflow-hidden">
    <div class="img">
      <img src="{{ asset('background.jpg') }}" class="h-screen" >
    </div>
      
      <form action="{{ url('register') }}" method="POST">
        @csrf
        <div class="flex flex-col pl-[20px] pr-[20px] ">
          <h1 class="text-[24px] mb-[15px]">Register your account</h1>
          <label for="fname">Full name</label>
          <input type="text" id="fname" name="fullname" class=" pl-[10px] pr-[10px] mb-[10px] rounded-sm border-gray-400 border">
          <label for="email">Email</label>
          <input type="text" id="email" name="email" class="pl-[10px] pr-[10px] mb-[10px] rounded-sm border-gray-400 border">
          <!-- <label for="phnumber">Phone Number</label>
          <input type="number" id="fonenumber" name="fnum" placeholder="(+123) 9876543210" class="pl-[10px] pr-[10px] mb-[10px] rounded-sm border-gray-400 border"> -->
          <label for="password">Password</label>
          <input type="password" id="pw" name="password"  class="pl-[10px] pr-[10px] mb-[10px] rounded-sm border-gray-400 border">
          
          <p class="text-[12px] mb-[15px]" > By signing in, you're agree to our <span class="text-pink-400">Terms & Condition</span> and <span class="text-pink-400">Privacy Policy.</span></p>
          <input type="submit" value="Create New Account" class="pl-[10px] pr-[10px] mb-[10px] rounded-lg border-white border bg-[#FFA9D0] text-white" > 
          <p class="text-[12px] text-center">Already have account? <span class="text-pink-400"><button type="button"><a href="{{ url('/login') }}">Login</button></span></p>
        </div>
      </form>
  </div>
</body>
</html>

