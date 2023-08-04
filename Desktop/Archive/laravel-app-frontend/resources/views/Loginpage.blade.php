
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <div class="flex items-center basis-full w-screen h-screen overflow-hidden">
    <div class="img">
      <img src="{{ asset('background.jpg') }}" class="h-screen" >
    </div>
      
      <form action="{{ url('loginuser') }}" method="POST" class="w-[30%]">
        @csrf
        <div class="flex flex-col pl-[20px] pr-[20px] ">
          <h1 class="text-[24px] mb-[15px]">Welcome</h1>
          <label for="email">Email</label>
          <input type="text" id="email" name="email" class="pl-[10px] pr-[10px] mb-[10px] rounded-sm border-gray-400 border">
          <label for="password">Password</label>
          <input type="password" id="pw" name="password" class="pl-[10px] pr-[10px] mb-[10px] rounded-sm border-gray-400 border">

          
          <input type="submit" value="Login" class="pl-[10px] pr-[10px] mb-[10px] rounded-lg border-white border bg-[#FFA9D0] text-white" > 
        </div>
      </form>
  </div>
</body>
</html>

