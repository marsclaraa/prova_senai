<div class="container d-flex justify-content-center">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            
              <!-- Mensagem de erro -->
        @if (session()->has('error'))
            <div class='alert alert-danger mt-3'>{{ session('error') }}</div>
        @endif

        <form wire:submit.prevent="login" class="mt-4">

                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                  @error('email')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Senha:</label>
                    <input type="password" class="form-control" id="password">
                </div>
                  @error('password')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
                
                <a href="{{ route('dashboard')}}" type="submit" class="btn btn-primary">Logar</a>
            </form>
        </div>
    </div>
</div>  
