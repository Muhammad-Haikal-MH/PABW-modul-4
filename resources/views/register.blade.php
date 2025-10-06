@extends('layouts.layout-masuk')

@section('titlePages', 'Halaman Registrasi')

@section('content')

    <div class=" gap-10 overflow-hidden flex flex-col md:flex-row w-full max-w-5xl"> 
    
        <!-- Gambar (kiri) -->
        <div class="md:w-1/2 w-full flex items-center justify-center bg-blue-200 p-6">
        <img src="../images/bglogin.png" alt="registrasi Image" class="w-auto h-auto max-w-[300px] md:max-w-md ">
        </div>

        <div class="md:w-[420px] w-80 mx-auto p-8 bg-blue-300 rounded-lg border-2 border-blue-400">
            <form method="post" action="">
                <h1 class="text-4xl font-bold text-center mb-6">Register</h1>
                
                <div class="relative mb-10">
                    <input type="text" name="name" id="name" placeholder="username" required
                        class="w-full h-10 px-2  border-black border-b-2 bg-transparent outline-none placeholder:text-gray-500">
                    <i class='bx bxs-user absolute top-1/2 right-4 transform -translate-y-1/2 text-lg'></i>
                </div>

                <div class="relative mb-10">
                    <input type="password" name="password" id="password" placeholder="password" required
                        class="w-full h-10 px-2 border-b-2 border-black bg-transparent outline-none placeholder:text-gray-500">
                    <i class='bx bxs-lock-alt absolute top-1/2 right-4 transform -translate-y-1/2 text-lg'></i>
                </div>

                <div class="relative mb-10">
                    <input type="email" name="email" id="email" placeholder="email" required
                        class="w-full h-10 px-2 border-b-2 border-black bg-transparent outline-none placeholder:text-gray-500">
                    <i class='bx bxs-envelope absolute top-1/2 right-4 transform -translate-y-1/2 text-lg'></i>
                </div>

                <div class="flex justify-between items-center mb-6 text-sm">
                    <label class="fle   x items-center">
                        <input type="checkbox" class="mr-2"> Remember me
                    </label>
                    
                </div>

                <div class="flex gap-4">
                    <button type="submit" 
                            class="w-full h-10 bg-blue-500  font-semibold rounded-2xl shadow hover:bg-blue-600">daftar</button>
                    
                </div>

                <div class="mt-6 text-center text-sm">
                    <p>udah punya akun? 
                        <a href="login.php" class="text-blue-800 hover:underline">Login</a>
                    </p>
                </div>
            </form>

            <div id="modal"></div>
        </div>
    </div>
    
@endsection