<header class="header">
  <img src="{{ asset('img/SampleLogo.png') }}" alt="An excelent sample logo for bussiness" class="header-logo" />
  <p class="title">Empresa patito S.A. de C.V.!</p>
  @if(isset($subtitle))
  <h2 class="subtitle">{{ $subtitle }}</h2>
  @endif
</header>
<hr>