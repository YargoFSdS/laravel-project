<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<h1>Estácio Linhas Aéreas</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{route('fly.store')}}" method="POST">
    @csrf
    <h3>Passageiro </h3>
    <div class="row">
        <div class="col-md-6">
            <input name="name" type="text" class="form-control" placeholder="Nome do Passageiro">
        </div>
        <div class="col-md-6">
            <input name="cpf" type="text" class="form-control" placeholder="Cpf do Passageiro">
        </div>
    </div>

    <hr> 
    <h3>Ida </h3>
    <div class="row">
        <div class="col-md-12">
            <input name="origin_city" type="text" class="form-control" placeholder="Origem do vôo">
        </div>        
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <input name="origin_latitude" type="text" class="form-control" placeholder="Origem: Latitude">
        </div>
        <div class="col-md-6">
            <input name="origin_longitude" type="text" class="form-control" placeholder="Origem: Longitude">        
        </div>
    </div>

    <hr> 
    <h3>Volta </h3>
    <div class="row">
        <div class="col-md-12">
            <input name="destiny_city" type="text" class="form-control" placeholder="Origem do vôo">
        </div>        
    </div>

    <div class="row">
        <div class="col-md-6">
            <input name="destiny_latitude" type="text" class="form-control" placeholder="Destino: Latitude">
        </div>
        <div class="col-md-6">
            <input name="destiny_longitude" type="text" class="form-control" placeholder="Destino: Longitude">       
        </div>
    </div>

    <hr> 
    <h3>Informações do Vôo </h3>
    <div class="row">
        <div class="col-md-4">
            <input name="price" type="text" class="form-control" placeholder="Preço">
        </div>
        
        <div class="col-md-4">
            <input name="company_code" type="text" class="form-control" placeholder="Códio da Companhia">
        </div>

        <div class="col-md-4">
            <input name="flight_code" type="text" class="form-control" placeholder="Códio do Vôo">
        </div>
    </div>

    <hr> 
    <button type="submit" class="btn btn-success"> Enviar </button>
    <a  class="btn btn-info" href="{{route('fly.relatorio')}}"> Relatório </a>

</form>