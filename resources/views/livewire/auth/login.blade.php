<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            
              <!-- Mensagem de erro -->
        @if (session()->has('error'))
            <div class='alert alert-danger mt-3'>{{ session('error') }}</div>
        @endif

        <form wire:submit.prevent="login" class="mt-4">

            <div class="mb-3">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="nome" aria-describedby="emailHelp" wire:model='nome'>
                  @error('nome')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
                </div>


                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" wire:model="email">
                  @error('email')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Senha:</label>
                    <input type="password" class="form-control" id="password" wire:model='password'>
                </div>
                  @error('password')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
                
                <button type="submit" class="btn btn-primary">Logar</button>
            </form>
        </div>
    </div>
</div>  
