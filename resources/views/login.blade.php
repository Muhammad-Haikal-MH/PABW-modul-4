@extends('layouts.layout-masuk')

@section('titlePages', 'Halaman Login')

@section('content')


<div class=" gap-10 overflow-hidden flex flex-col md:flex-row w-full max-w-5xl">
    
    <!-- Gambar (kiri) -->
    <div class="md:w-1/2 w-full flex items-center justify-center bg-blue-200 p-6">
      <img src="../images/bglogin.png" alt="Login Image" class="w-auto h-auto max-w-[300px] md:max-w-md ">
    </div>

    <!-- Form Login (kanan) -->
    <div class="md:w-[420px] w-80 mx-auto p-8 bg-blue-300 rounded-lg border-2 border-blue-400">

      <form action="" method="post">
        <h1 class="text-4xl font-bold text-center md:mb-10 mb-6">Login</h1>
        
        <div class="relative mb-6 md:mb-10">
          <input type="email" id="email" name="email" placeholder="email" required
            class="w-full h-10 px-2 border-b-2 border-black bg-transparent outline-none placeholder:text-gray-500">
          <i class='bx bxs-user absolute top-1/2 right-4 transform -translate-y-1/2 text-lg'></i>
        </div>

        <div class="relative mb-6 md:mb-10">
          <input type="password" id="password" name="password" placeholder="password" required
            class="w-full h-10 px-2 border-b-2 border-black bg-transparent outline-none placeholder:text-gray-500">
          <i class='bx mata absolute top-1/2 right-4 transform -translate-y-1/2 text-lg font-semibold cursor-pointer'></i>
        </div>

        <div class="flex justify-between items-center mb-6 md:mb-10 text-sm">
          <label class="flex items-center">
            <input type="checkbox" class="mr-2"> Remember me
          </label>
          <a href="#" class="text-blue-800 hover:underline">Forgot password?</a>
        </div>

        <div class="flex gap-4 mb-6 md:mb-10">
          <button type="submit"
            class="w-full h-10 bg-blue-500 font-semibold rounded-2xl shadow hover:bg-blue-600">
            Login
          </button>
          <!-- <button type="submit"
            class="w-full h-10 bg-blue-500 font-semibold rounded-2xl shadow hover:bg-blue-600">
            Login as User
          </button> -->
        </div>

        <div class="text-center text-sm">
          <p>belum punya akun?
            <a href="Registrasi.php" class="text-blue-800 hover:underline">registrasi</a>
          </p>
        </div>
      </form>

      <div id="modal"></div>
    </div>

  </div>
  