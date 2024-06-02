@section('contenido')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h3 class="mb-0">Iniciar Sesión</h3>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group mb-3">
                                <label for="email">Nombre o Correo</label>
                                <input type="text" class="form-control" id="username" name="username"
                                    placeholder="Ingrese su nombre o correo" autofocus value="{{ old('username') }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="password">Contraseña</label>
                                <input type="password" class="form-control" id="contrasenya" name="contrasenya"
                                    placeholder="Ingrese su contraseña" value="{{ old('contrasenya') }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Aceptar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
