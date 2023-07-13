@extends('base.main')
@section('content')
<div class="container-scroller">
  <div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="row w-100 m-0">
    <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
      <div class="card col-lg-6 mx-auto">
        <div class="card-body px-5 py-5">
            @include('messages')
          <h3 class="card-title text-left mb-3">Adcionar Vagas</h3>
          <form class="form-sample" method="post" action="{{route('vacancie.store')}}">
            @csrf
            <div class="row g-3">
                <div class="col">
                <label>Vagas Disponíveis</label>
                <input type="number" name="number" class="form-control p_input" placeholder="Digite o numero de vagas">
                </div>
            
            
              <div class="col">
              <label>Concursos</label>
              <input type="text" name="name" class="form-control p_input" placeholder="Digite o nome do concurso">
              </div>

              <div class="col">
                <label>Número do Concurso</label>
                <input type="text" name="nrvacancie" class="form-control p_input" placeholder="Digite o numero do concurso">
                </div>
          </div>

          <div class="row g-3">
            <div class="col-lg-3">
            <label for="status">Disponibilidade</label>
            <select type="text" name="status" class="form-control p_input">
              <option value="">Selecione</option>
                  <option value="Aberto">Aberto</option>   
                  <option value="Fechado">Fechado</option>  
            </select>
            </div>

            <div class="col-lg-4">
              <label>Descrição</label>
              <textarea name="description" placeholder="Descrição do concurso"></textarea
              </div>
            </div>
              <div class="col">
              <label for="user_id">Funcioário</label>
              <select value="user_id" name="user_id" class="form-control p_input" required>
              <option value="">Selecione</option>
              @foreach ($user as $user)
                  <option value="{{$user->id}}">{{$user->name}}</option>                  
              @endforeach
            </select>
              </div>
          </div>
        
            <div class="text-center">
              <button type="submit" class="btn btn-primary btn-block enter-btn my-2 col-lg-4">Submeter</button>
            </div>
            <div class="d-flex">
              <a href="{{route('vacancies')}}" class="btn btn-warning btn-sm col-lg-3 mr-2">
                <i class="mdi mdi-reload btn-icon-prepend"></i>Volatr</a>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
  </div>
</div>
@endsection