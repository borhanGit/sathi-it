<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login — Sathi IT CMS</title>
    <link rel="icon" type="image/png" href="{{ asset('uploads/logo.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-950 text-slate-100 font-sans antialiased min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-md space-y-6">
        <!-- Logo & Branding -->
        <div class="text-center space-y-2">
            <img src="{{ asset('uploads/logo.png') }}" alt="Sathi IT Logo" class="h-16 w-auto object-contain mx-auto mb-3 drop-shadow-md">
            <h1 class="text-2xl font-black text-white tracking-tight">Sathi IT <span class="text-emerald-400">CMS</span></h1>
            <p class="text-xs text-slate-400">Management Back-Office Portal</p>
        </div>

        <!-- Login Card -->
        <div class="bg-slate-900 border border-slate-800 rounded-3xl p-8 shadow-2xl space-y-6">
            @if(session('error'))
                <div class="p-4 rounded-xl bg-rose-500/10 border border-rose-500/20 text-rose-400 text-xs">
                    {{ session('error') }}
                </div>
            @endif

            @if(session('success'))
                <div class="p-4 rounded-xl bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 text-xs">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('admin.login.submit') }}" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label for="email" class="block text-xs font-bold text-slate-300 uppercase tracking-wider mb-2">Admin Email</label>
                    <input type="email" id="email" name="email" required value="{{ old('email', 'admin@sathiit.com') }}" class="w-full px-4 py-3 rounded-xl bg-slate-800 border border-slate-700 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-emerald-500 text-sm">
                    @error('email') <p class="text-rose-400 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="password" class="block text-xs font-bold text-slate-300 uppercase tracking-wider mb-2">Password</label>
                    <input type="password" id="password" name="password" required value="admin12345" class="w-full px-4 py-3 rounded-xl bg-slate-800 border border-slate-700 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-emerald-500 text-sm">
                    @error('password') <p class="text-rose-400 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="flex items-center justify-between text-xs text-slate-400 pt-1">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="remember" class="rounded bg-slate-800 border-slate-700 text-emerald-500 focus:ring-emerald-500">
                        <span>Keep me logged in</span>
                    </label>
                    <span class="text-emerald-400/80">Secured Session</span>
                </div>

                <div class="pt-2">
                    <button type="submit" class="w-full py-3.5 rounded-xl bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-black text-sm shadow-xl shadow-emerald-500/20 transition-all">
                        Sign In to Back-Office
                    </button>
                </div>
            </form>

            <div class="pt-4 border-t border-slate-800 text-center text-xs text-slate-500">
                <p>Default Credentials: <code class="text-emerald-400 font-mono">admin@sathiit.com</code> / <code class="text-emerald-400 font-mono">admin12345</code></p>
            </div>
        </div>

        <div class="text-center">
            <a href="{{ route('home') }}" class="text-xs text-slate-500 hover:text-emerald-400 transition-colors">
                &larr; Return to Public Website
            </a>
        </div>
    </div>

</body>
</html>
