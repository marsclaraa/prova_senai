<div>
    <div class="container mt-5">
    <h2>Bem-vindo, {{ Auth::user()->nome }}!</h2>
    </div>


    <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
  Ações
</a>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Ações</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>

  <div class="offcanvas-body">
      <div class="col-md-4">
            <button wire:click="logout" class=" p-3 text-center btn btn-outline-danger">
                <h5>Logout</h5>
            </button>
        </div>

        <div class="col-md-4">
            <a href="{{ route('produtos.cadastro') }}" class="btn btn-link p-3 text-center">
                <h5>Cadastrar Produto</h5>
            </a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('movimentacaos.index') }}" class="btn btn-link p-3 text-center">
                <h5>Gestão de Estoque</h5>
            </a>
        </div>

</div>

</div>
</div>
     


